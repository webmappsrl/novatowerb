<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create([

            'name'=>'Webmapp Team',
            'email'=>'team@webmapp.it',
            'password'=>bcrypt('webmapp2020'),
            'remember_token'=>'qeUa39ecZk',
            'api_token'=>'g2BOTXhe5IfYVTXYmxTfDu1ribuh52lSdoqMj76Bk58MsUl1IuMdBzcg7JYq'

        ]);

        \App\Models\User::factory(1)->create([

            'name'=>'Margherita Meraglino',
            'email'=>'mm@webmapp.it',
            'password'=>bcrypt('webmapp2020'),
            'remember_token'=>'qeUad39ecZk',
            'api_token'=>'nkP9z4xBlliOqPmKWDJRzSFQ3fCYEfnAhgum7l2HO333nj8kD0'

        ]);

        \App\Models\User::factory(1)->create([

            'name'=>'Sabrina Fontanini',
            'email'=>'sf@webmapp.it',
            'password'=>bcrypt('webmapp2020'),
            'remember_token'=>'qeUad39ecZk',
            'api_token'=>'MEUofNffVFpg4ITWTe84GrHhxlQ3YAWX1daEILTM2gzowtk3gx'

        ]);

        \App\Models\Article::factory(10000)->create();
    }
}
