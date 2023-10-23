<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;

class Anhtt extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static function label()
    {
        return 'Ảnh liên kết';
    }

    public static function singularLabel()
    {
        return 'Ảnh liên kết';
    } 
    public static $model = \App\Models\Anhtt::class;
    
    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'Tenanh';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'Tenanh',
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
            Text::make('Tên ảnh', 'Tenanh')->rules('required'),
            Image::make('Hình Ảnh', 'Anh' )->rules('required'),
            Text::make('Trạng thái', function () {
                if (!$this->published_at) {
                    return '<span style="color: red">Chưa duyệt</span>';
                } else {
                    return '<span style="color: green">Đã duyệt</span>';
                }
            })->asHtml(),
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
        return [
            new Actions\duyet,
            new Actions\huyduyet,
        ];
        return [];
    }
}
