<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>
	<?php

		include('../controle/controleSession.php');///inclusao do arquivo de controleSession

		
		include('../modelo/conexao.php');///inclusao do arquivo que faz a conexão com o banco de dados

		$acaoLista = 'LnomeAniverSexo';
		include('../controle/listarAlunos.php');///inclusao do arquivo com o comando de listar os alunos
	?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title>Listar Alunos</title>
	</head>
<body>
	<div class="posicao">
		<?php
			include('menuAlunos.php');
		?>
	</div>
<div class="container">
	<div id="tbl">
		<table  id="myTable" style="width: 100%;">
			<thead>
				<tr>
					<th> Nome </th>
					<th> Aniversario </th>
					<th> Sexo </th>
				</tr>
			</thead>
			<?php
				foreach ($array_aluno as $value) {
			?>
			<tr>
				<td><?php echo $value['nome_aluno'] ?></td>
				<td><?php echo $value['aniversario_aluno'] ?></td>
				<td><?php echo $value['sexo_aluno'] ?></td>
			</tr>
			<?php
				}
			?>

		</table><br><br>
		<input type='button' value='VOLTAR' onclick='history.go(-1)'/> <! -- botão de  voltar-->
		</div>
		</div>
		<?php 
			include ('rodape.php');
	 	?>
	</body>
</html>

