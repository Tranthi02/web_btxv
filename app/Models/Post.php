<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The roles that belong to the user.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function loaidanhmuc()
    {
        return $this->belongsTo(Loaidanhmuc::class);
    }

    /**
     * The roles that belong to the user.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function tenVietHoa()
    {
        return strtoupper($this->title);
    }
    public function danhmuccon()
    {
        return $this->belongsTo(danhmuccon::class);
    }
    protected $fillable = [
        'title',
        'slug',
        'content',
        'excerpt',
        'thumbnail',
        'category_id'
    ];
}
