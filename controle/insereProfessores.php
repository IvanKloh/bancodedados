<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>
  		<?php
          include ('../visao/insereProfessores.php');///inclusão do arquivo onde são digitados os valores  

            $okdb = mysqli_connect("localhost", "root", "", "aula");///conexão com o banco de dados
      ///recebe valores atravez do metodo get do arquivo inserirProfessores da pasta visão start
    			  $prof = $_GET["prof"];var_dump($fname);
    			  $disc= $_GET["disc"];
    			  $turma = $_GET["turma"];
     ///recebe valores atravez do metodo get do arquivo inserirProfessores da pasta visão end
    	/// Tratamento - Start 
    //$lnasc = date('Y-m-d',strtotime($lnasc) );
    // Tratamento - End  
    ///executera a QUERY start
               $execQuery = "
                      INSERT INTO professores 
                      		(
                      		 nome_professores, 
                      		 disciplina, 
                      		 turma
                      		 ) VALUES(
                      		      '".$prof."',
                      		      '".$disc."',
                      		      '".$turma."'
                      		      ); ";
           $result = mysqli_query($okdb,$execQuery)or 
           die(false);

              echo true;
    	 ///executera a QUERY end	
    			?>

