<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\User;

Use App;
Use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleApiController extends Controller
{

    public function indexApi($n)
    {
        $article = Article::paginate($n);
        return response()->json($article);
    }

    public function showApi($n)
    {
        $a = Article::find($n);
        return response()->json($a);
    }
    public function storeApi(Request $request)
    {
        $langValid = ['fr','it','en','ru','de','es'];
        $token = $request->bearerToken();
        $user_id= $user_id = User::where('api_token', $token)->firstOrFail();

        $request=$request->all();
        if(!isset($request['title'])||!isset($request['body']))
        {
            return response(['error' => 'missing title or body index'],400);
        }

        if (count($request['title']) == count($request['body']))
        {
            if (count($request['title']) == 0) return response(['error' => 'enter at least one language'],400);
            $t = array_keys($request['title']);
            $b = array_keys($request['body']);

           for ($i = 0; $i < count($t);$i++){

               if(!in_array($t[$i], $langValid))
               {
                   return response(['error' => 'the language in title is not set correctly'],400);
               }
               if(!in_array($b[$i], $langValid))
               {
                   return response(['error' => 'the language in body is not set correctly'],400);
               }
               if ($b[$i] != $t[$i])
               {
                   return response(['error' => 'you have to set title '.$t[$i].' and body '.$b[$i] .' in the usual language'],400);
               }

                $validatorT = Validator::make($request['title'], [
                    $t[$i] => 'string|required',
                ]);

               if($validatorT->fails()){
                   return response(['error' => $validatorT->errors(), 'Validation Error'],400);
               }

               $validatorB = Validator::make($request['body'], [
                   $b[$i] => 'string|required',
               ]);

               if($validatorB->fails()){
                   return response(['error' => $validatorB->errors(), 'Validation Error'],400);
               }

            }

        }
        else
        {
            return response(['error' => 'each article must include the title and body for each language you want to insert'],400);
        }

        //insert
        $article = new Article();
        $article->user_id = $user_id['id'];
        for ($i =0; $i<count($t);$i++)
        {
            $article->setTranslation('title', $t[$i], $request['title'][$t[$i]])
                ->setTranslation('body', $t[$i], $request['body'][$t[$i]]);
        }

        $article->save();
        return response()->json($article, 201);
    }

}
