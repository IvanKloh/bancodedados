<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>
<?php
//header("location: visao/listarAlunos.php")


    //var_dump($array_aluno);
	//echo mysqli_num_rows($result); //Mostra a quantidade de linhas ou rows
	//mysqli_free_result($result);//Apaga os valores no array 



///executar Query end
?>
<?php

session_start();


///valida se o usuario entrou no sistema start
	if(@$_SESSION['login_ok']==false){///caso nao tenha retorno vai para a visao de login

		include('visao/loginAlunos.php');

	}
	elseif(@$_SESSION['login_ok']==true){///caso positivo continua
///valida se o usuario entrou no sistema end
?>
<html>
	<head>
    	<meta charset="UTF-8"/>
  	  <title>Menu </title>

	</head>
	<body>
		<div class="menu">
  			<?php 
				include('visao/menuSuperior.php'); ///faz o include do menuSuperior
     	 	?>
		</div>
		
		
	</body>
</html>
<?php
}

//@$_SESSION['login_ok']=false;
?>


