<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>
<?php
///controle de session do ususario start
session_start();
	if($_SESSION['controleLogin'] == false){ ///controle login retornar falso sera redirecionado para a  pagina de login com a alert
		header('location:../visao/loginAlunos.php?error=s');
	}
///controle de session do ususario end

?>