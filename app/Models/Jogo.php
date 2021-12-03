<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    protected $fillable = [
        'nome', 
        'categoria',
        'valor',
        'ano',
    ];
    use HasFactory;
}
