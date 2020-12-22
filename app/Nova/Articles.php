<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use App\Models\User;

use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Spatie\NovaTranslatable\Translatable;

class Articles extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Article::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    public static function indexQuery(NovaRequest $request, $query)
    {
        return $query->where('user_id',auth()->id());
    }

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {

        $id = User::find(auth()->id());
        $l1 = \App\Models\Language::find($id->lang_id_1);
        $l2 = \App\Models\Language::find($id->lang_id_2);
        $l3 = \App\Models\Language::find($id->lang_id_3);



        return [

            ID::make(__('ID'), 'id')->sortable(),

            Text::make('Title')
                ->rules('required', 'min:2')
                ->translatable([
                    $l1->sigla => $l1->name . ' (Main)',
                    $l2->sigla => $l2->name,
                    $l3->sigla => $l3->name
                ]),

            Text::make('Body')
                ->rules('required', 'min:2')
                ->translatable([
                    $l1->sigla => $l1->name. ' (Main)',
                    $l2->sigla => $l2->name,
                    $l3->sigla => $l3->name
                ]),


//            DateTime::make('created_at'),
//            DateTime::make('updated_at'),
            BelongsTo::make('User'),

            Text::make('img'),

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
