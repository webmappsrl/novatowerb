<?php

namespace Tests\Feature;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class storeApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testBadInsertUser()
    {
        $token = 'g2BOTXhe5IfYVTXYmxTfDu1ribuh52lSdoqMj76Bk58MsUl1IuMdBzcg7JYq';
        $data = [
            "user_id" => 100000000,
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


        $response = $client->request('POST', '/api/store', [
            'headers' => [
                'Authorization' => 'Bearer '.$token,
                'Accept' => 'application/json',
            ],
        ]);

        //check user
        $response = $this->post('/api/store',$data);
        $response ->assertStatus(400);
        $this->assertSame($response['error']['user_id'][0],'The selected user id is invalid.');

        $data = [
            "user_id" => "100000000",
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


        //check user require integer
        $response = $this->post('/api/store',$data);
        $response ->assertStatus(400);
        $this->assertSame($response['error']['user_id'][0],'The selected user id is invalid.');


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

        //check user required
        $response = $this->post('/api/store',$data);
        $response ->assertStatus(400);
        $this->assertSame($response['error']['user_id'][0],'The user id field is required.');

    }

    public function testBadInsertEn()
    {
        $data = [
            "user_id" => 1,
            "title" => [
                "fr" => "francese",
                "it" => "italioti"
            ],
            "body" => [
                "fr" => "ndncidcdksncscddddddn",
                "it" => "ndncidcdksncscddddddn",
            ]
        ];

        //check en require
        $response = $this->post('/api/store',$data);
        $response ->assertStatus(400);
        $this->assertSame($response['error']['title.en'][0],'The title.en field is required.');
        $this->assertSame($response['error']['body.en'][0],'The body.en field is required.');

        $data = [
            "user_id" => 1,
            "title" => [
                "en" => 2,
                "fr" => "francese",
                "it" => "italioti"
            ],
            "body" => [
                "en" => 3,
                "fr" => "ndncidcdksncscddddddn",
                "it" => "ndncidcdksncscddddddn",
            ]
        ];

        //check en string
        $response = $this->post('/api/store',$data);
        $response ->assertStatus(400);
        $this->assertSame($response['error']['title.en'][0],'The title.en must be a string.');
        $this->assertSame($response['error']['body.en'][0],'The body.en must be a string.');

    }

    public function testBadInsertFr()
    {
        $data = [
            "user_id" => 1,
            "title" => [
                "en" => "nedo",
                "it" => "italioti"
            ],
            "body" => [
                "en" => "ndncidcdksncsdn",
                "it" => "ndncidcdksncscddddddn",
            ]
        ];

        //check fr require
        $response = $this->post('/api/store',$data);
        $response ->assertStatus(400);
        $this->assertSame($response['error']['title.fr'][0],'The title.fr field is required.');
        $this->assertSame($response['error']['body.fr'][0],'The body.fr field is required.');

        $data = [
            "user_id" => 1,
            "title" => [
                "en" => "dd",
                "fr" => 2,
                "it" => "italioti"
            ],
            "body" => [
                "en" => "dd",
                "fr" => 2,
                "it" => "ndncidcdksncscddddddn",
            ]
        ];

        //check fr string
        $response = $this->post('/api/store',$data);
        $response ->assertStatus(400);
        $this->assertSame($response['error']['title.fr'][0],'The title.fr must be a string.');
        $this->assertSame($response['error']['body.fr'][0],'The body.fr must be a string.');
    }

    public function testBadInsertIt()
    {
        $data = [
            "user_id" => 1,
            "title" => [
                "en" => "nedo",
                "fr" => "francese",
            ],
            "body" => [
                "en" => "ndncidcdksncsdn",
                "fr" => "ndncidcdksncscddddddn",
            ]
        ];

        //check require it
        $response = $this->post('/api/store',$data);
        $response ->assertStatus(400);
        $this->assertSame($response['error']['title.it'][0],'The title.it field is required.');
        $this->assertSame($response['error']['body.it'][0],'The body.it field is required.');

        $data = [
            "user_id" => 1,
            "title" => [
                "en" => "nedo",
                "fr" => "francese",
                "it" => 2
            ],
            "body" => [
                "en" => "ndncidcdksncsdn",
                "fr" => "ndncidcdksncscddddddn",
                "it" => 1,
            ]
        ];

        $response = $this->post('/api/store',$data);
        $response ->assertStatus(400);
        $this->assertSame($response['error']['title.it'][0],'The title.it must be a string.');
        $this->assertSame($response['error']['body.it'][0],'The body.it must be a string.');

    }

    public function testInsertArticle()
    {
        $data = [
            "user_id" => 1,
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

        //check article
        $response = $this->post('/api/store',$data);
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

//    public function setUp(): void
//    {
//        parent::setUp();
//        $this->artisan('migrate:fresh --seed');
//    }
}
