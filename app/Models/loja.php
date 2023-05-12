<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Loja extends Model
{
    use HasFactory;
    protected $table = 'loja';
    public $timestamps = false;

    public function produto(): HasMany
    {
        return $this->hasMany(Produto::class,'id_loja');
    }
}
