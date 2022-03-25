<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome, genero, cpf, dataNasc, email, telefone'];
}
