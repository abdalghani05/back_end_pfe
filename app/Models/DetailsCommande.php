<?php

namespace App\Models;

use App\Models\Book;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsCommande extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_book',
        'id_commande',
        'quantite',
        'prixUnitaire',
        'Montant',
    ];

    public function Book()
    {
        return $this->belongsTo(Book::class,'id_book');
    }

    public function Commande()
    {
        return $this->belongsTo(Commande::class,'id_commande');
    }
}
