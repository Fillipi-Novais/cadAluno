<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'ra', 'filial', 'curso', 'habilitacao', 'periodo', 'periodoLetivo', 'tipoBolsa', 'planoPgto', 'statusMatricula', 'respAcademico', 'respFinanceiro', 'nomeMae', 'cpfMae', 'nomePai', 'cpfPai', 'nome', 'sexo', 'dataNascimento', 'email', 'telefone', 'rua', 'complemento', 'cep', 'bairro', 'cidade', 'estado', 'pais'];
}
