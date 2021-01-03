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
///var_dump($_SERVER);

$server = $_SERVER['HTTP_HOST'];
@include('../controle/controleSession.php');///inclusao do arquivo de controleSession
?>
<html lang= "pt-br">
  <head>
    <meta charset= "utf-8">
         <title>Menu</title>
         	<link rel="stylesheet" href="<?php echo "http://".$server."/estoque/css/font-awesome-4.7.0/css/font-awesome.min.css"?>"> <! -- acessa o arquivo de css para a parte dos icónes da pagina-->
  		     <link rel="stylesheet" href="<?php echo "http://".$server."/aulasenac/bancodedados/css/login.css"?>"> <! -- acessa o arquivo de css para a parte estetica da pagina-->
   
  </head>
  <body>
  	<link rel="stylesheet" href="<?php echo "http://".$server."/aulasenac/bancodedados/css/stilo.css"?>"> <! -- acessa o arquivo de css para a parte estetica da pagina-->
	<script language="JavaScript" src="<?php echo "http://".$server."/aulasenac/bancodedados/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes-->

		<div id="banner"title="Meu Baner">
		</div>
		<div class="menuAlunos">
		 
			  <a href="<?php echo "http://".$server."/aulasenac/bancodedados/visao/"?>menuAlunos.php">
			  <i class="fa fa-male" aria-hidden="true"></i>
			  Alunos</a>
			</div>

			<div class="menuDisciplina">
			  <a href="<?php echo "http://".$server."/aulasenac/bancodedados/visao/"?>menuDisciplina.php">
			 <i class="fa fa-book" aria-hidden="true"></i>
			  Disciplinas</a>
			</div>

			<div class="menuProfessores">
			  <a href="<?php echo "http://".$server."/aulasenac/bancodedados/visao/"?>menuProfessores.php">
			 <i class="fa fa-user-o" aria-hidden="true"></i>
			  Professores</a>
			</div>

			<div class="menuTurmas">
			  <a href="<?php echo "http://".$server."/aulasenac/bancodedados/visao/"?>menuTurma.php">
			 <i class="fa fa-address-book" aria-hidden="true"></i>
			  Turmas</a>
			</div>

			<div class="menuUsuario">
			  	<a href="<?php echo "http://".$server."/aulasenac/bancodedados/visao/"?>menuUsuario.php">
			  	<i class="fa fa-user-circle-o" aria-hidden="true"></i>
			  	Usuário</a>
			 </div>

			 <div class="menuSair">
			  	<a id ="sair" onclick="sair('<?php echo $server?>');">
			  	<i class="fa fa-sign-out" aria-hidden="true"></i>
			  	Sair</a><br><br>
			</div>

	
	  </body>
</html>
		