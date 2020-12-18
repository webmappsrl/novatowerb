<?php

namespace Tests\Feature;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class storeApiSingleLangTest extends TestCase
{
    public function testSingleLangBadInsertUser()
    {
        $data = [
            "user_id"=>1000000,
            "title"=>"nedo",
	        "body"=>"idcndincdnindni",
	        "lang"=>"it"
        ];

        //check user
        $response = $this->post('/api/storeSingleLang',$data);
        $response ->assertStatus(400);
        $this->assertSame($response['error']['user_id'][0],'The selected user id is invalid.');

        $data = [
            "user_id"=>"1000000",
            "title"=>"nedo",
            "body"=>"idcndincdnindni",
            "lang"=>"it"
        ];


        //check user require integer
        $response = $this->post('/api/storeSingleLang',$data);
        $response ->assertStatus(400);
        $this->assertSame($response['error']['user_id'][0],'The selected user id is invalid.');


        $data = [
            "title"=>"nedo",
            "body"=>"idcndincdnindni",
            "lang"=>"it"
        ];

        //check user required
        $response = $this->post('/api/storeSingleLang',$data);
        $response ->assertStatus(400);
        $this->assertSame($response['error']['user_id'][0],'The user id field is required.');

    }

    public function testSingleLangBadInsertOtherField()
    {
        $data = [
            "user_id"=>1,
            "body"=>"idcndincdnindni",
            "lang"=>"it"
        ];

        //check title
        $response = $this->post('/api/storeSingleLang',$data);
        $response ->assertStatus(400);
        $this->assertSame($response['error']['title'][0],'The title field is required.');

        $data = [
            "user_id"=>1,
            "title" => 2,
            "body"=>"idcndincdnindni",
            "lang"=>"it"
        ];

        //check title
        $response = $this->post('/api/storeSingleLang',$data);
        $response ->assertStatus(400);
        $this->assertSame($response['error']['title'][0],'The title must be a string.');

        $data = [
            "user_id"=>1,
            "title"=>"nedo",
            "lang"=>"it"
        ];

        //check body
        $response = $this->post('/api/storeSingleLang',$data);
        $response ->assertStatus(400);
        $this->assertSame($response['error']['body'][0],'The body field is required.');

        $data = [
            "user_id"=>2,
            "title"=>"nedo",
            "body"=>2,
            "lang"=>"it"
        ];

        //check body
        $response = $this->post('/api/storeSingleLang',$data);
        $response ->assertStatus(400);
        $this->assertSame($response['error']['body'][0],'The body must be a string.');

        $data = [
            "user_id"=>1,
            "title"=>"nedo",
            "body"=>"idcndincdnindni",
        ];

        //check body
        $response = $this->post('/api/storeSingleLang',$data);
        $response ->assertStatus(400);
        $this->assertSame($response['error']['lang'][0],'The lang field is required.');

        $data = [
            "user_id"=>1,
            "title"=>"nedo",
            "body"=>"idcndincdnindni",
            "lang"=>1
        ];
        //check lang
        $response = $this->post('/api/storeSingleLang',$data);
        $response ->assertStatus(400);
        $this->assertSame($response['error']['lang'][0],'The lang must be a string.');

        $data = [
            "user_id"=>1,
            "title"=>"nedo",
            "body"=>"idcndincdnindni",
            "lang"=>"italiamo"
        ];
        //check lang
        $response = $this->post('/api/storeSingleLang',$data);
        $response ->assertStatus(400);
        $this->assertSame($response['error'],'the language is not set correctly');
    }

    public function testInsertArticle()
    {
        $data = [
            "user_id"=>1,
            "title"=>"nedo",
            "body"=>"idcndincdnindni",
            "lang"=>"it"
        ];

        //check article
        $response = $this->post('/api/storeSingleLang',$data);
        $response ->assertStatus(201);
        $artMultiLang = Article::find($response['id']);
        $this->assertSame($data['user_id'],$response['user_id']);
        $this->assertSame($artMultiLang['user_id'],$response['user_id']);
        $this->assertArrayHasKey('it', $response['title']);
        $this->assertSame($data['title'],$response['title']['it']);
        $this->assertSame($artMultiLang->getTranslation('title', 'it'),$response['title']['it']);
        $this->assertArrayHasKey('it', $response['body']);
        $this->assertSame($data['body'],$response['body'][$data['lang']]);
        $this->assertSame($artMultiLang->getTranslation('body', 'it'),$response['body']['it']);
    }
}
