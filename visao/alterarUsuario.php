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
  	 	 	<title>Alterar Usuario</title>
  	 			<script language="JavaScript" src="<?php echo "http://".$server."/aulasenac/bancodedados/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes --> 
	</head>
	<body>
		
			<?php
				include('../modelo/conexao.php');///faz o include do arquivo  de conexão com o banco de dados


				$id = $_GET['id'];
				$acaoLista = "id_usuario";
				include('../controle/listarUsuario.php');///faz o include do arquivo listarUsuario da pasta controle


				include('menuUsuario.php');///faz o include do arquivo menuUsuario
			?>
	<div class="container">	
	
		<div class= "form">
			<div id="campos">
				 <input type="Hidden" id="id_usuario" value="<?php echo $id  ?>" >   <! --id que ta url--> 
  			  	
			  <input type="text" id="nome_usuario" name="nome_usuario" value="<?php echo   $array_usuario[1]['nome_usuario'];?>"><br><br><! -- campo de textoc prenchido já com os valores--> 
			 <input type="text" id="email_usuario" name="email_usuario" value="<?php echo   $array_usuario[1]['email_usuario'];?>"><br><br><! -- campo de textoc prenchido já com os valores--> 
			  <input type="text" id="senha_usuario" name="senha_usuario" value="<?php echo   $array_usuario[1]['senha_usuario'];?>"><br><br><! -- campo de textoc prenchido já com os valores--> 
			
			 

			 <div id="botão">
				<button type="button" onclick="alterarUsuario(getElementById('nome_usuario').value,getElementById('email_usuario').value,getElementById('senha_usuario').value,getElementById('id_usuario').value)">ALTERAR</button> <! -- botão de alterar. Quando apertado envia os valores --> 
				
				<button type="button" onclick=" limparUsuario()">LIMPAR</button><! -- botão de  limpar-->
				
				<input type='button' value='VOLTAR' onclick='history.go(-1)'/> <! -- botão de  voltar-->
			</div>	
							
			</div>
			</div>	
		</div>	
		<?php 
			include ('rodape.php');
	 	?>	
	</body>
</html>
