<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>
	<?php
		include('../controle/controleSession.php');///inclusao do arquivo de controleSession

	?>

<html>
	<head>
  		<meta charset="UTF-8"/>
  	 	<title>Inserir Disciplina</title>
  	 		<script language="JavaScript" src="<?php echo "http://".$server."/aulasenac/bancodedados/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes --> 
	</head>
	<body>
		
			<?php
				include('menuDisciplina.php');
			?>
	<div class="container">
		<div id="form">
			  	<label for="disc">Nome Disciplina:</label><! -- caixa de texto para inserir o nome da disciplina --> 
			  	<input type="text" id="disc" name="disc"><br><br>
				</label> <br><br><! -- caixa de texto para inserir o sexo do aluno --> 
			 	<button type="button" onclick="insereDisciplina(getElementById('disc').value)">CADASTRAR</button>&nbsp;&nbsp;&nbsp;&nbsp; <! -- botão de Cadastrar. Quando apertado envia os valores --> 
				
				<button type="button" onclick="limparDisciplina()">LIMPAR</button>&nbsp;&nbsp;&nbsp;&nbsp;<! -- botão de  limpar-->
				<input type='button' value='VOLTAR' onclick='history.go(-1)'/> <! -- botão de  voltar-->

			</div>	
		</div>	
		<?php 
			include ('rodape.php');
	 	?>
	</body>
</html>
