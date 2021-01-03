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
  	 	 	<title>Alterar Disciplina</title>
  	 			<script language="JavaScript" src="<?php echo "http://".$server."/aulasenac/bancodedados/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes --> 
	</head>
	<body>
		
			<?php
				include('../modelo/conexao.php');///faz o include do arquivo  de conexão com o banco de dados


				$id = $_GET['id'];
				$acaoLista = "id_disciplina";
				include('../controle/listarDisciplina.php');///faz o include do arquivo listarDisciplina da pasta controle


				include('menuDisciplina.php');///faz o include do arquivo menuDisciplina
			?>
	<div class="container">	
	
		<div class= "form">
			<div id="campos">
				 <input type="Hidden" id="id_disciplina" value="<?php echo $id  ?>" >   <! --id que ta url--> 
  			  	
			  	<input type="text" id="disc" name="disc" value="<?php echo $array_disciplina[1]['nome_disciplina'];?>"><br><br><! -- campo de textoc prenchido já com os valores--> 
			 
			 	

			 

			 <div id="botão">
				<button type="button" onclick="alterarDisciplina(getElementById('disc').value,getElementById('id_disciplina').value)">ALTERAR</button>&nbsp;&nbsp;&nbsp;&nbsp; <! -- botão de alterar. Quando apertado envia os valores --> 
				
				<button type="button" onclick="limparDisciplina()">LIMPAR</button>&nbsp;&nbsp;&nbsp;&nbsp;<! -- botão de  limpar-->
				
				<input type='button' value='VOLTAR' onclick='history.go(-1)'/> <br><! -- botão de  voltar-->
			</div>	
				</div>			
			
			</div>	
		</div>	
		<?php 
			include ('rodape.php');
	 	?>	
	</body>
</html>
