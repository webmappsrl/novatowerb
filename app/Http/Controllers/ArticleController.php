<?php

namespace App\Http\Controllers;
use App\Models\Article;
Use App;
Use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function show($n)
    {
        $a = Article::find($n);
        return view('showArticle',['article'=>$a]);
    }

    public function showApi($n)
    {
        $a = Article::find($n);
        return response()->json($a);
    }

    public function index()
    {
        $article = Article::limit(10)->get();
        $top = Article::find(16);
        $dx =  Article::find(13);
        return view('home',['articles'=>$article,'top'=>$top,'dx'=>$dx]);
    }

    public function index1()
    {
        $article = Article::orderBy('created_at', 'desc')->paginate(20);
        $top = Article::find(16);
        $dx =  Article::find(13);
        return view('articles',['articles'=>$article,'top'=>$top,'dx'=>$dx]);
    }

    public function indexApi($n)
    {
        $article = Article::paginate($n);
        return response()->json($article);
    }

    public function edit(Article $article)
    {
        return view('editArticle',compact('article'));
    }

    public function update(Article $article)
    {
         $article->title = request('title');
         $article->body = request('body');

         $article->save();

        return redirect("http://towerb.test/".App::getLocale()."/articles/".$article->id);
    }

    public function create()
    {
        return view('createArticle');
    }

    public function createAll()
    {
        return view('createAllArticle');
    }

    public function store()
    {
         $article = new Article();
         $article->title = request('title');
         $article->body = request('body');
         $article->user_id = request('user_id');
         $article->save();


        return redirect("http://towerb.test/".App::getLocale()."/articles/".$article->id);

    }

    public function storeAll()
    {
        $article = new Article();
        $article->user_id = request('user_id');
        $article
            ->setTranslation('title', 'en', request('titleen'))
            ->setTranslation('body', 'en', request('bodyen'))
            ->setTranslation('title', 'fr', request('titlefr'))
            ->setTranslation('body', 'fr', request('bodyfr'))
            ->setTranslation('title', 'it', request('titleit'))
            ->setTranslation('body', 'it',request('bodyit'))
            ->save();


        return redirect("http://towerb.test/".App::getLocale()."/articles/");

    }

    protected function validateArticle()
    {
        return request()->validate([
            'title'=>'required',
            'body'=>'required',
        ]);
    }


    public function storeApiSingleLang(Request $request)
    {
        $request=$request->all();

        $langValid = ['fr','it','en'];

        $validator = Validator::make($request, [
            'title' => 'required|string',
            'body' => 'required|string',
            'user_id'=>'required|integer|exists:users,id',
            'lang'=>'required|string'
        ]);

        if($validator->fails())
        {
            return response(['error' => $validator->errors(), 'Validation Error'],400);
        }

        if(!in_array($request['lang'], $langValid))
        {
            return response(['error' => 'the language is not set correctly'],400);
        }

        app()->setLocale($request['lang']);
        $request = Article::create($request);
        return response()->json($request, 201);
    }



}
