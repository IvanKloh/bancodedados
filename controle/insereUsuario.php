<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>
  		<?php
          include ('../visao/insereUsuario.php');///inclusão do arquivo onde são digitados os valores  

            $okdb = mysqli_connect("localhost", "root", "", "aula");///conexão com o banco de dados
      ///recebe valores atravez do metodo get do arquivo inserirUsuario da pasta visão start
    			  $nome_usuario = $_GET["nome_usuario"]; 
            $email_usuario = $_GET["email_usuario"];
            $senha_usuario = $_GET["senha_usuario"];
    			 
     ///recebe valores atravez do metodo get do arquivo inserirUsuario da pasta visão end
    	/// Tratamento - Start 
    //$lnasc = date('Y-m-d',strtotime($lnasc) );
    // Tratamento - End  
    ///executera a QUERY start
               $execQuery = "
                      INSERT INTO usuario
                      		(
                      		 nome_usuario,
                           email_usuario,
                           senha_usuario
                      	
                      		 ) VALUES(
                                '".$nome_usuario."',
                      		      '".$email_usuario."',
                                '".$senha_usuario."'                      		     
                      		      ); ";
           $result = mysqli_query($okdb,$execQuery)or 
           die(false);

              echo true;
    	 ///executera a QUERY end	
    			?>

