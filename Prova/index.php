<html>
 <head>
    <title>Cadastro</title>
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/signin.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
   
    
 </head>
 <body>
 
 <div class="container">
 
    <div class="form-signin">
      <img src="img/logo.png" alt="some text" width=120 height=40>
      
      <br>

      <form method="POST" action="login.php">
          <label><b>NOME</b></label>
          <input type="text" name="nome" placeholder="Digite o seu nome"
          class="form-control">
          <br>

          <label><b>SEXO</b></label>
          <br>
          
          <input type="radio" name="sexo" value="masculino" >  Masculino
          <br>
          <input type="radio" name="sexo" value="feminino">  Feminino
          <br><br>


          <label><b>PERFIL</b></label>
          <br>
          <input type="radio" name="perfil" value="administrador" >  Administrador
          <br>
          <input type="radio" name="perfil" value="contábil">  Contábil
          <br>
          <input type="radio" name="perfil" value="financeiro" >  Financeiro
          <br><br>
          
          <label><b>DATA DE NASCIMENTO</b></label>
          <input type="date" name="dataNasc" placeholder="Digite a sua data de nascimento" class="form-control">
          <br>
          

          <label><b>SENHA</b></label>
          <input type="password" name="senha" class="form-control">
          <br>

        
          <input type="submit" value="CRIAR LOGIN" class="button">

      
   

      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


 </body>
</html>