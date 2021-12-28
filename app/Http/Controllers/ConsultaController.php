<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsultaController extends Controller
{
  function raConsulta(Request $request)
  {
    $backRa = $request->query('coletaRa');
    $consultaRa = DB::table('matriculas')
      ->select(
        'matriculas.id',
        'matriculas.ra',
        'matriculas.filial',
        'matriculas.curso',
        'matriculas.habilitacao',
        'matriculas.periodo',
        'matriculas.periodoLetivo',
        'matriculas.tipoBolsa',
        'matriculas.planoPgto',
        'matriculas.statusMatricula',
        'matriculas.respAcademico',
        'matriculas.respFinanceiro',
        'matriculas.nomeMae',
        'matriculas.cpfMae',
        'matriculas.nomePai',
        'matriculas.cpfPai',
        'matriculas.nome',
        'matriculas.sexo',
        'matriculas.dataNascimento',
        'matriculas.email',
        'matriculas.telefone',
        'matriculas.rua',
        'matriculas.complemento',
        'matriculas.cep',
        'matriculas.bairro',
        'matriculas.cidade',
        'matriculas.estado',
        'matriculas.pais',
      )
      ->where('matriculas.ra', $backRa)
      ->get();
    return response()->json($consultaRa);
  }
}
