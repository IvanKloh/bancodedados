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
  	 	 	<title>Alterar Professores</title>
  	 			<script language="JavaScript" src="<?php echo "http://".$server."/aulasenac/bancodedados/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes --> 
	</head>
	<body>
		
			<?php
				include('../modelo/conexao.php');///faz o include do arquivo  de conexão com o banco de dados


				$id = $_GET['id'];
				$acaoLista = "id_professor";
				include('../controle/listarProfessores.php');///faz o include do arquivo listraProfessores da pasta controle


				include('menuProfessores.php');///faz o include do arquivo menuProfessores
			?>
	<div class="container">	
	
		<div class= "form">
			<div id="campos">
				 <input type="Hidden" id="id_professor" value="<?php echo $id  ?>" >   <! --id que ta url--> 
  			  	
			  <input type="text" id="prof" name="prof" value="<?php echo $array_professores[1]['nome_professores'];?>"><br><br><! -- campo de textoc prenchido já com os valores--> 
			 
			 	<input type="text" id="disc" name="disc" value="<?php echo $array_professores[1]['disciplina'];?>"><br><br><! -- campo de textoc prenchido já com os valores--> 
			 
			 	<input type="text" id="turma" name="turma" value="<?php echo $array_professores[1]['turma'];?>"><br><br><! -- campo de textoc prenchido já com os valores--> 

			 

			 <div id="botão">
				<button type="button" onclick="alterarProfessores(getElementById('prof').value,getElementById('disc').value,getElementById('turma').value,getElementById('id_professor').value)">ALTERAR</button> <! -- botão de alterar. Quando apertado envia os valores --> 
				
				<button type="button" onclick="limparProfessores()">LIMPAR</button><! -- botão de  limpar-->
				
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
