<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>

<?php
if($acaoLista == 'disc'){
	$result = mysqli_query($okdb, "SELECT * FROM disciplina");
 //echo "Numero de cadastros: ".mysqli_num_rows($result); ///mostra a quantidade de linhas

	   $conar = 0;
	   while($rows = $result->fetch_assoc()){
       $conar ++;

     
       $array_disciplina[$conar]['nome_disciplina']         = $rows['nome_disciplina'];
       }

}else if($acaoLista =='id_disciplina'){

	$result = mysqli_query($okdb, "SELECT * FROM disciplina WHERE id_disciplina=".$id);

	   $conar = 0;
	   while($rows = $result->fetch_assoc()){
       $conar ++;

     
       $array_disciplina[$conar]['nome_disciplina']         = $rows['nome_disciplina'];
      
       }

}
?>