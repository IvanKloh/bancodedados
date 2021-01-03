<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>
<?php
         
            $okdb = mysqli_connect("localhost", "root", "", "aula");///conexão com o banco de dados
   ///recebe valores atravez do metodo get do arquivo alterarTurma da pasta visão start
    			  $turma = $_GET["turma"]; 
            $id_professor = $_GET["id_professor"];
            $id_aluno = $_GET["id_aluno"];
            $id_disciplina= $_GET["id_disciplina"];
            $turno = $_GET["turno"];
    			  $lid   = $_GET["lid"];
   ///recebe valores atravez do metodo get do arquivo alterarTurma da pasta visão  end
    			// Tratamento - Start 
    //$lnasc = date('Y-m-d',strtotime($lnasc) );
    // Tratamento - End  
    ///executera a QUERY start
               $execQuery =             
                      "  UPDATE turma SET
                      		 turma='".$turma."',
                      		 id_professor= '".$id_professor."',
                      		 id_aluno ='".$id_aluno."',
                           id_disciplina ='".$id_disciplina."',
                      		 turno= '".$turno."'
                      		
                      		 WHERE 
                      		 id_turma =  '".$lid."'" ;  

                        		     
               $result = mysqli_query($okdb,$execQuery)or 
               die(false);

                   $strJsonOk = '{"status":"ok","data":1}';
            echo $strJsonOk;
    	///executera a QUERY end	
    			?>
