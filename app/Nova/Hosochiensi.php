<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\BelongsTo;



class Hosochiensi extends Resource
{
    public static function label()
    {
        return 'Hồ sơ chiến sĩ';
    }

    public static function singularLabel()
    {
        return 'Hồ sơ chiến sĩ';
    }

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Hosochiensi::class;

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
            Text::make('Họ tên', 'name' )->rules('required'),
            Text::make('Năm sinh', 'namsinh' )->rules('required'),
            Text::make('Giới tính', 'gioitinh' )->rules('required'),
            Text::make('Bí danh', 'bidanh' )->rules('required'),           
            Text::make('Quê quán', 'quequan' )->rules('required'),
            Text::make('Họ tên cha', 'hotencha' )->rules('required'),
            Text::make('Họ tên mẹ', 'hotenme' )->rules('required'),
            Text::make('Thông tin hoạt động', 'thongtinhoatdong' )->rules('required'),
            BelongsTo::make('Thời kì hoạt động', 'thoikihoatdong', 'App\Nova\Thoikihoatdong'),
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
