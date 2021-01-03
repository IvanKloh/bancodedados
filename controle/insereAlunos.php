<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>
  		<?php
          include ('../visao/insereAlunos.php');///inclusão do arquivo onde são digitados os valores  

            $okdb = mysqli_connect("localhost", "root", "", "aula");///conexão com o banco de dados
      ///recebe valores atravez do metodo get do arquivo inserirAlunos da pasta visão start
    			  $fname = $_GET["fname"];
    			  $lnasc = $_GET["lnasc"];
    			  $lsexo = $_GET["lsexo"];
     ///recebe valores atravez do metodo get do arquivo inserirAlunos da pasta visão end
    	/// Tratamento - Start 
    //$lnasc = date('Y-m-d',strtotime($lnasc) );
    // Tratamento - End  
    ///executera a QUERY start
               $execQuery = "
                      INSERT INTO aluno 
                      		(
                      		 nome_aluno, 
                      		 aniversario_aluno, 
                      		 sexo_aluno
                      		 ) VALUES(
                      		      '".$fname."',
                      		      '".$lnasc."',
                      		      '".$lsexo."'
                      		      ); ";
           $result = mysqli_query($okdb,$execQuery)or 
           die(false);

              echo true;
    	 ///executera a QUERY end	
    			?>

