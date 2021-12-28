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
    <title>Colégio Etapa - Matricula</title>
    <link rel="shortcut icon" href="https://www.colegioetapa.com.br/portal/favicon.ico">

    <style>       
      body {
        background-color: rgb(218, 233, 240);
        margin-top: 0;
        text-align: center;
      }      
      .img {
        margin-left: 78%;
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
      .configGrid {
        display: grid;
        grid-template-areas:
        
        "sidenav content content"
        "sidenav content content";        
      }      
      .content {
        grid-area: content;
      }
      .sidenav {
        grid-area: sidenav;
      }
      #containerFoto {
        background-color: rgb(177, 225, 253);
        width: 250px;
        height: 300px;
        margin-left: 15px;       
      }
      #configLayout0, #configLayout1, #configLayout2, #configLayout3 {
        display: flex;
      }
      #configLayout0 > div > div > div {
        border: 5px solid rgb(177, 225, 253);        
      }
      #configLayout1 > div > div > div {
        border: 5px solid rgb(177, 225, 253);        
      }
      #configLayout2 > div > div > div {
        border: 5px solid rgb(177, 225, 253);        
      }
      #configLayout3 > div > div > div {
        border: 5px solid rgb(177, 225, 253);        
      }
      #configLayout0 > div > div > div > input {
        padding: 0;        
        text-align: center;
      }
      #configLayout0 > div > div > div > select {
        padding: 0;        
        text-align: center;
      }
      #configLayout1 > div > div > div > input {
        padding: 0;        
        text-align: center;
      }
      #configLayout2 > div > div > div > input {
        padding: 0;        
        text-align: center;
      }
      #configLayout3 > div > div > div > input {
        padding: 0;        
        text-align: center;
      }
      #containerForm {
        padding: 0;        
        margin-right: 0;
        max-width: 1000px;
      }
      #alinhamentoContainer > div > label{
        padding-top: 5px; 
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
    <div class="configGrid">
      <div class="sidenav" id="containerFoto">
        <img src="{{ asset('storage/perfil_3.jpg') }}" width="250" height="300" alt="Perfil Aluno"> 
      </div>
      <div class="content">
        <form method="POST" action="/matricula">
          @csrf
          <div id="configLayout0">
            <div id="containerForm" class="container">
              <div class="row no-gutters justify-content-around" id="alinhamentoContainer">
                <div class="col-3">
                  <label>Filial</label>
                </div>
                <div class="col-3">
                  <label>Curso</label>
                </div>
                <div class="col-3">
                  <label>Habilitação</label>
                </div>
                <div class="col-3">
                  <label>Período</label>
                </div>
                <div class="col-3">
                  <select name="filial" class="form-control" id="filial"> <!--Falta validação  -->
                    <option value="">Selecione uma filial</option>
                    <option value="1">Valinhos</option>
                    <option value="2">Vila Mariana</option>
                    <option value="3">Vila Mascote</option>            
                  </select>
                </div>
                <div class="col-3">
                  <select name="curso" class="form-control" id="curso"> <!--Falta validação  -->
                    <option value="">Selecione um curso</option>
                    <option value="1">Infantil</option>
                    <option value="2">Fundamental I</option>
                    <option value="3">Fundamental II</option>
                    <option value="4">Médio</option>            
                  </select>
                </div>
                <div class="col-3">
                  <select name="habilitacao" class="form-control" id="habilitacao"> <!--Falta validação  -->
                    <option value="">Selecione uma habilitação</option>
                    <option value="infantil1">Infantil I</option>
                    <option value="infantil2">Infantil II</option>
                    <option value="infantil3">Infantil III</option>
                    <option value="infantil4">Infantil IV</option>
                    <option value="fund1_1">Fundamental I - 1º ano</option>
                    <option value="fund1_2">Fundamental I - 2º ano</option>
                    <option value="fund1_3">Fundamental I - 3º ano</option>
                    <option value="fund1_4">Fundamental I - 4º ano</option>
                    <option value="fund1_5">Fundamental I - 5º ano</option>
                    <option value="fund2_6">Fundamental II - 6º ano</option>
                    <option value="fund2_7">Fundamental II - 7º ano</option>
                    <option value="fund2_8">Fundamental II - 8º ano</option>
                    <option value="fund2_9">Fundamental II - 9º ano</option>
                    <option value="medio1">Médio 1º ano</option>
                    <option value="medio2">Médio 2º ano</option>
                    <option value="medio3">Médio 3º ano</option>            
                  </select>
                </div>
                <div class="col-3">
                  <select name="periodo" class="form-control" id="periodo" > <!--Falta validação  -->
                    <option value="">Selecione um período</option>
                    <!--dados vindos dinamicamente do back -->        
                  </select>
                </div>
              </div>  
              <div class="row no-gutters justify-content-around" id="alinhamentoContainer">
                <div class="col-3">
                  <label>Tipo bolsa de estudos</label>
                </div>
                <div class="col-3">
                  <label>Plano de Pgto</label>
                </div>
                <div class="col-3">
                  <label>Status da Matrícula</label>  
                </div>
                <div class="col-3">
                  <label name="respAcademico">Responsável Acadêmico</label>
                </div>
                <div class="col-3">
                  <select name="tipoBolsa" class="form-control" id="tipoBolsa"> <!--Falta validação  -->
                    <option value=""></option>
                    <option value="nao">Não possui bolsa</option> <!--Validação para amarrar com planoPgto -->
                    <option value="bolsaIrmao">Bolsa irmão</option>
                    <option value="bolsaDesafio">Bolsa desafio</option>
                    <option value="bolsaRetorno">Bolsa retorno</option>
                    <option value="bolsaTransferencia">Bolsa transferência</option>
                    <option value="bolsaIndicacao">Bolsa indicação</option>                       
                  </select>  
                </div>
                <div class="col-3">
                  <select name="planoPgto" class="form-control" id="planoPgto"> <!--Falta validação  -->
                    <option value=""></option>            
                    <option value="mensal">Mensal</option> 
                    <option value="trimestral">Trimestral</option>
                    <option value="semestral">Semestral</option>
                    <option value="anual">Anual</option>-->                    
                  </select>
                </div>
                <div class="col-3">
                  <select name="statusMatricula" class="form-control" id="statusMatricula"> <!--Falta validação  -->
                    <option value=""></option>
                    <option value="matriculado">Matriculado</option>
                    <option value="cursando">Cursando</option>                                   
                  </select> 
                </div>
                <div class="col-3">
                  <input type="text" name="respAcademico" class="form-control" id="respAcademico" >
                </div>
              </div>                  
            </div>              
          </div>          
          <div id="configLayout1">
            <div id="containerForm" class="container">
              <div class="row no-gutters justify-content-around" id="alinhamentoContainer">
                <div class="col-3">
                  <label name="respFinanceiro">Responsável Financeiro</label>
                </div>
                <div class="col-3">
                  <label>RA</label>
                </div>
                <div class="col-3">
                  <label>Nome</label>
                </div>
                <div class="col-3">
                  <label>Sexo</label>
                </div>
                <div class="col-3">
                  <input type="text" name="respFinanceiro" class="form-control" id="respFinanceiro" >
                </div>
                <div class="col-3">
                  <input type="text" name="ra" class="form-control" id="raMatricula" >
                </div>
                <div class="col-3">
                  <input type="text" name="nome" class="form-control cpf-mask" id="inputNome" >
                </div>
                <div class="col-3">
                  <input type="text" name="sexo" class="form-control" id="inputSexo" >
                </div>
              </div>
              <div class="row no-gutters justify-content-around" id="alinhamentoContainer">
                <div class="col-3">
                  <label>Data de Nascimento</label>
                </div>
                <div class="col-3">
                  <label>E-mail</label>
                </div>
                <div class="col-3">
                  <label>Telefone</label>
                </div>
                <div class="col-3">
                  <label>Nome da Mãe</label>
                </div>
                <div class="col-3">
                  <input type="date" name="dataNascimento"class="form-control" id="inputDataNascimento" >
                </div>
                <div class="col-3">
                  <input type="email" name="email" class="form-control" id="inputEmail" >
                </div>
                <div class="col-3">
                  <input type="text" name="telefone"class="form-control" id="inputTelefone" >
                </div>
                <div class="col-3">
                  <input type="text" name="nomeMae"class="form-control" id="nomeMae" >
                </div>
              </div>
            </div>
          </div>
          <div id="configLayout2">   
            <div id="containerForm" class="container">
              <div class="row no-gutters justify-content-around" id="alinhamentoContainer">
                <div class="col-3">
                  <label>CPF da Mãe</label>
                </div>
                <div class="col-3">
                  <label>Nome do Pai</label>
                </div>
                <div class="col-3">
                  <label>CPF do Pai</label>
                </div>
                <div class="col-3">
                  <label>Rua</label>
                </div>
                <div class="col-3">
                  <input type="text" name="cpfMae"class="form-control" id="cpfMae" >
                </div>
                <div class="col-3">
                  <input type="text" name="nomePai"class="form-control" id="nomePai" >
                </div>
                <div class="col-3">
                  <input type="text" name="cpfPai"class="form-control" id="cpfPai" >
                </div>
                <div class="col-3">
                  <input type="text" name="rua"class="form-control" id="inputRua" >
                </div>
              </div>
              <div class="row no-gutters justify-content-around" id="alinhamentoContainer">
                <div class="col-3">
                  <label for="inputAddress2">Número</label>
                </div>
                <div class="col-3">
                  <label for="inputCity">Complemento</label>
                </div>
                <div class="col-3">
                  <label for="inputEstado">Cep</label>
                </div>
                <div class="col-3">
                  <label for="inputCEP">Bairro</label>
                </div>
                <div class="col-3">
                  <input type="text" name="numero" class="form-control" id="inputNumero" >
                </div>
                <div class="col-3">
                  <input type="text" name="complemento" class="form-control" id="inputComplemento">
                </div>
                <div class="col-3">
                  <input type="text" name="cep" class="form-control" id="inputCep" >
                </div>
                <div class="col-3">
                  <input type="text" name="bairro" class="form-control" id="inputBairro" >
                </div>
              </div>
            </div>                        
          </div>
          <div id="configLayout3">   
            <div id="containerForm" class="container">
              <div class="row no-gutters justify-content-around" id="alinhamentoContainer">           
                <div class="col-4">
                  <label for="inputCEP">Cidade</label>
                </div>
                <div class="col-4">
                  <label for="inputCEP">Estado</label>
                </div>
                <div class="col-4">
                  <label for="inputCEP">País</label>
                </div>
              </div>  
              <div class="row no-gutters justify-content-around" id="alinhamentoContainer">   
                <div class="col-4">
                  <input type="text" name="cidade" class="form-control" id="inputCidade" >
                </div>
                <div class="col-4">
                  <input type="text" name="estado" class="form-control" id="inputEstado" >
                </div>
                <div class="col-4">
                  <input type="text" name="pais" class="form-control" id="inputPais" >
                </div>
              </div>              
            </div>
          </div>
          <button type="submit" class="btn btn-outline-primary">Finalizar</button>            
        </form>
      </div>  
    </div>
  </body>
  <script>
    function periodoMatricula(filial, curso) {
      $('#periodo').empty()
      $.ajax({  
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'get',
        url: `http://localhost:8000/periodoMatricula?filial=${filial}&curso=${curso}`,        
        success: function (result) {
          if (result == 21) {
            $('#periodo').html(`
              <option value="tarde">Tarde (13h15 às 17h45)</option>                           
                                          
            `)
          } else if (result == 28) {
            $('#periodo').html(`
              <option value="tarde">Tarde (13h15 às 17h45)</option> 
              <option value="integral">Integral (07h40 às 17h45)</option>                         
                                          
            `)
          } else if (result == 11) {
            $('#periodo').html(`
              <option value="manha">Manhã (07h25 às 11h55)</option>
              <option value="tarde">Tarde (13h15 às 17h45)</option> 
              <option value="integral">Integral (07h15 às 17h45)</option>                         
                                          
            `)
          } else if (result == 31) {
            $('#periodo').html(`
              <option value="manha">Manhã (07h15 às 12h00)</option>                                     
                                          
            `)
          } else if (result == 38) {
            $('#periodo').html(`
              <option value="manha">Manhã (07h15 às 12h00)</option> 
              <option value="integral">Integral (07h15 às 17h45)</option>                         
                                          
            `)
          } else {
            console.log("Caiu no else")
          }
        },
        
        error: erro => {
          console.log(erro)
        }
      })
    }

    $(document).ready(() => {
      $('#filial').on('change', () => {
        var filial = $('#filial').val()
        var curso = $('#curso').val()

        periodoMatricula(filial,curso);
      })
      $('#curso').on('change', () => {
        var filial = $('#filial').val()
        var curso = $('#curso').val()

        periodoMatricula(filial,curso);
      })
    })

    $(document).ready(() => {
      $('#autoPreenchimento').on('click', () => {
        var consultaCadastro = $('#inputCpfMatricula').val()
        
        $.ajax({ 
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          type: 'get',                             
          url: `http://localhost:8000/consultaCad?consultaCad=${consultaCadastro}`,ms.               
          success: result => {
            console.log(result)
          },
          error: erro => {
            console.log(erro)             
          }
        })
      })
    })
  </script>
</html>