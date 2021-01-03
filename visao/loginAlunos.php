<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>
<?php
  $server = $_SERVER['HTTP_HOST'];

  if (@$_GET['erro'] == 'fail'){
     echo" <script> alert('Usuário Não Cadastrado')</script>";///caso o usuario ou a senha esteja incorreta ira aparecer o alert
  }elseif (@$_GET['error'] == 's') {
    echo "<script> alert('Você Deve Logar')</script>";///caso tente logar sem inserir os dados ou copiando a url da pagina e colando no browser ira aparecer o alert 
  }
?>

<html lang= "pt-br">
  <head>
    <meta charset= "utf-8">
      <title>Login de acesso ao Banco</title>
       <link rel="stylesheet" href="<?php echo "http://".$server."/aulasenac/bancodedados/css/login.css"?>"> <! -- acessa o arquivo de css para a parte estetica da pagina-->
   
  </head>
  <body>
    <div class="container"> 
      <div id="login" >
        <form method="post" action="<?php echo "http://".$server."/aulasenac/bancodedados/controle/"?>loginAlunos.php"> <! -- passa os dados desta pagina para fazer a validaçao no loginAlunos na pasta controle-->
   
          <h1><center>LOGIN DO BANCO</center></h1>
      
            <label for="email"> USUÁRIO </label>
            <input type= "text" name= "email"id= "email"><br><br>
     
            <label for="senha"> SENHA </label>
            <input type= "password" name= "senha"name= "senha"> <br><br>
        
            <center><input type= "submit" value= "Enviar">&nbsp;&nbsp;
         
            <input type= "reset" value= "Limpar"></center>
          </form>
        </div>
      </div>
  </body>
</html>