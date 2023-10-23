<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Danhmuccon extends Model
{
    use HasFactory;
    public function danhmuc()
    {
        return $this->belongsTo(Category::class);
    }
    public function loaibv()
    {
        return $this->belongsTo(Loaibv::class);
    }
}
