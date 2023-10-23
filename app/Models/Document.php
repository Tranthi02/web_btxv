<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    public function danhmuccon()
    {
        return $this->belongsTo(danhmuccon::class);
    }

    public function document_type()
    {
        return $this->belongsTo(DocumentType::class);
    }
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'ngaybanhanh' => 'date',
        'ngayhethan'=> 'date',
        'dinhkem'=> 'array',

    ];
}
