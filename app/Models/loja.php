<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    use HasFactory;
    protected $table = 'loja';
    public $timestamps = false;

    public function livros(): HasMany
    {
        return $this->hasMany(Livro::class);
    }
}
