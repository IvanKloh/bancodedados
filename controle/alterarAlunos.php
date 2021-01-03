<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>
<?php
         
            $okdb = mysqli_connect("localhost", "root", "", "aula");///conexão com o banco de dados
   ///recebe valores atravez do metodo get do arquivo alterarAlunos da pasta visão start
    			  $fname = $_GET["fname"]; 
    			  $lnasc = $_GET["lnasc"];
    			  $lsexo = $_GET["lsexo"];
    			  $lid   = $_GET["lid"];
   ///recebe valores atravez do metodo get do arquivo alterarAlunos da pasta visão  end
    			// Tratamento - Start 
    //$lnasc = date('Y-m-d',strtotime($lnasc) );
    // Tratamento - End  
    ///executera a QUERY start
               $execQuery =             
                      "  UPDATE aluno SET
                      		
                      		 nome_aluno= '".$fname."',
                      		 aniversario_aluno ='".$lnasc."',

                      		 sexo_aluno = '".$lsexo."'
                      		
                      		 WHERE 
                      		 id_aluno =  '".$lid."'" ;  

                 // echo $execQuery;	     
               $result = mysqli_query($okdb,$execQuery)or 
               die(false);

                   $strJsonOk = '{"status":"ok","data":1}';
            echo $strJsonOk;
            

    	///executera a QUERY end	
    			?>
