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
  	 	<title>Inserir Turma</title>
  	 		<script language="JavaScript" src="<?php echo "http://".$server."/aulasenac/bancodedados/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes --> 
	</head>
	<body>
		
			<?php
				include('menuTurma.php');
			?>
	<div class="container">
		<div id="form">
			  	<label for="turma">Turma:</label><! -- caixa de texto para inserir a turma --> 
			  	<input type="text" id="turma" name="turma"><br><br>
			  	<label for="id_professor">Professor:</label><! -- caixa de texto para inserir o id do Professor --> 
			  	<input type="text" id="id_professor" name="id_professor"><br><br></label>
				<label for="id_aluno">Aluno:</label><! -- caixa de texto para inserir o id do aluno --> 
			  	<input type="text" id="id_aluno" name="id_aluno"><br><br>
			  	<label for="id_disciplina">Disciplina:</label><! -- caixa de texto para inserir o id da disciplina --> 
			  	<input type="text" id="id_disciplina" name="id_disciplina"><br><br>
			 	<label>
			 		<span>Turno</span>
			 		<select  type="text" name="turno" id = "turno">
			 			<option value="MANHÃ">  MANHÃ </option>
			 			<option value="TARDE">  TARDE </option>
			 			<option value="NOITE">  NOITE </option>
			 			
			 		</select>
				</label><br><br>
			 	<button type="button" onclick="insereTurma(getElementById('turma').value,getElementById('id_professor').value,getElementById('id_aluno').value,getElementById('id_disciplina').value,getElementById('turno').value)">CADASTRAR</button>
			 
				<button type="button" onclick=" limparTurma()">LIMPAR</button>&nbsp;&nbsp;&nbsp;&nbsp;<! -- botão de  limpar-->
				<input type='button' value='VOLTAR' onclick='history.go(-1)'/> <! -- botão de  voltar-->

			</div>	
		</div>
		<?php 
			include ('rodape.php');
	 	?>	
	</body>
</html>
