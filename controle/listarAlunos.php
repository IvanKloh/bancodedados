<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>

<?php
///listar nome, aniversario, sexo

if($acaoLista == 'LnomeAniverSexo'){
	$result = mysqli_query($okdb, "SELECT * FROM aluno");
 //echo "Numero de cadastros: ".mysqli_num_rows($result); ///mostra a quantidade de linhas

	   $conar = 0;
	   while($rows = $result->fetch_assoc()){
       $conar ++;

       //$array_aluno[$conar]['id_aluno']           = $rows['id_aluno'];
       $array_aluno[$conar]['nome_aluno']         = $rows['nome_aluno'];
       $array_aluno[$conar]['aniversario_aluno']  = $rows['aniversario_aluno'];
       $array_aluno[$conar]['sexo_aluno']         = $rows['sexo_aluno'];
       
       }

}else if($acaoLista =='id_aluno'){

	$result = mysqli_query($okdb, "SELECT * FROM aluno WHERE id_aluno=".$id);

	   $conar = 0;
	   while($rows = $result->fetch_assoc()){
       $conar ++;

      //$array_aluno[$conar]['id_aluno']           = $rows['id_aluno'];
       $array_aluno[$conar]['nome_aluno']         = $rows['nome_aluno'];
       $array_aluno[$conar]['aniversario_aluno']  = $rows['aniversario_aluno'];
       $array_aluno[$conar]['sexo_aluno']         = $rows['sexo_aluno'];
       
       }

}
?>