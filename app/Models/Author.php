<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    use HasFactory;

    protected $fillable=[
        'nom',
        'prenom',
        'description',
        'status'
    ];

    protected static function newFactory()
    {
        return \Database\Factories\AuthorFactory::new();
    }

    public function books():HasMany
    {
        return $this->hasMany(Book::class);
    }
}
