<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GioithieuIndex extends Model
{
    use HasFactory;

    public function imageUrl()
    {
        return '/storage/'.$this->image;
    }
}
