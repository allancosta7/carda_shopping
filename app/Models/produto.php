<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'produto';
    public $timestamps = false;

    public function loja(): BelongsTo
    {
        return $this->belongsTo(Loja::class, 'id_loja');
    }
}
