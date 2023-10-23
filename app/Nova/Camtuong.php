<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
class Camtuong extends Resource
{
    public static function label()
    {
        return 'Cảm tưởng';
    }

    public static function singularLabel()
    {
        return 'Cảm tưởng';
    }
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Camtuong::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

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
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Text::make('Tên tác giả', 'name' )->rules('required'),
            Text::make('Chức vụ', 'chucvu' )->rules('required'),
            NovaTinyMCE::make('Nội dung', 'content')->options([
                'use_lfm' => true,
                'lfm_url' => 'laravel-filemanager',
                'height' => '700',
                'image_caption' => true,
                'plugins' => 'link code | table | image',
                'toolbar' => ' undo redo | styleselect | bold italic forecolor backcolor |  alignleft aligncenter alignright alignjustify | image | bullist numlist outdent indent | link | code'

            ])->stacked()->hideFromIndex(),                        
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
