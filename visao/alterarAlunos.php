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
  	 	 	<title>Alterar Alunos</title>
  	 			<script language="JavaScript" src="<?php echo "http://".$server."/aulasenac/bancodedados/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes --> 
	</head>
	<body>
		
			<?php
				include('../modelo/conexao.php');///faz o include do arquivo  de conexão com o banco de dados


				$id = $_GET['id'];
				$acaoLista = "id_aluno";
				include('../controle/listarAlunos.php');///faz o include do arquivo listraAlunos da pasta controle


				include('menuAlunos.php');///faz o include do arquivo menuSuperior
			?>
	<div class="container">	
	
		<div class= "form">
			<div id="campos">
				 <input type="Hidden" id="id_aluno" value="<?php echo $id;  ?>" >   <! --id que ta url--> 
  			  	
			  	<input type="text" id="fname" name="fname" value="<?php echo $array_aluno[1]['nome_aluno'];?>"><br><br><! -- campo de textoc prenchido já com os valores--> 
			 
			 	<input type="date" id="lnasc" name="lnasc" value="<?php echo $array_aluno[1]['aniversario_aluno'];?>"><br><br><! -- campo de textoc prenchido já com os valores--> 
			 
			 	<input type="text" id="lsexo" name="lsexo" value="<?php echo $array_aluno[1]['sexo_aluno'];?>"><! -- campo de textoc prenchido já com os valores--> 

			 

			 <div id="botão">
				<button type="button" onclick="alterar(getElementById('fname').value,getElementById('lnasc').value,getElementById('lsexo').value,getElementById('id_aluno').value)">ALTERAR</button> <! -- botão de alterar. Quando apertado envia os valores --> 
				
				<button type="button" onclick="limpar()">LIMPAR</button><! -- botão de  limpar-->
				
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
