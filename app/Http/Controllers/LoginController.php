<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\Pessoa;
use App\Models\Matricula;
use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
  public function autenticarLogin(Request $request)
  {
    //validação consultando a tabela users no banco de dados
    $email = $request->get('usuario');
    $password = $request->get('senha');

    $user = new User();

    $usuario = $user->where('email', $email)
      ->where('password', $password)
      ->get()
      ->first();

    //$capturaUsuario = $user->where('nome', $name)->get();
    // esta fazendo a comparação do que esta sendo inserido com o que esta registrado lá no banco.

    if (isset($usuario->name)) {
      session_start();
      $_SESSION['nome'] = $usuario->name;
      echo "Usuário logado:" . $usuario->name;
      return view('/menu');
    } else {
      return view('/login');
    }
  }


  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('/login');
  }
  public function retornoCadastro()
  {
    return view('/cadastro');
  }
  public function retornoMatricula()
  {
    return view('/matricula');
  }
  public function escolhaPeriodo(Request $request)
  {
    //recebendo o valor de cpf_consulta vindo do front-end, usando query params.
    $ronaldo = $request->query('filial');
    $ronaldinho = $request->query('curso');
    $item = [''];

    switch ($ronaldo) {
      case 1:
        $item = 11;
        break;
      case 2:
        if ($ronaldinho == 1) {
          $item = 21;
        } else {
          $item = 28;
        }
        break;
      case 3:
        if ($ronaldinho == 1) {
          $item = 31; //mascote e infantil= só manhã.
        } else {
          $item = 38; //mascote e demais= manhã e integral.
        }
        break;
      default:
    }
    return $item;
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Request $request)
  {
    $nome = $request->nome;
    $cpf = $request->cpf;
    $sexo = $request->sexo;
    $dataNascimento = $request->dataNascimento;
    $email = $request->email;
    $telefone = $request->telefone;
    $rua = $request->rua;
    $numero = $request->numero;
    $complemento = $request->complemento;
    $cep = $request->cep;
    $bairro = $request->bairro;
    $cidade = $request->cidade;
    $estado = $request->estado;
    $pais = $request->pais;

    //Chamando a tabela inscricaos através do model Inscricao com método estático create.
    Pessoa::insertGetId([
      'nome' => $nome, //tabela inscricaos, coluna nome_completo
      'cpf' => $cpf, // tabela inscricaos, coluna cpf, não pode conter . nem -, só 9 digitos também 
      'sexo' => $sexo,
      'dataNascimento' => $dataNascimento,
      'email' => $email,
      'telefone' => $telefone, // sem hífen e sem espaço
      'rua' => $rua,
      'numero' => $numero,
      'complemento' => $complemento,
      'cep' => $cep, //na view, não pode ter o hífen no input, se não da erro SQLSTATE[01000]: Warning: 1265 Data truncated
      'bairro' => $bairro,
      'cidade' => $cidade,
      'estado' => $estado,
      'pais' => $pais
    ]);
    return redirect()->action([LoginController::class, 'retornoCadastro'])->with('mensagem', 'Cadastrado realizado com sucesso!');
  }

  public function createMatricula(Request $request)
  {
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
    $respMatricula = $request->respMatricula;
    $cpf = $request->cpf;
    $nome = $request->nome;
    $sexo = $request->sexo;
    $dataNascimento = $request->dataNascimento;
    $email = $request->email;
    $telefone = $request->telefone;
    $nomeMae = $request->nomeMae;
    $cpfMae = $request->cpfMae;
    $nomePai = $request->nomePai;
    $cpfPai = $request->cpfPai;
    $rua = $request->rua;
    $numero = $request->numero;
    $complemento = $request->complemento;
    $cep = $request->cep;
    $bairro = $request->bairro;
    $cidade = $request->cidade;
    $estado = $request->estado;
    $pais = $request->pais;

    //Chamando a tabela Matriculas através do model Matricula com método estático create.
    Matricula::insertGetId([
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
      'respMatricula' => $respMatricula,
      'cpf' => $cpf, // coluna cpf, não pode conter . nem -, só 9 digitos também
      'nome' => $nome,
      'sexo' => $sexo,
      'dataNascimento' => $dataNascimento,
      'email' => $email,
      'telefone' => $telefone, // sem hífen e sem espaço
      'nomeMae' => $nomeMae,
      'cpfMae' => $cpfMae,
      'nomePai' => $nomePai,
      'cpfPai' => $cpfPai,
      'rua' => $rua,
      'numero' => $numero,
      'complemento' => $complemento,
      'cep' => $cep, //na view, não pode ter o hífen no input, se não da erro SQLSTATE[01000]: Warning: 1265 Data truncated
      'bairro' => $bairro,
      'cidade' => $cidade,
      'estado' => $estado,
      'pais' => $pais
    ]);
    return redirect()->action([LoginController::class, 'retornoMatricula'])->with('mensagem', 'Matricula realizada com sucesso!');
  }

  public function preenchimentoDadosMatricula()
  {
  }











  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Login  $login
   * @return \Illuminate\Http\Response
   */
  public function show(Login $login)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Login  $login
   * @return \Illuminate\Http\Response
   */
  public function edit(Login $login)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Login  $login
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Login  $login
   * @return \Illuminate\Http\Response
   */
  public function destroy(Login $login)
  {
    //
  }
}
