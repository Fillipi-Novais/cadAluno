<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Colégio Etapa - Alterações</title>
    <link rel="shortcut icon" href="https://www.colegioetapa.com.br/portal/favicon.ico">

    <style>      
      body {
        background: rgb(218, 233, 240);
        margin-top: 0;
        text-align: center;
      }
      .top {      
      display: flex;
      align-items:flex-end; 
      margin-top: 1%;     
      }
      hr {
        margin-top: 0;
        margin-bottom: 2%; 
      }
      th {
        color: rgb(22, 68, 128);
      }
      #raRetorno, #raRetorno1, #raRetorno2, #raRetorno3 {
        display: flex;        
      }      
      #containerForm {
        padding: 0;        
        margin-right: 0;
        max-width: 1000px;
      }
      #containerFoto {
        background-color: rgb(177, 225, 253);
        width: 250px;
        height: 300px;
        margin-left: 15px;       
      }
      #configInput {        
        border-radius: 0%;
        text-align: center;
        padding: 0%;        
      }      
      .configGrid {
        display: grid;
        grid-template-areas:
        
        "sidenav content content"
        "sidenav content content";        
      }
      .logo {
        grid-area: logo;
      }
      .nav {
        grid-area: nav;
      }
      .content {
        grid-area: content; 
      }
      .sidenav {
        grid-area: sidenav;
      }
      .configRaInput {               
        margin: 1% 1%;                 
      }     
      .configNav > nav > div{
        justify-content: center;
        background-color: rgb(177, 225, 253);
        border-radius: 50%;
      }
      .configInputGroup {        
        width: 350px;
        margin: .5% .5%;
      }
      #raRetorno > div > div > div > input{
        padding: 0;        
        text-align: center;
      }
      #raRetorno1 > div > div > div > input{
        padding: 0;        
        text-align: center;
      }
      #raRetorno2 > div > div > div > input{
        padding: 0;        
        text-align: center;
      }
      #raRetorno3 > div > div > div > input{
        padding: 0;        
        text-align: center;
      }      
      #raRetorno > div > div > div {
        border: 5px solid rgb(177, 225, 253);        
      }
      #raRetorno1 > div > div > div {
        border: 5px solid rgb(177, 225, 253);        
      }
      #raRetorno2 > div > div > div {
        border: 5px solid rgb(177, 225, 253);        
      }
      #raRetorno3 > div > div > div {
        border: 5px solid rgb(177, 225, 253);        
      }
      #alinhamentoContainer > div > label{
        padding-top: 5px; 
      }
      #coletaRa {
        text-align: center;
      }    
    </style>
  </head>
  <body>
    <div class="configNav">   
      <nav class="navbar navbar-expand-md navbar-light">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/arquivo">Arquivo <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/cadastro">Cadastro <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="secretaria">Secretaria <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/matricula">Matrícula <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/consulta">Consulta <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/alteracao">Alteração <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/fiscal">Fiscal <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/financeiro">Financeiro <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/relatorios">Relatórios <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/catraca">Catraca <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>      
      <div class="input-group mx-auto configInputGroup">        
        <div class="input-group-prepend">
          <span class="input-group-text" name="raAluno" >RA do Aluno</span>          
        </div>
        <input type="text" name="coletaRa" id="coletaRa" class="form-control">
        <button id="raConsulta" type="submit" class="btn btn-outline-primary">Consultar</button>                
      </div>
    </div> 
    <div class="configGrid">
      <div class="sidenav" id="containerFoto">
        <img src="{{ asset('storage/perfil.jpg') }}" width="250" height="300" alt="Perfil Aluno"> 
      </div>
      <div class="content">
        <form method="PUT" action="{{route('alter-dados')}}" >
          @csrf     
          <div id="raRetorno" hidden>
            <div id="containerForm" class="container">
              <div class="row no-gutters justify-content-around" id="alinhamentoContainer">
                <div class="col-3" >
                  <label id="configLabel">Id</label>
                </div>
                <div class="col-3" >
                  <label id="configLabel">Ra</label>
                </div>
                <div class="col-3" >
                  <label id="configLabel">Filial</label>
                </div>
                <div class="col-3" >
                  <label id="configLabel">Curso</label>
                </div>
                <div class="col-3" >
                  <input id="id" type="text" class="form-control" name="id" value="">
                </div>
                <div class="col-3" >
                  <input id="ra" type="text" class="form-control" name="ra" value="">
                </div>
                <div class="col-3" >
                  <input id="filial" type="text" class="form-control" name="filial" value="">
                </div>
                <div class="col-3" >
                  <input id="curso" type="text" class="form-control" name="curso" value="">
                </div>
              </div>
              <div class="row no-gutters justify-content-around" id="alinhamentoContainer">  
                <div class="col-3" >
                  <label id="configLabel">Habilitação</label>
                </div>                    
                <div class="col-3" >
                  <label id="configLabel">Período</label>
                </div>
                <div class="col-3" >
                  <label id="configLabel">Período Letivo</label>
                </div>
                <div class="col-3" >
                  <label id="configLabel">Tipo Bolsa</label>
                </div>
                <div class="col-3" >
                  <input id="habilitacao" type="text" class="form-control" name="habilitacao" value="">
                </div>            
                <div class="col-3" >
                  <input id="periodo" type="text" class="form-control" name="periodo" value="">
                </div>
                <div class="col-3" >
                  <input id="periodoLetivo" type="text" class="form-control" name="periodoLetivo" value="">
                </div>
                <div class="col-3" >
                  <input id="tipoBolsa" type="text" class="form-control" name="tipoBolsa" value="">
                </div>
              </div>
            </div>
          </div>                  
          <div id="raRetorno1" hidden>
            <div id="containerForm" class="container">
              <div class="row no-gutters justify-content-around" id="alinhamentoContainer">
                <div class="col-3" >
                  <label id="configLabel">Plano de Pagamento</label>
                </div>
                <div class="col-3" >
                  <label id="configLabel">Status</label>
                </div>
                <div class="col-3" >
                  <label id="configLabel">Responsável Acadêmico</label>
                </div>
                <div class="col-3" >
                  <label id="configLabel">Responsável Financeiro</label>
                </div>
                <div class="col-3" >
                  <input id="planoPgto" type="text" class="form-control" name="planoPgto" value="">
                </div>
                <div class="col-3" >
                  <input id="statusMatricula" type="text" class="form-control" name="statusMatricula" value="">
                </div>
                <div class="col-3" >
                  <input id="respAcademico" type="text" class="form-control" name="respAcademico" value="">
                </div>
                <div class="col-3" >
                  <input id="respFinanceiro" type="text" class="form-control" name="respFinanceiro" value="">
                </div>
              </div>
              <div class="row no-gutters justify-content-around" id="alinhamentoContainer">  
                <div class="col-3" >
                  <label id="configLabel">Nome da Mãe</label>
                </div>
                <div class="col-3" >
                  <label id="configLabel">Cpf da mãe</label>
                </div>
                <div class="col-3" >
                  <label id="configLabel">Nome do pai</label>
                </div>
                <div class="col-3" >
                  <label id="configLabel">Cpf do pai</label>
                </div>
                <div class="col-3" >
                  <input id="nomeMae" type="text" class="form-control" name="nomeMae" value="">
                </div>
                <div class="col-3" >
                  <input id="cpfMae" type="text" class="form-control" name="cpfMae" value="">
                </div>
                <div class="col-3" >
                  <input id="nomePai" type="text" class="form-control" name="nomePai" value="">
                </div>
                <div class="col-3" >
                  <input id="cpfPai" type="text" class="form-control" name="cpfPai" value="">
                </div>
              </div>          
            </div> 
          </div>      
          <div id="raRetorno2" hidden>
            <div id="containerForm" class="container">
              <div class="row no-gutters justify-content-around" id="alinhamentoContainer">
                <div class="col-3" >
                  <label id="configLabel">Nome do aluno</label>
                </div>
                <div class="col-3" >
                  <label id="configLabel">Sexo</label>
                </div>
                <div class="col-3" >
                  <label id="configLabel">Data de Nascimento</label>
                </div>
                <div class="col-3" >
                  <label id="configLabel">E-mail do responsável</label>
                </div>
                <div class="col-3" >
                  <input id="nome" type="text" class="form-control" name="nome" value="">
                </div>
                <div class="col-3" >
                  <input id="sexo" type="text" class="form-control" name="sexo" value="">
                </div>
                <div class="col-3" >
                  <input id="dataNascimento" type="text" class="form-control" name="dataNascimento" value="">
                </div>
                <div class="col-3" >
                  <input id="email" type="text" class="form-control" name="email" value="">
                </div>
              </div>
              <div class="row no-gutters justify-content-center" id="alinhamentoContainer">  
                <div class="col-3" >
                  <label id="configLabel">Telefone</label>
                </div>
                <div class="col-3" >
                  <label id="configLabel">Logradouro</label>
                </div>
                <div class="col-3" >
                  <label id="configLabel">Complemento</label>
                </div>
                <div class="col-3" >
                  <label id="configLabel">Cep</label>
                </div>
                <div class="col-3" >
                  <input id="telefone" type="text" class="form-control" name="telefone" value="">
                </div>
                <div class="col-3" >
                  <input id="rua" type="text" class="form-control" name="rua" value="">
                </div>
                <div class="col-3" >
                  <input id="complemento" type="text" class="form-control" name="complemento" value="">
                </div>
                <div class="col-3" >
                  <input id="cep" type="text" class="form-control" name="cep" value="">
                </div>
              </div>  
            </div>
          </div>
          <div id="raRetorno3" hidden>
            <div id="containerForm" class="container">
              <div class="row no-gutters justify-content-around" id="alinhamentoContainer">            
                <div class="col-3" >
                  <label id="configLabel">Bairro</label>
                </div>
                <div class="col-3" >
                  <label id="configLabel">Cidade</label>
                </div>
                <div class="col-3" >
                  <label id="configLabel">Estado</label>
                </div>
                <div class="col-3" >
                  <label id="configLabel">País</label>
                </div>
                <div class="col-3" >
                  <input id="bairro" type="text" class="form-control" name="bairro" value="">
                </div>
                <div class="col-3" >
                  <input id="cidade" type="text" class="form-control" name="cidade" value="">
                </div>
                <div class="col-3" >
                  <input id="estado" type="text" class="form-control" name="estado" value="">
                </div>
                <div class="col-3" >
                  <input id="pais" type="text" class="form-control" name="pais" value="">
                </div>
              </div>           
            </div>
          </div>      
          <button id="raAlterar" type="submit" class="btn btn-warning">Alterar</button>
        </form>
      </div>
    </div>             
  </body>
  <script> 
    $(document).ready(() => {
      $('#raAlterar').on('click', () => {
        let id = $('#id').val()
        let ra = $('#ra').val()
        let filial = $('#filial').val()
        let curso = $('#curso').val()
        let habilitacao = $('#habilitacao').val()
        let periodo = $('#periodo').val()
        let periodoLetivo = $('#periodoLetivo').val()
        let tipoBolsa = $('#tipoBolsa').val()
        let planoPgto = $('#planoPgto').val()
        let statusMatricula = $('#statusMatricula').val()
        let respAcademico = $('#respAcademico').val()
        let respFinanceiro = $('#respFinanceiro').val()
        let nomeMae = $('#nomeMae').val()
        let cpfMae = $('#cpfMae').val()
        let nomePai = $('#nomePai').val()
        let cpfPai = $('#cpfPai').val()
        let nome = $('#nome').val()
        let sexo = $('#sexo').val()
        let dataNascimento = $('#dataNascimento').val()
        let email = $('#email').val()
        let telefone = $('#telefone').val()
        let rua = $('#rua').val()
        let complemento = $('#complemento').val()
        let cep = $('#cep').val()
        let bairro = $('#bairro').val()
        let cidade = $('#cidade').val()
        let estado = $('#estado').val()
        let pais = $('#pais').val()
        $.ajax({  
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          type: 'put',                             
          url: `/alterDados`,
          data: {
            id: id,
            ra: ra,
            filial: filial,
            curso: curso,
            habilitacao: habilitacao,
            periodo: periodo,
            periodoLetivo: periodoLetivo,
            tipoBolsa: tipoBolsa,
            planoPgto: planoPgto,
            statusMatricula: statusMatricula,
            respAcademico: respAcademico,
            respFinanceiro: respFinanceiro,
            nomeMae: nomeMae,
            cpfMae: cpfMae,
            nomePai: nomePai,
            cpfPai: cpfPai,
            nome: nome,
            sexo: sexo,
            dataNascimento: dataNascimento,
            email: email,
            telefone: telefone,
            rua : rua,
            complemento: complemento,
            cep: cep,
            bairro: bairro,
            cidade: cidade,
            estado: estado,
            pais: pais
          }, 
          success: result => {
            document.write(result)
          },         
          error: erro => {
            console.log(erro)             
          }
        })
      })
      $('#raConsulta').on('click', () => {        
        var coletaRa = $('#coletaRa').val()        
        $.ajax({  
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          type: 'get',                             
          url: `/api/raConsulta?coletaRa=${coletaRa}`,          
          success: function(result){
            result.map(function(item){
              $('#id').val(item.id)
              $('#ra').val(item.ra)
              $('#filial').val(item.filial)
              $('#curso').val(item.curso)
              $('#habilitacao').val(item.habilitacao)
              $('#periodo').val(item.periodo)
              $('#periodoLetivo').val(item.periodoLetivo)
              $('#tipoBolsa').val(item.tipoBolsa)
              $('#planoPgto').val(item.planoPgto)
              $('#statusMatricula').val(item.statusMatricula)
              $('#respAcademico').val(item.respAcademico)
              $('#respFinanceiro').val(item.respFinanceiro)
              $('#nomeMae').val(item.nomeMae)
              $('#cpfMae').val(item.cpfMae)
              $('#nomePai').val(item.nomePai)
              $('#cpfPai').val(item.cpfPai)
              $('#nome').val(item.nome)
              $('#sexo').val(item.sexo)
              $('#dataNascimento').val(item.dataNascimento)
              $('#email').val(item.email)
              $('#telefone').val(item.telefone)
              $('#rua').val(item.rua)
              $('#complemento').val(item.complemento)
              $('#cep').val(item.cep)
              $('#bairro').val(item.bairro)
              $('#cidade').val(item.cidade)
              $('#estado').val(item.estado)
              $('#pais').val(item.pais)
            })
            $('#raRetorno').attr('hidden', false)             
            $('#raRetorno1').attr('hidden', false)
            $('#raRetorno2').attr('hidden', false)
            $('#raRetorno3').attr('hidden', false)
          },
          error: erro => {
            console.log(erro)                        
          }
        })
      })      
    })
  </script>  
</html>