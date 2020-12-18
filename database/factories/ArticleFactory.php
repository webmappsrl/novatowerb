<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'title' => [
                'en' => $this->faker->sentence,
                'fr' => $this->faker->sentence,
                'it' => $this->faker->sentence,
            ],
            'body' => [
                'en' => "A proper article indicates that its noun is proper, and refers to a unique entity. It may be the name of a person, the name of a place, the name of a planet, etc. The Maori language has the proper article a, which is used for personal nouns; so. In Maori, when the personal nouns have the definite or indefinite article as an important part of it, both articles are present; for example, the phrase which contains both the proper article a and the definite article Te refers to the person name Te Rauparaha",
                'fr' => "Le français est une langue indo-européenne de la famille des langues romanes. Le français s'est formé en France (variété de la « langue d'oïl », qui était la langue de la partie septentrionale du pays). Le français est déclaré langue officielle en France en 15395. Il est parlé, en 2018, sur tous les continents par environ 300 millions de personnes1,6,2 : 235 millions l'emploient quotidiennement, et 90 millions3 en sont des locuteurs natifs. En 2018, 80 millions d'élèves et étudiants s'instruisent e",
                'it' => "Io mi rimetto a loro, decidano loro dice Eugenio Giani annunciando che il report sui dati del contagio in Toscana è stato inviato all'Iss affinché possa nuovamente essere valutata la classificazione della Toscana arancio e anticipato il passaggio alla fascia di restrizioni gialla. Inutile - dice il presidente della Regione - fare azioni che poi compromettono la trasparenza e la correttezza del dialogo. I dati secondo Giani legittimano la richiesta di zona gialla.Spero che si trovino le condizioni",
            ],
            'img' => 'https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80'
        ];
    }

    public function suspended()
    {
        return [
            'user_id' => 2,
            'title' => [
                'en' => $this->faker->sentence,
                'fr' => $this->faker->sentence,
                'it' => $this->faker->sentence,
            ],
            'body' => [
                'en' => "A proper article indicates that its noun is proper, and refers to a unique entity. It may be the name of a person, the name of a place, the name of a planet, etc. The Maori language has the proper article a, which is used for personal nouns; so. In Maori, when the personal nouns have the definite or indefinite article as an important part of it, both articles are present; for example, the phrase which contains both the proper article a and the definite article Te refers to the person name Te Rauparaha",
                'fr' => "Le français est une langue indo-européenne de la famille des langues romanes. Le français s'est formé en France (variété de la « langue d'oïl », qui était la langue de la partie septentrionale du pays). Le français est déclaré langue officielle en France en 15395. Il est parlé, en 2018, sur tous les continents par environ 300 millions de personnes1,6,2 : 235 millions l'emploient quotidiennement, et 90 millions3 en sont des locuteurs natifs. En 2018, 80 millions d'élèves et étudiants s'instruisent e",
                'it' => "Io mi rimetto a loro, decidano loro dice Eugenio Giani annunciando che il report sui dati del contagio in Toscana è stato inviato all'Iss affinché possa nuovamente essere valutata la classificazione della Toscana arancio e anticipato il passaggio alla fascia di restrizioni gialla. Inutile - dice il presidente della Regione - fare azioni che poi compromettono la trasparenza e la correttezza del dialogo. I dati secondo Giani legittimano la richiesta di zona gialla.Spero che si trovino le condizioni",
            ],
            'img' => 'https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80'
        ];
    }

    public function sab()
    {
        return [
            'user_id' => 3,
            'title' => [
                'en' => $this->faker->sentence,
                'fr' => $this->faker->sentence,
                'it' => $this->faker->sentence,
            ],
            'body' => [
                'en' => "A proper article indicates that its noun is proper, and refers to a unique entity. It may be the name of a person, the name of a place, the name of a planet, etc. The Maori language has the proper article a, which is used for personal nouns; so. In Maori, when the personal nouns have the definite or indefinite article as an important part of it, both articles are present; for example, the phrase which contains both the proper article a and the definite article Te refers to the person name Te Rauparaha",
                'fr' => "Le français est une langue indo-européenne de la famille des langues romanes. Le français s'est formé en France (variété de la « langue d'oïl », qui était la langue de la partie septentrionale du pays). Le français est déclaré langue officielle en France en 15395. Il est parlé, en 2018, sur tous les continents par environ 300 millions de personnes1,6,2 : 235 millions l'emploient quotidiennement, et 90 millions3 en sont des locuteurs natifs. En 2018, 80 millions d'élèves et étudiants s'instruisent e",
                'it' => "Io mi rimetto a loro, decidano loro dice Eugenio Giani annunciando che il report sui dati del contagio in Toscana è stato inviato all'Iss affinché possa nuovamente essere valutata la classificazione della Toscana arancio e anticipato il passaggio alla fascia di restrizioni gialla. Inutile - dice il presidente della Regione - fare azioni che poi compromettono la trasparenza e la correttezza del dialogo. I dati secondo Giani legittimano la richiesta di zona gialla.Spero che si trovino le condizioni",
            ],
            'img' => 'https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80'
        ];
    }
}
