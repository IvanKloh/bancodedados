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
  	 	<title>Inserir Professores</title>
  	 		<script language="JavaScript" src="<?php echo "http://".$server."/aulasenac/bancodedados/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes --> 
	</head>
	<body>
		
			<?php
				include('menuProfessores.php');
			?>
	<div class="container">
		<div id="form">
			  	<label for="prof">Nome Professor(a):</label><! -- caixa de texto para inserir o nome do professor --> 
			  	<input type="text" id="prof" name="prof"><br><br>
			  	<label for="disc">Disciplina:</label><! -- caixa de texto para inserir  a disciplina --> 
			  	<input type="text" id="disc" name="disc"><br><br>
				</label>
				<label for="turma">Turma:</label><! -- caixa de texto para inserir a turma --> 
			  	<input type="text" id="turma" name="turma"> <br><br>
			 	<button type="button" onclick="insereProfessores(getElementById('prof').value,getElementById('disc').value,getElementById('turma').value)">CADASTRAR</button>&nbsp;&nbsp;&nbsp;&nbsp; <! -- botão de Cadastrar. Quando apertado envia os valores --> 
				
				<button type="button" onclick="limparProfessores()">LIMPAR</button>&nbsp;&nbsp;&nbsp;&nbsp;<! -- botão de  limpar-->
				<input type='button' value='VOLTAR' onclick='history.go(-1)'/> <! -- botão de  voltar-->

			</div>	
		</div>
		<?php 
			include ('rodape.php');
	 	?>	
	</body>
</html>
