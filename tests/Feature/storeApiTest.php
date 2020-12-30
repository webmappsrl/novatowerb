<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class storeApiTest extends TestCase
{

    public function testBadInsertUser()
    {
        $token_fake = 'ddddd';
        $data = [
            "title" => [
                "en" => "nedo",
                "fr" => "francese",
                "it" => "italioti"
            ],
            "body" => [
                "en" => "ndncidcdksncsdn",
                "fr" => "ndncidcdksncscddddddn",
                "it" => "ndncidcdksncscddddddn",
            ]
        ];

        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ])->postJson('/api/store',$data);


        //check user
        $response ->assertStatus(404);
        $this->assertSame($response['message'],'No query results for model [App\Models\User].');

        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$token_fake,
        ])->postJson('/api/store',$data);

        //check token
        $response ->assertStatus(404);
        $this->assertSame($response['message'],'No query results for model [App\Models\User].');

    }

    public function testBadInsertArticle()
    {
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

            ]
        ];

        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$token,
        ])->postJson('/api/store',$data);

        $response ->assertStatus(400);
        $this->assertSame($response['error'],'each article must include the title and body for each language you want to insert');

        $data = [
            "title" => [
                "en" => "engl",
                "fr" => "francese",
            ],
            "body" => [
                "en" => "ndncidcdksncsdn",
                "fr" => "ndncidcdksncscddddddn",
                "it" => "ital"

            ]
        ];

        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$token,
        ])->postJson('/api/store',$data);

        $response ->assertStatus(400);
        $this->assertSame($response['error'],'each article must include the title and body for each language you want to insert');

        $data = [
            "title" => [
                "en" => "engl",
                "fr" => "francese",
                "pl" => "ital"

            ],
            "body" => [
                "en" => "ndncidcdksncsdn",
                "fr" => "ndncidcdksncscddddddn",
                "it" => "ital"
            ]
        ];

        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$token,
        ])->postJson('/api/store',$data);

        $response ->assertStatus(400);
        $this->assertSame($response['error'],'the language in title is not set correctly');

        $data = [
            "title" => [
                "en" => "engl",
                "fr" => "francese",
                "ru" => "ital"

            ],
            "body" => [
                "en" => "ndncidcdksncsdn",
                "fr" => "ndncidcdksncscddddddn",
                "it" => "ital"
            ]
        ];

        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$token,
        ])->postJson('/api/store',$data);

        $response ->assertStatus(400);
        $this->assertSame($response['error'],'you have to set title ru and body it in the usual language');

        $data = [
            "title" => [


            ],
            "body" => [

            ]
        ];

        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$token,
        ])->postJson('/api/store',$data);

        $response ->assertStatus(400);
        $this->assertSame($response['error'],'enter at least one language');

        $data = [
            "title" => [
                "en" => 1,
                "fr" => "francese",
                "pl" => "ital"

            ],
            "body" => [
                "en" => "ndncidcdksncsdn",
                "fr" => "ndncidcdksncscddddddn",
                "it" => "ital"
            ]
        ];

        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$token,
        ])->postJson('/api/store',$data);

        $response ->assertStatus(400);
        $this->assertSame($response['error']['en'][0],'The en must be a string.');

        $data = [
            "title" => [
                "en" => "enddd",
                "fr" => "francese",
                "pl" => "ital"

            ],
            "body" => [
                "en" => "ndncidcdksncsdn",
                "fr" => 2,
                "it" => "ital"
            ]
        ];

        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$token,
        ])->postJson('/api/store',$data);

        $response ->assertStatus(400);
        $this->assertSame($response['error']['fr'][0],'The fr must be a string.');



    }


    public function testInsertArticle()
    {
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
        $user_id= $user_id = User::where('api_token', $token)->firstOrFail();
        $artMultiLang = Article::find($response['id']);
        $this->assertSame($user_id['id'],$response['user_id']);
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

        $data = [
            "title" => [
                "en" => "engl",
                "fr" => "francese",
            ],
            "body" => [
                "en" => "ndncidcdksncsdn",
                "fr" => "ndncidcdksncscddddddn",
            ]
        ];

        //check article

        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$token,
        ])->postJson('/api/store',$data);
        $response ->assertStatus(201);
        $user_id= $user_id = User::where('api_token', $token)->firstOrFail();
        $artMultiLang = Article::find($response['id']);
        $this->assertSame($user_id['id'],$response['user_id']);
        $this->assertSame($artMultiLang['user_id'],$response['user_id']);
        $this->assertSame($data['title']['en'],$response['title']['en']);
        $this->assertSame($artMultiLang->getTranslation('title', 'en'),$response['title']['en']);
        $this->assertSame($data['body']['en'],$response['body']['en']);
        $this->assertSame($artMultiLang->getTranslation('body', 'en'),$response['body']['en']);
        $this->assertSame($data['title']['fr'],$response['title']['fr']);
        $this->assertSame($artMultiLang->getTranslation('title', 'fr'),$response['title']['fr']);
        $this->assertSame($data['body']['fr'],$response['body']['fr']);
        $this->assertSame($artMultiLang->getTranslation('body', 'fr'),$response['body']['fr']);
    }



}
