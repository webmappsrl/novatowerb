<?php

namespace Tests\Feature;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class storeApiTest extends TestCase
{

//    public function testBadInsertUser()
//    {
//        $token_fake = 'ddddd';
//        $data = [
//            "title" => [
//                "en" => "nedo",
//                "fr" => "francese",
//                "it" => "italioti"
//            ],
//            "body" => [
//                "en" => "ndncidcdksncsdn",
//                "fr" => "ndncidcdksncscddddddn",
//                "it" => "ndncidcdksncscddddddn",
//            ]
//        ];
//
//        $response = $this->withHeaders([
//            'Content-Type' => 'application/json',
//            'Accept' => 'application/json'
//        ])->post('/api/store',$data);
//
//
//        //check user
//        $response ->assertStatus(400);
//        $this->assertSame($response['error'],'token does not exist or has not been inserted');
//
//        $response = $this->withHeaders([
//            'Content-Type' => 'application/json',
//            'Accept' => 'application/json',
//            'Authorization' => 'Bearer '.$token_fake,
//        ])->post('/api/store',$data);
//
//        //check token
//        $response ->assertStatus(400);
//        $this->assertSame($response['error'],'token does not exist or has not been inserted');
//
//    }



    public function testInsertArticle()
    {
        $this->withoutExceptionHandling();

        $token = 'izjY6Y8fk8y4ztWuagfdaPzaszOvo1ix8ghvApUv9JRjMZP7PR';

        $data = [
            "title" => [
                "en" => "engl",
                "fr" => "francese",
                "it" => "ital"
            ],
            "body" => [
                "en" => "ndncidcdksncsdn",
                "fr" => "ndncidcdksncscddddddn",
                "it" => "ndncidcdksncscddddddn",
            ]
        ];

        //check article

        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$token,
        ])->postJson('/api/store',$data);

        $response ->assertStatus(201);
        $artMultiLang = Article::find($response['id']);
        $this->assertSame($data['user_id'],$response['user_id']);
        $this->assertSame($artMultiLang['user_id'],$response['user_id']);
        $this->assertSame($data['title']['en'],$response['title']['en']);
        $this->assertSame($artMultiLang->getTranslation('title', 'en'),$response['title']['en']);
        $this->assertSame($data['body']['en'],$response['body']['en']);
        $this->assertSame($artMultiLang->getTranslation('body', 'en'),$response['body']['en']);
        $this->assertSame($data['title']['fr'],$response['title']['fr']);
        $this->assertSame($artMultiLang->getTranslation('title', 'fr'),$response['title']['fr']);
        $this->assertSame($data['body']['fr'],$response['body']['fr']);
        $this->assertSame($artMultiLang->getTranslation('body', 'fr'),$response['body']['fr']);
        $this->assertSame($data['title']['it'],$response['title']['it']);
        $this->assertSame($artMultiLang->getTranslation('title', 'it'),$response['title']['it']);
        $this->assertSame($data['body']['it'],$response['body']['it']);
        $this->assertSame($artMultiLang->getTranslation('body', 'it'),$response['body']['it']);
    }

}
