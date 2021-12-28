<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="jquery.js"></script>
    <script src="dist/jquery.inputmask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Colégio Etapa - Cadastro</title>
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
      .img {
        margin-left: 70%;
        
      }
      hr {
        margin-top: 0;
        margin-bottom: 2%; 
      }
      .configNav > nav > div{
        justify-content: center;
        background-color: rgb(177, 225, 253);
        border-radius: 50%;
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
    </div> 
    <form method="POST" action="/cadastro" class="container bg-transparent">
      @csrf      
      <div class="top">
        <h3>Dados Pessoais</h3>        
      </div>
      <hr/>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label>Nome</label>
          <input type="nome" name="nome" class="form-control" id="inputName" required> 
        </div>
        <div class="form-group col-md-4">
          <label>CPF</label>
          <input type="text" name="cpf" class="form-control cpf-mask" id="inputCpf" required>
        </div>
        <div class="form-group col-md-4">
          <label>Sexo</label>
          <input type="text" name="sexo" class="form-control" id="inputSexo" required>          
        </div>
        <div class="form-group col-md-4">
          <label>Data de Nascimento</label>
          <input type="date" name="dataNascimento"class="form-control" id="inputDataNascimento" required>          
        </div>
        <div class="form-group col-md-4">
          <label>E-mail</label>
          <input type="email" name="email" class="form-control" id="inputEmail" required>          
        </div> 
        <div class="form-group col-md-4">
          <label>Telefone</label>
          <input type="text" name="telefone"class="form-control" id="inputTelefone" required>          
        </div>  
      </div>
      <br>
      <h3>Endereço</h3>
      <hr/>
      <div class="form-row">       
        <div class="form-group col-md-4">
          <label for="inputAddress">Rua</label>
          <input type="text" name="rua"class="form-control" id="inputRua" required>
        </div>
        <div class="form-group col-md-4">
          <label for="inputAddress2">Número</label>
          <input type="text" name="numero" class="form-control" id="inputNumero" required>
        </div>   
        <div class="form-group col-md-4">
          <label for="inputCity">Complemento</label>
          <input type="text" name="complemento" class="form-control" id="inputComplemento">
        </div>
        <div class="form-group col-md-4">
          <label for="inputEstado">Cep</label> 
          <input type="text" name="cep" class="form-control" id="inputCep" required>
        </div>
        <div class="form-group col-md-4">
          <label for="inputCEP">Bairro</label>
          <input type="text" name="bairro" class="form-control" id="inputBairro" required>
        </div>
        <div class="form-group col-md-4">
          <label for="inputCEP">Cidade</label>
          <input type="text" name="cidade" class="form-control" id="inputCidade" required>
        </div>
        <div class="form-group col-md-4">
          <label for="inputCEP">Estado</label>
          <input type="text" name="estado" class="form-control" id="inputEstado" required>
        </div>
        <div class="form-group col-md-4">
          <label for="inputCEP">País</label>
          <input type="text" name="pais" class="form-control" id="inputPais" required>
        </div>
      </div>
      <button type="submit" class="btn btn-outline-primary">Entrar</button>
    </form>
  </body>
  <script>
    $(document).ready(function(){
      $('#inputTelefone').inputmask('(99) 99999-9999');
    });
  </script>  
</html>