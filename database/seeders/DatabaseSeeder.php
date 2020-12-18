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

        \App\Models\Language::factory(1)->create([

            'name'=>'French',
        ]);
        \App\Models\Language::factory(1)->create([

            'name'=>'English',
        ]);
        \App\Models\Language::factory(1)->create([

            'name'=>'Italian',
        ]);
        \App\Models\Language::factory(1)->create([

            'name'=>'Spanish',
        ]);
        \App\Models\Language::factory(1)->create([

            'name'=>'Russian',
        ]);
        \App\Models\Language::factory(1)->create([

            'name'=>'German',
        ]);


        \App\Models\User::factory(1)->create([

            'name'=>'Webmapp Team',
            'email'=>'team@webmapp.it',
            'password'=>bcrypt('webmapp2020'),
            'remember_token'=>'qeUa39ecZk',
            'lang_id_1' =>1,
            'api_token'=>'g2BOTXhe5IfYVTXYmxTfDu1ribuh52lSdoqMj76Bk58MsUl1IuMdBzcg7JYq'

        ]);

        \App\Models\User::factory(1)->create([

            'name'=>'Margherita Meraglino',
            'email'=>'mm@webmapp.it',
            'password'=>bcrypt('webmapp2020'),
            'lang_id_1' =>1,

            'remember_token'=>'qeUad39ecZk',
            'api_token'=>'nkP9z4xBlliOqPmKWDJRzSFQ3fCYEfnAhgum7l2HO333nj8kD0'

        ]);

        \App\Models\User::factory(1)->create([

            'name'=>'Sabrina Fontanini',
            'email'=>'sf@webmapp.it',
            'password'=>bcrypt('webmapp2020'),
            'lang_id_1' =>1,
            'remember_token'=>'qeUad39ecZk',
            'api_token'=>'MEUofNffVFpg4ITWTe84GrHhxlQ3YAWX1daEILTM2gzowtk3gx'

        ]);

        \App\Models\Article::factory(10)->create([

                        'user_id' => 3,
                        'title' => [
                            'en' => 'eng',
                            'fr' => 'french',
                            'it' => 'ita',
                        ],
                        'body' => [
                            'en' => "A proper article indicates that its noun is proper, and refers to a unique entity. It may be the name of a person, the name of a place, the name of a planet, etc. The Maori language has the proper article a, which is used for personal nouns; so. In Maori, when the personal nouns have the definite or indefinite article as an important part of it, both articles are present; for example, the phrase which contains both the proper article a and the definite article Te refers to the person name Te Rauparaha",
                            'fr' => "Le français est une langue indo-européenne de la famille des langues romanes. Le français s'est formé en France (variété de la « langue d'oïl », qui était la langue de la partie septentrionale du pays). Le français est déclaré langue officielle en France en 15395. Il est parlé, en 2018, sur tous les continents par environ 300 millions de personnes1,6,2 : 235 millions l'emploient quotidiennement, et 90 millions3 en sont des locuteurs natifs. En 2018, 80 millions d'élèves et étudiants s'instruisent e",
                            'it' => "Io mi rimetto a loro, decidano loro dice Eugenio Giani annunciando che il report sui dati del contagio in Toscana è stato inviato all'Iss affinché possa nuovamente essere valutata la classificazione della Toscana arancio e anticipato il passaggio alla fascia di restrizioni gialla. Inutile - dice il presidente della Regione - fare azioni che poi compromettono la trasparenza e la correttezza del dialogo. I dati secondo Giani legittimano la richiesta di zona gialla.Spero che si trovino le condizioni",
                        ],
                        'img' => 'https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80'


        ]);

        \App\Models\Article::factory(10)->create([

            'user_id' => 2,
            'title' => [
                'en' => 'eng',
                'fr' => 'french',
                'it' => 'ita',
            ],
            'body' => [
                'en' => "A proper article indicates that its noun is proper, and refers to a unique entity. It may be the name of a person, the name of a place, the name of a planet, etc. The Maori language has the proper article a, which is used for personal nouns; so. In Maori, when the personal nouns have the definite or indefinite article as an important part of it, both articles are present; for example, the phrase which contains both the proper article a and the definite article Te refers to the person name Te Rauparaha",
                'fr' => "Le français est une langue indo-européenne de la famille des langues romanes. Le français s'est formé en France (variété de la « langue d'oïl », qui était la langue de la partie septentrionale du pays). Le français est déclaré langue officielle en France en 15395. Il est parlé, en 2018, sur tous les continents par environ 300 millions de personnes1,6,2 : 235 millions l'emploient quotidiennement, et 90 millions3 en sont des locuteurs natifs. En 2018, 80 millions d'élèves et étudiants s'instruisent e",
                'it' => "Io mi rimetto a loro, decidano loro dice Eugenio Giani annunciando che il report sui dati del contagio in Toscana è stato inviato all'Iss affinché possa nuovamente essere valutata la classificazione della Toscana arancio e anticipato il passaggio alla fascia di restrizioni gialla. Inutile - dice il presidente della Regione - fare azioni che poi compromettono la trasparenza e la correttezza del dialogo. I dati secondo Giani legittimano la richiesta di zona gialla.Spero che si trovino le condizioni",
            ],
            'img' => 'https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80'


        ]);


        \App\Models\Article::factory(10000)->create();
    }
}
