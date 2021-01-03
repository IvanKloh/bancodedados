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

		$acaoLista = 'user';
		include('../controle/listarUsuario.php');///inclusao do arquivo com o comando de listarUsuario
	?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title>Listar Usuario</title>
	</head>
<body>
	
		<?php
			include('menuUsuario.php');
		?>
<div class="container">
	<div id="tbl">
		<table  id="myTable" style="width: 100%;">
			<thead>
				<tr>
					<th> Usuário </th>
					<th> E-mail </th>
					<th> Senha </th>
					
				</tr>
			</thead>
			<?php
				foreach ($array_usuario as $value) {
			?>
			<tr>
				<td><?php echo $value['nome_usuario'] ?></td>
				<td><?php echo $value['email_usuario'] ?></td>
				<td><?php echo $value['senha_usuario'] ?></td>
				
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

