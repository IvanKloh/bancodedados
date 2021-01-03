<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>
  		<?php
          include ('../visao/insereTurma.php');///inclusão do arquivo onde são digitados os valores  

            $okdb = mysqli_connect("localhost", "root", "", "aula");///conexão com o banco de dados
      ///recebe valores atravez do metodo get do arquivo inserirTurma da pasta visão start
    			  $turma = $_GET["turma"]; 
            $id_professor = $_GET["id_professor"];
            $id_aluno = $_GET["id_aluno"];
    			  $id_disciplina= $_GET["id_disciplina"];
    			  $turno = $_GET["turno"];
     ///recebe valores atravez do metodo get do arquivo inserirTurma da pasta visão end
    	/// Tratamento - Start 
    //$lnasc = date('Y-m-d',strtotime($lnasc) );
    // Tratamento - End  
    ///executera a QUERY start
               $execQuery = "
                      INSERT INTO turma
                      		(
                      		 turma,
                           id_professor,
                           id_aluno,
                      		 id_disciplina, 
                      		 turno
                      		 ) VALUES(
                                '".$turma."',
                      		      '".$id_professor."',
                                '".$id_aluno."',
                      		      '".$id_disciplina."',
                      		      '".$turno."'
                      		      ); ";
           $result = mysqli_query($okdb,$execQuery)or 
           die(false);

              echo true;
    	 ///executera a QUERY end	
    			?>

