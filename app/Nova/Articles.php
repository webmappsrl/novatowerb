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
        return $query->where('user_id', $request->user()->id);
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

        $id = User::find($request->user()->id);
        $fk_lang_id = $id->languages()->pluck( 'language_id')->toArray();
        $data=[];
        for ($i = 0; $i < count($fk_lang_id);$i++)
        {
            $dataLang = \App\Models\Language::find($fk_lang_id[$i]);
            if ($dataLang->main) $data += [$dataLang->sigla => $dataLang->name. ' (Main)'];
            else $data += [$dataLang->sigla => $dataLang->name];
        }



        return [

            ID::make(__('ID'), 'id')->sortable(),

            Text::make('Title')
                ->rules('required', 'min:2')
                ->translatable($data),

            Text::make('Body')
                ->rules('required', 'min:2')
                ->translatable($data),


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
