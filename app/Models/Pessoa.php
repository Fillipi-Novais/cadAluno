<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;
    protected $fillable = ['cpf', 'nome', 'sexo', 'dataNascimento', 'email', 'telefone', 'rua', 'numero', 'complemento', 'cep', 'bairro', 'cidade', 'estado', 'pais'];
}
