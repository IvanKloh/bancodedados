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
<title>Menu Disciplina</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css"><! -- acessa o  link da parte estetica da biblioteca dataTables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css"><! -- acessa o  link da parte estetica da biblioteca dataTables-->
    <link rel="stylesheet" href="<?php echo "http://".$server."/estoque/css/font-awesome-4.7.0/css/font-awesome.min.css"?>"> <! -- acessa o arquivo de css para a parte dos icónes da pagina-->
	<link rel="stylesheet" href="<?php echo "http://".$server."/aulasenac/bancodedados/css/stilo.css"?>"> <! -- acessa o arquivo de css para a parte estetica da pagina-->

	<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script><! -- acessa o  link da biblioteca do ajax -->
	<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script><! -- acessa o  link do jquery-->
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script><! -- acessa o  link do jquery com a biblioteca dataTables-->
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script><! -- acessa o  link do jquery com a biblioteca dataTables-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script><! -- acessa o  link dos botoes  com a biblioteca dataTables-->
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script><! -- acessa o  link do jszip com a biblioteca dataTables-->
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script><! -- acessa o  link para exportar para pdf com a biblioteca dataTables-->
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script><! -- acessa o  link para exportar para pdf com a biblioteca dataTables-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script><! -- acessa o  link dos botoes  com a biblioteca dataTables-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script><! -- acessa o  link do botoes com a biblioteca dataTables-->
	
	<script language="JavaScript" src="<?php echo "http://".$server."/aulasenac/bancodedados/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes-->
	<div class="menu">
		<div id="banner"title="Meu Baner" onclick="inicio('<?php echo $server?>');">
		</div>

		<div class="lista">
		 	
			  <a href="<?php echo "http://".$server."/aulasenac/bancodedados/visao/"?>listarDisciplina.php">
			  <i class="fa fa-list-ul" aria-hidden="true"></i>
			   Listar</a>
			</div>   
			<div class="cadastra">
			   <a href="<?php echo "http://".$server."/aulasenac/bancodedados/visao/"?>insereDisciplina.php">
			  <i class="fa fa-database" aria-hidden="true"></i>
			   Inserir </a>
			 </div>  
			<div class="busca">
			  <a href="<?php echo "http://".$server."/aulasenac/bancodedados/visao/"?>buscarDisciplina.php">
			  	<i class="fa fa-search" aria-hidden="true"></i>
			  	 Buscar 
			  </a>
			</div> 
			<div class="sair">
			 <a id ="sair" onclick="sair('<?php echo $server?>');">
			  	<i class="fa fa-sign-out" aria-hidden="true"></i>
			  		Sair</a><br><br>
			 </div> 
		 
	</div>