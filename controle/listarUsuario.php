<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>

<?php


if($acaoLista == 'user'){
	$result = mysqli_query($okdb, "SELECT * FROM usuario");
 //echo "Numero de cadastros: ".mysqli_num_rows($result); ///mostra a quantidade de linhas

	   $conar = 0;
	   while($rows = $result->fetch_assoc()){
       $conar ++;

        $array_usuario[$conar]['nome_usuario']  = $rows['nome_usuario'];
        $array_usuario[$conar]['email_usuario'] = $rows['email_usuario'];
        $array_usuario[$conar]['senha_usuario'] = $rows['senha_usuario'];
       
       }

}else if($acaoLista =='id_usuario'){

	$result = mysqli_query($okdb, "SELECT * FROM usuario WHERE id_usuario =".$id);
	   $conar = 0;
	   while($rows = $result->fetch_assoc()){
       $conar ++;

        $array_usuario[$conar]['nome_usuario']  = $rows['nome_usuario'];
        $array_usuario[$conar]['email_usuario'] = $rows['email_usuario'];
        $array_usuario[$conar]['senha_usuario'] = $rows['senha_usuario'];
       
       
       }

}
?>