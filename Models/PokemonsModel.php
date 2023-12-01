<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokemonsModel extends Model
{

    protected $table = 'pokemons';
    protected $fillable = ['nombre', 'tipo', 'tamaño', 'peso'];
}
