<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersBasis extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'telephone',
        'cep',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado'
    ];
}
