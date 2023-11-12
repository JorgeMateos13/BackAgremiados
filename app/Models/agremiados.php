<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agremiados extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_agremiado',
        'a_paterno',
        'a_materno',
        'nombre',
        'sexo',
        'nup',
        'nue',
        'rfc',
        'nss',
        'f_nacimiento',
        'teledfono',
        'cuota'
    ];
}
