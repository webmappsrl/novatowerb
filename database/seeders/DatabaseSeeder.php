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
            'sigla'=>'fr',
        ]);
        \App\Models\Language::factory(1)->create([

            'name'=>'English',
            'sigla'=>'en',
        ]);
        \App\Models\Language::factory(1)->create([

            'name'=>'Italian',
            'sigla'=>'it',
        ]);
        \App\Models\Language::factory(1)->create([

            'name'=>'Spanish',
            'sigla'=>'es',
        ]);
        \App\Models\Language::factory(1)->create([

            'name'=>'Russian',
            'sigla'=>'ru',
        ]);
        \App\Models\Language::factory(1)->create([

            'name'=>'German',
            'sigla'=>'de',
        ]);


        \App\Models\User::factory(1)->create([

            'name'=>'Webmapp Team',
            'email'=>'team@webmapp.it',
            'password'=>bcrypt('webmapp2020'),
            'role'=>'Admin',
            'remember_token'=>'qeUa39ecZk',
            'api_token'=>'g2BOTXhe5IfYVTXYmxTfDu1ribuh52lSdoqMj76Bk58MsUl1IuMdBzcg7JYq'

        ]);

        \App\Models\User::factory(1)->create([

            'name'=>'Margherita Meraglino',
            'email'=>'mm@webmapp.it',
            'password'=>bcrypt('webmapp2020'),
            'role'=>'Editor',
            'remember_token'=>'qeUad39ecZk',
            'api_token'=>'nkP9z4xBlliOqPmKWDJRzSFQ3fCYEfnAhgum7l2HO333nj8kD0'

        ]);

        \App\Models\User::factory(1)->create([

            'name'=>'Sabrina Fontanini',
            'email'=>'sf@webmapp.it',
            'password'=>bcrypt('webmapp2020'),
            'role'=>'Editor',
            'remember_token'=>'qeUad39ecZk',
            'api_token'=>'MEUofNffVFpg4ITWTe84GrHhxlQ3YAWX1daEILTM2gzowtk3gx'

        ]);

        \App\Models\User::factory(1)->create([

            'name'=>'Marco Baroncini',
            'email'=>'mb@webmapp.it',
            'password'=>bcrypt('webmapp2020'),
            'role'=>'Admin',
            'remember_token'=>'qeUad39ecZk',
            'api_token'=>'izjY6Y8fk8y4ztWuagfdaPzaszOvo1ix8ghvApUv9JRjMZP7PR'

        ]);

        \App\Models\Article::factory(10)->create([

                        'user_id' => 3,
                        'title' => [
                            'it' => 'Viaggio nel caveau toscano del vaccino anti-Covid: la procedura da "brividi" prima dell’iniezione',
                            'fr' => 'Covid-19 : ce que contient le controversé projet de loi instituant un régime pérenne des urgences sanitaires',
                            'en' => 'Journal of English for Academic Purposes',
                        ],
                        'body' => [
                            'it' => "L’azienda ha garantito che l’avvio della distribuzione sarà immediato. I camion con i primi quantitativi partiranno dal sito produttivo del Belgio per consegnare i contenitori delle dosi già a Natale, scortati dall’esercito fino allo Spallanzani. Poi si procederà con la consegna dei quantitativi alle regioni, in 220 ospedali. Sarà una vaccinazione dimostrativa per 10 mila operatori sanitari che si sono prenotati spontaneamente. Nelle settimane successive arriveranno almeno 300 mila dosi a settimana. Nel corso dell’anno saranno 26milioni di dosi",
                            'fr' => "Le français est une langue indo-européenne de la famille des langues romanes. Le français s'est formé en France (variété de la « langue d'oïl », qui était la langue de la partie septentrionale du pays). Le français est déclaré langue officielle en France en 15395. Il est parlé, en 2018, sur tous les continents par environ 300 millions de personnes1,6,2 : 235 millions l'emploient quotidiennement, et 90 millions3 en sont des locuteurs natifs. En 2018, 80 millions d'élèves et étudiants s'instruisent e",
                            'en' => "Framework of self, we scrutinise each participant's data from their first PhD thesis draft, a retrospective written report, and two rounds of semi-structured interviews. Results reveal that, by interacting with others (e.g., supervisors, theorists) in the context where the thesis is produced, the participants' epistemology has developed. This epistemological development itself is the process in which students forge their own philosophical views in relation to knowledge and knowing as individual researchers and members of an academic community with shared disciplinary attributes. The philosophical views further inform their writers' voice as the representation of their individual and social selves that are embodied in thesis writing. Results also indicate that Chinese international doctoral students bring valuable cultural assets for potential intercultural communication between Chinese and Anglophone disciplinary scholarships. For these students who write their theses in English as a second or additional language (L2), such interchanges create a space for them to (re)examine the different ideologies that promote their learning",
                        ],
                        'img' => 'https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80'
        ]);
        $sf = \App\Models\User::find(2);
        $sf->languages()->attach([5,4,2]);




        //MM
        \App\Models\Article::factory(10)->create([

            'user_id' => 2,
            'title' => [
                'en' => 'eng',
                'es' => 'Lotería de Navidad 2020, en directo | 75981, el primer cuarto premio',
                'ru' => 'Коронавирус поставил Прибалтику на колени
',
            ],
            'body' => [
                'en' => "A proper article indicates that its noun is proper, and refers to a unique entity. It may be the name of a person, the name of a place, the name of a planet, etc. The Maori language has the proper article a, which is used for personal nouns; so. In Maori, when the personal nouns have the definite or indefinite article as an important part of it, both articles are present; for example, the phrase which contains both the proper article a and the definite article Te refers to the person name Te Rauparaha",
                'es' => "Una mujer mayor llamada Ludivina Menéndez compró ocho décimos del número 86986 en el puente del Pilar en Gijón. Eligió esa terminación porque acababa de enterrar a su marido, recientemente fallecido a esa edad, y repartió los boletos entre sus familiares. Pedro Martínez, administrador de este receptor mixto de lotería, confirma que la anciana “es del barrio de toda la vida” y compra habitualmente en Navidad. Este puesto repartió parte del Gordo hace dos años y este pasado febrero dio un primer premio de los sorteos de los jueves. El local se llama “De Pedro’s”, explica su responsable, porque su padre y abuelo se llamaban así. Informa Juan Navarro",
                'ru' => "Если эти методы борьбы с коронавирусом покажут низкую эффективность, а число инфицированных продолжит расти, власти могут пойти на еще более крайние меры. По словам министра иностранных дел Габриэлюса Ландсбергиса, литовский парламент имеет право объявить чрезвычайное положение, если люди не будут соблюдать введенные ограничения. 17 декабря на заседании Сейма, посвященном вопросу коронавируса, спикер парламента Виктория Чмилите-Нильсен высказалась о возможности введения ЧП, если того потребует ситуация. «Если будет принято решение, а точнее, если возникнет необходимость, если число [инфицированных] не снизится и общественность не осознает всю серьезность ситуации, Сейм может ввести новые ограничения», – заявил Ландсбергис.",
            ],
            'img' => 'https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80'
        ]);
        $mm = \App\Models\User::find(3);
        $mm->languages()->attach([3,2,1]);

        \App\Models\Article::factory(10000)->create();
    }
}
