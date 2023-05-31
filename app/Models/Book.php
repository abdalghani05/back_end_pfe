<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'publication_date',
        'price',
        'id_author',
        'id_categorie',
        'status',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class,'id_author');
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'id_categorie');
    }
}
