<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/login.css" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Colégio Etapa - Login</title>
    <link rel="shortcut icon" href="https://www.colegioetapa.com.br/portal/favicon.ico">
    
  </head>
  <body>
    
    <!------ Include the above in your HEAD tag ---------->

    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
        
        <!-- Login Form --> 
        <form method="POST" action="/login">
          @csrf
          <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="login">
          <input type="password" id="password" class="fadeIn third" name="senha" placeholder="password">
          <input type="submit" class="fadeIn fourth" value="Log In">
        </form>
        

        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover" href="#">Esqueceu sua senha?</a>          
        </div>
        
      </div>
    </div>    
  </body>
</html>