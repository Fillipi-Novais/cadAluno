<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Matricula;

use Illuminate\Http\Request;

class MatriculaController extends Controller
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
  public function update(Request $request)
  {
    //dd($request);
    $id = $request->id;
    $ra = $request->ra;
    $filial = $request->filial;
    $curso = $request->curso;
    $habilitacao = $request->habilitacao;
    $periodo = $request->periodo;
    $periodoLetivo = $request->periodoLetivo;
    $tipoBolsa = $request->tipoBolsa;
    $planoPgto = $request->planoPgto;
    $statusMatricula = $request->statusMatricula;
    $respAcademico = $request->respAcademico;
    $respFinanceiro = $request->respFinanceiro;
    $nomeMae = $request->nomeMae;
    $cpfMae = $request->cpfMae;
    $nomePai = $request->nomePai;
    $cpfPai = $request->cpfPai;
    $nome = $request->nome;
    $sexo = $request->sexo;
    $dataNascimento = $request->dataNascimento;
    $email = $request->email;
    $telefone = $request->telefone;
    $rua = $request->rua;
    $complemento = $request->complemento;
    $cep = $request->cep;
    $bairro = $request->bairro;
    $cidade = $request->cidade;
    $estado = $request->estado;
    $pais = $request->pais;

    Matricula::insertGetId([
      'id' => $id,
      'ra' => $ra,
      'filial' => $filial,
      'curso' => $curso,
      'habilitacao' => $habilitacao,
      'periodo' => $periodo,
      'periodoLetivo' => $periodoLetivo,
      'tipoBolsa' => $tipoBolsa,
      'planoPgto' => $planoPgto,
      'statusMatricula' => $statusMatricula,
      'respAcademico' => $respAcademico,
      'respFinanceiro' => $respFinanceiro,
      'nomeMae' => $nomeMae,
      'cpfMae' => $cpfMae,
      'nomePai' => $nomePai,
      'cpfPai' => $cpfPai,
      'nome' => $nome,
      'sexo' => $sexo,
      'dataNascimento' => $dataNascimento,
      'email' => $email,
      'telefone' => $telefone,
      'rua' => $rua,
      'complemento' => $complemento,
      'cep' => $cep,
      'bairro' => $bairro,
      'cidade' => $cidade,
      'estado' => $estado,
      'pais' => $pais
    ]);

    return redirect()->action([MatriculaController::class, 'retornoAlteracaoMatricula'])->with('mensagem', 'Alteração da Matricula realizada com sucesso!');
  }
  public function retornoAlteracaoMatricula()
  {
    return view('/alteracao');
  }
}
