<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>

<?php


if($acaoLista == 'turma'){
	$result = mysqli_query($okdb, "SELECT * FROM turma");
 //echo "Numero de cadastros: ".mysqli_num_rows($result); ///mostra a quantidade de linhas

	   $conar = 0;
	   while($rows = $result->fetch_assoc()){
       $conar ++;

        $array_turma[$conar]['turma']           = $rows['turma'];
        $array_turma[$conar]['id_professor'] = $rows['id_professor'];
        $array_turma[$conar]['id_aluno'] = $rows['id_aluno'];
        $array_turma[$conar]['id_disciplina']       = $rows['id_disciplina'];
        $array_turma[$conar]['turno']            = $rows['turno'];
       
       }

}else if($acaoLista =='id_turma'){

	$result = mysqli_query($okdb, "SELECT * FROM turma WHERE id_turma =".$id);
	   $conar = 0;
	   while($rows = $result->fetch_assoc()){
       $conar ++;

        $array_turma[$conar]['turma']           = $rows['turma'];
        $array_turma[$conar]['id_professor'] = $rows['id_professor'];
        $array_turma[$conar]['id_aluno'] = $rows['id_aluno'];
        $array_turma[$conar]['id_disciplina']       = $rows['id_disciplina'];
        $array_turma[$conar]['turno']            = $rows['turno'];
       
       
       }

}
?>