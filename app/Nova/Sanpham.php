<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\BelongsTo;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
class Sanpham extends Resource
{
    public static function label()
    {
        return 'Sản phẩm';
    }

    public static function singularLabel()
    {
        return 'Sản phẩm';
    } 
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Sanpham::class;

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
            BelongsTo::make('Danh mục', 'category', 'App\Nova\Category'),
            Image::make('Hình đại diện', 'thumbnail'),
            Text::make('Tiêu đề', 'title')->rules('required'),
            Slug::make('Slug')->from('Title')->rules('required')->hideFromIndex(),
            NovaTinyMCE::make('Nội dung', 'content')->options([
                'use_lfm' => true,
                'lfm_url' => 'laravel-filemanager',
                'height' => '700',
                'image_caption' => true,
                'plugins' => 'link code | table | image',
                'toolbar' => ' undo redo | styleselect | bold italic forecolor backcolor |  alignleft aligncenter alignright alignjustify | image | bullist numlist outdent indent | link | code'

            ])->stacked()->hideFromIndex(), 
            Boolean::make('Sản phẩm nổi bật', 'spnoibat')->default(True),   
            Boolean::make('Sản phẩm chính', 'spchinh')->default(True),   
            Text::make('Giá bán', 'price')->rules('required'),
            Text::make('Mã sản phẩm', 'masp')->rules('required'), 
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
