<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Hoidap extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Hoidap::class;
    public static function label()
    {
        return 'Hỏi đáp';
    }

    public static function singularLabel()
    {
        return 'Hỏi đáp';
    }

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'Tencauhoi';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'Tencauhoi',
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
            Text::make('Tên người hỏi', 'Hoten')->rules('required'),
            Text::make('Địa chỉ', 'Diachi')->rules('required'),
            Text::make('Email', 'Email')->rules('required'),
            Text::make('SĐT', 'Sdt')->rules('required'),
            Text::make('Nội dung câu hỏi', 'Noidungcauhoi')->rules('required'),
            Text::make('Người trả lời', 'nguoitraloi')->rules('required'),
            Text::make('Câu trả lời', 'cautralloi')->rules('required'),

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
