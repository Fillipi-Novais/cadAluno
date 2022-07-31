<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Colégio Etapa - Matricula</title>
    <link rel="shortcut icon" href="https://www.colegioetapa.com.br/portal/favicon.ico">

    <style>       
        body {        
            margin-top: 0;
            text-align: center;
            font-family: Arial;
            font-size: 16px;
            background: rgb(174, 212, 255);
        }
        form {
            max-width:100%;
            margin-left: 200px;
            margin-top: 10px;
        }
       
    </style>
  </head>

  <body>
    <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        Link with href
    </a>
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
    Button with data-bs-target
    </button>
      
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
            </div>
            <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>
      <!--  
        <main class="main">
            <aside class="sidebar">
              <nav class="nav">
                <ul class="nav flex-column">
                  <li class="nav-item"><a href="#">Welcome</a></li>
                  <li class="nav-item"><a href="#">Who We Are</a></li>
                  <li class="nav-item"><a href="#">What We Do</a></li>
                  <li class="nav-item"><a href="#">Get In Touch</a></li>
                </ul>
              </nav>
            </aside>
        </main>
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
        -->
    
    <form method="POST" action="/matricula">
        @csrf          
        <div class="container">
            <div class="row">

                <div class="col-3">
                    <label>Filial</label>
                    <select name="filial" class="form-control" id="filial"> <!--Falta validação  -->
                        <option value="">Selecione uma filial</option>
                        <option value="1">Valinhos</option>
                        <option value="2">Vila Mariana</option>
                        <option value="3">Vila Mascote</option>            
                    </select>
                </div>

                <div class="col-3">
                    <label>Curso</label>
                    <select name="curso" class="form-control" id="curso"> <!--Falta validação  -->
                        <option value="">Selecione um curso</option>
                        <option value="1">Infantil</option>
                        <option value="2">Fundamental I</option>
                        <option value="3">Fundamental II</option>
                        <option value="4">Médio</option>            
                    </select>
                </div>

                <div class="col-3">
                    <label>Habilitação</label>
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
                    <label>Período</label>
                    <select name="periodo" class="form-control" id="periodo" > <!--Falta validação  -->
                        <option value="">Selecione um período</option>
                        <!--dados vindos dinamicamente do back -->        
                    </select>
                </div>

                <div class="col-3">
                    <label name="respFinanceiro">Responsável Financeiro</label>
                    <input type="text" name="respFinanceiro" class="form-control" id="respFinanceiro" >
                </div>

                <div class="col-3">
                    <label>RA</label>
                    <input type="text" name="ra" class="form-control" id="raMatricula" >
                </div>

                <div class="col-3">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control cpf-mask" id="inputNome" >
                </div>

                <div class="col-3">
                    <label>Sexo</label>
                    <input type="text" name="sexo" class="form-control" id="inputSexo" >
                </div>

                <div class="col-3">
                    <label>Data de Nascimento</label>
                    <input type="date" name="dataNascimento"class="form-control" id="inputDataNascimento" >
                </div>

                <div class="col-3">
                    <label>E-mail</label>
                    <input type="email" name="email" class="form-control" id="inputEmail" >
                </div>

                <div class="col-3">
                    <label>Telefone</label>
                    <input type="text" name="telefone"class="form-control" id="inputTelefone" >
                </div>

                <div class="col-3">
                    <label>Nome da Mãe</label>
                    <input type="text" name="nomeMae"class="form-control" id="nomeMae" >
                </div>

                <div class="col-3">
                    <label>Tipo bolsa de estudos</label>
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
                    <label>Plano de Pgto</label>
                    <select name="planoPgto" class="form-control" id="planoPgto"> <!--Falta validação  -->
                        <option value=""></option>            
                        <option value="mensal">Mensal</option> 
                        <option value="trimestral">Trimestral</option>
                        <option value="semestral">Semestral</option>
                        <option value="anual">Anual</option>-->                    
                    </select>
                </div>

                <div class="col-3">
                    <label>Status da Matrícula</label>
                    <select name="statusMatricula" class="form-control" id="statusMatricula"> <!--Falta validação  -->
                        <option value=""></option>
                        <option value="matriculado">Matriculado</option>
                        <option value="cursando">Cursando</option>                                   
                    </select>  
                </div>

                <div class="col-3">
                    <label name="respAcademico">Responsável Acadêmico</label>
                    <input type="text" name="respAcademico" class="form-control" id="respAcademico" >
                </div>

                <div class="col-3">
                    <label>Nome da Mãe</label>
                    <input type="text" name="nomeMae"class="form-control" id="nomeMae" >
                </div>

                <div class="col-3">
                    <label>CPF da Mãe</label>
                    <input type="text" name="cpfMae"class="form-control" id="cpfMae" >
                </div>

                <div class="col-3">
                    <label>Nome do Pai</label>
                    <input type="text" name="nomePai"class="form-control" id="nomePai" >
                </div>

                <div class="col-3">
                    <label>CPF do Pai</label>
                    <input type="text" name="cpfPai"class="form-control" id="cpfPai" >
                </div>

                <div class="col-3">
                    <label>Rua</label>
                    <input type="text" name="rua"class="form-control" id="inputRua" >
                </div>

                <div class="col-3">
                    <label for="inputAddress2">Número</label>
                    <input type="text" name="numero" class="form-control" id="inputNumero" >
                </div>

                <div class="col-3">
                    <label for="inputCity">Complemento</label>
                    <input type="text" name="complemento" class="form-control" id="inputComplemento">
                </div>

                <div class="col-3">
                    <label for="inputEstado">Cep</label>
                    <input type="text" name="cep" class="form-control" id="inputCep" >
                </div>

                <div class="col-3">
                    <label for="inputCEP">Bairro</label>
                    <input type="text" name="bairro" class="form-control" id="inputBairro" >
                </div>

                <div class="col-3">
                    <label for="inputCEP">Cidade</label>
                    <input type="text" name="cidade" class="form-control" id="inputCidade" >
                </div>

                <div class="col-3">
                    <label for="inputCEP">Estado</label>
                    <input type="text" name="estado" class="form-control" id="inputEstado" >
                </div>

                <div class="col-3">
                    <label for="inputCEP">País</label>
                    <input type="text" name="pais" class="form-control" id="inputPais" >
                </div>

            </div>            
        </div>

        <button type="submit" class="btn btn-outline-primary">Finalizar</button>

    </form>
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
      /*$('#filial').on('change', () => {
        var filial = $('#filial').val()
        var curso = $('#curso').val()

        periodoMatricula(filial,curso);
      })*/
      $('#curso').on('change', () => {
        var filial = $('#filial').val()
        var curso = $('#curso').val()

        periodoMatricula(filial,curso);
      })
    })

    /*
    $(document).ready(() => {
      $('#autoPreenchimento').on('click', () => {
        var consultaCadastro = $('#inputCpfMatricula').val()
        
        $.ajax({ 
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          type: 'get',                             
          url: `http://localhost:8000/consultaCad?consultaCad=${consultaCadastro}`,              
          success: result => {
            console.log(result)
          },
          error: erro => {
            console.log(erro)             
          }
        })
      })
    }) */
  </script>
</html>