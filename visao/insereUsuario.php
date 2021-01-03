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
				include('menuUsuario.php');
			?>
	<div class="container">
		<div id="form">
			  	<label for="nome_usuario">Usuario:</label><! -- caixa de texto para inserir o nome do usuario --> 
			  	<input type="text" id="nome_usuario" name="nome_usuario"><br><br>
			  	<label for="email_usuario">E-mail:</label><! -- caixa de texto para inserir o email do usuario --> 
			  	<input type="text" id="email_usuario" name="email_usuario"><br><br></label>
				<label for="senha_usuario">Senha:</label><! -- caixa de texto para inserir  senha do usuario --> 
			  	<input type="text" id="senha_usuario" name="senha_usuario"><br><br>
			  	
		 	<button type="button" onclick="insereUsuario(getElementById('nome_usuario').value,getElementById('email_usuario').value,getElementById('senha_usuario').value)">CADASTRAR</button>
			 
				<button type="button" onclick=" limparUsuario()">LIMPAR</button>&nbsp;&nbsp;&nbsp;&nbsp;<! -- botão de  limpar-->
				<input type='button' value='VOLTAR' onclick='history.go(-1)'/> <! -- botão de  voltar-->

			</div>	
		</div>
		<?php 
			include ('rodape.php');
	 	?>	
	</body>
</html>
