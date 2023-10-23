<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class)->select('id', 'title', 'slug', 'excerpt', 'thumbnail');
    }
    public function loaibv()
    {
        return $this->belongsTo(Loaibv::class);
    }
    public function loaidanhmuc()
    {
        return $this->belongsTo(Loaidanhmuc::class);
    }
    public function chils()
    {
        return $this->hasMany(Category::class,'parent_id', 'id');
    }
}
