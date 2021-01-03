<?php
/* arquivo de conexao com o banco de dados*/
//CONECTAR COM O SERVIDOR
$okdb = mysqli_connect('localhost', 'root', '', 'Aula');

//SELECIONA BASE DE DADOS (RETORNA 0 ou 1)
if (!$okdb) {
die('Problemas ao selecionar a base de dados!!!');
}else{

	//echo 'ok';
}
//CONECTAR COM O SERVIDOR
?>