<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Commande extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_user',
        'dateCommande',
        'Montant',
        'paymentMethod',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'id_user');
    }
}
