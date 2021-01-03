<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>
<?php 
  session_start();
    include('../modelo/conexao.php');///faz o include do arquivo de conexao com o banco

      $email = $_POST["email"];///recebe os valore digitados no loginAlunos da pasta visao
      $senha = $_POST["senha"]; ///recebe os valore digitados no loginAlunos da pasta visao

   
       $sql = "SELECT COUNT(*)
               AS
               quantidade
               FROM usuario
               WHERE 
               email_usuario=
               '".$email."' 
               and senha_usuario=
               '".$senha."'";
       
        //    echo $email.'<->'.$senha;
      //exit();
      $result = mysqli_query($okdb,$sql);
           
           $rows = $result->fetch_assoc();
           $quantidade = $rows['quantidade'];


       if($quantidade == 1){
          $_SESSION['login_ok']=true;//pode acessar
          $_SESSION['controleLogin'] = true;//esta logado
          		header('location:../index.php ');
        }
        else{
          $_SESSION['login_ok']=false;//nao pode acessar
          unset($_SESSION['controleLogin']);//
            header('location:../visao/loginAlunos.php?erro=fail');
        }

 ?>

 

               