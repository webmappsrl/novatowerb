<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Article;


class indexApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/api/index/30');
        $el = 0;
        for ($i = 1; $i<=$response['last_page'];$i++)
        {
            $response = $this->get('/api/index/30?page='.$i);
            $response->assertStatus(200);
            $el += count($response['data']);
        }
        $this->assertSame($el,count(Article::all()));
    }
}
