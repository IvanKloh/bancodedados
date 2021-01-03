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

		$acaoLista = 'nomeDiscTurma';
		include('../controle/listarProfessores.php');///inclusao do arquivo com o comando de listar os professores
	?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title>Listar Professores</title>
	</head>
<body>
	
		<?php
			include('menuProfessores.php');
		?>
<div class="container">
	<div id="tbl">
		<table  id="myTable" style="width: 100%;">
			<thead>
				<tr>
					<th> Nome </th>
					<th> Disciplina </th>
					<th> Turma </th>
				</tr>
			</thead>
			<?php
				foreach ($array_professores as $value) {
			?>
			<tr>
				<td><?php echo $value['nome_professores'] ?></td>
				<td><?php echo $value['disciplina'] ?></td>
				<td><?php echo $value['turma'] ?></td>
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

