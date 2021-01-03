<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>
	<?php 
		include('../controle/controleSession.php');///faz o include do arquivo controleSession

	?>
<html>
	<head>
 	   <meta charset="UTF-8"/>
    	<title>Buscar Usuario</title>
    	<script language="JavaScript" src="<?php echo "http://".$server."/aulasenac/bancodedados/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes --> 
	</head>
	<body>
			
			<?php
				include('../modelo/conexao.php');///inclusao do arquivo que faz a conexão com o banco de dados
		
				include('menuUsuario.php');///include do arquivo menuUsuario
			?>
		<div class="container">	
			<div id="campos">
				<label for="nome_usuario">Usuário:</label> <! -- caixa de texto para inserir o nome do usuario --> 
				<input type="text" onkeypress="buscarUsuario(getElementById('nome_usuario').value)" id="nome_usuario" name="nome_usuario"><br><br> <! -- comando para aparecer os resultados conforme vai digitando na pesquisa --> 
			
			
				<input type='button' value='VOLTAR' onclick='history.go(-1)'/>&nbsp;&nbsp;&nbsp;&nbsp; <! -- botão de  limpar --> 
				<button type="button" onclick=" limparUsuario()">LIMPAR</button><br><br><! -- botão de  limpar-->
			
			</div>
								
			<div id="txtHint">
				<b>Lista dos Usuários</b>
			</div>
		</div>
		<?php 
			include ('rodape.php');
	 	?>	
	</body>
</html>
	
