<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>

<?php

if($acaoLista == 'nomeDiscTurma'){
	$result = mysqli_query($okdb, "SELECT * FROM professores");
 //echo "Numero de cadastros: ".mysqli_num_rows($result); ///mostra a quantidade de linhas

	   $conar = 0;
	   while($rows = $result->fetch_assoc()){
       $conar ++;

       $array_professores[$conar]['nome_professores'] = $rows['nome_professores'];
       $array_professores[$conar]['disciplina']       = $rows['disciplina'];
       $array_professores[$conar]['turma']            = $rows['turma'];
       
       }

}else if($acaoLista =='id_professor'){

	$result = mysqli_query($okdb, "SELECT * FROM professores WHERE id_professor =".$id);
	   $conar = 0;
	   while($rows = $result->fetch_assoc()){
       $conar ++;

  
       $array_professores[$conar]['nome_professores'] = $rows['nome_professores'];
       $array_professores[$conar]['disciplina']       = $rows['disciplina'];
       $array_professores[$conar]['turma']            = $rows['turma'];
       
       }

}
?>