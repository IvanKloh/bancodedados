<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>
  		<?php
          include ('../visao/insereDisciplina.php');///inclusão do arquivo onde são digitados os valores  

            $okdb = mysqli_connect("localhost", "root", "", "aula");///conexão com o banco de dados
      ///recebe valores atravez do metodo get do arquivo inserirDisciplina da pasta visão start
    			  $disc = $_GET["disc"];
    			  
     ///recebe valores atravez do metodo get do arquivo insereDisciplina da pasta visão end
    	/// Tratamento - Start 
    //$lnasc = date('Y-m-d',strtotime($lnasc) );
    // Tratamento - End  
    ///executera a QUERY start
               $execQuery = "
                      INSERT INTO disciplina 
                      		(
                      		 nome_disciplina 
                      		 
                      		 ) VALUES(
                      		      '".$disc."'
                      		     
                      		      ); ";
           $result = mysqli_query($okdb,$execQuery)or 
           die(false);

              echo true;
    	 ///executera a QUERY end	
    			?>

