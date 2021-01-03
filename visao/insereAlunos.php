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
  	 	<title>Inserir Alunos</title>
  	 		<script language="JavaScript" src="<?php echo "http://".$server."/aulasenac/bancodedados/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes --> 
	</head>
	<body>
		
			<?php
				include('menuAlunos.php');
			?>
	<div class="container">
		<div id="form">
			  	<label for="fname">Nome do Aluno:</label><! -- caixa de texto para inserir o nome do aluno --> 
			  	<input type="text" id="fname" name="fname"><br><br>
			 	<label for="lnasc">Nascimento:</label><br><! -- caixa de texto para inserir a data de nascimento do aluno --> 
			 	<input type="date" id="lnasc" name="lnasc"><br><br>
			 	<label>
			 		<span>Sexo</span><br>
			 		<select type="text" name="lsexo" id = "lsexo">
			 			<option value="M">  M	</option>
			 			<option value="F">  F </option>
			 			
			 		</select>
				</label> <br><br><! -- caixa de texto para inserir o sexo do aluno --> 
			 	<button type="button" onclick="showUser(getElementById('fname').value,getElementById('lnasc').value,getElementById('lsexo').value)">CADASTRAR</button>&nbsp;&nbsp;&nbsp;&nbsp; <! -- botão de Cadastrar. Quando apertado envia os valores --> 
				
				<button type="button" onclick="limpar()">LIMPAR</button>&nbsp;&nbsp;&nbsp;&nbsp;<! -- botão de  limpar-->
				<input type='button' value='VOLTAR' onclick='history.go(-1)'/> <! -- botão de  voltar-->

			</div>	
		</div>	
		<?php 
			include ('rodape.php');
	 	?>
	</body>
</html>
