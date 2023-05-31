<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Book;

class Panier extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_user',
        'id_book',
        'quantite',
        'prixUnitaire',
        'Montant',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'id_user');
    }

    public function Book()
    {
        return $this->belongsTo(Book::class,'id_book');
    }
}
