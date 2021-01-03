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
  	 	 	<title>Alterar Turma</title>
  	 			<script language="JavaScript" src="<?php echo "http://".$server."/aulasenac/bancodedados/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes --> 
	</head>
	<body>
		
			<?php
				include('../modelo/conexao.php');///faz o include do arquivo  de conexão com o banco de dados


				$id = $_GET['id'];
				$acaoLista = "id_turma";
				include('../controle/listarTurma.php');///faz o include do arquivo listarTurma da pasta controle


				include('menuTurma.php');///faz o include do arquivo menuTurma
			?>
	<div class="container">	
	
		<div class= "form">
			<div id="campos">
				 <input type="Hidden" id="id_turma" value="<?php echo $id  ?>" >   <! --id que ta url--> 
  			  	
			  <input type="text" id="turma" name="turma" value="<?php echo  $array_turma[1]['turma'];?>"><br><br><! -- campo de textoc prenchido já com os valores--> 
			 <input type="text" id="id_professor" name="id_professor" value="<?php echo  $array_turma[1]['id_professor'];?>"><br><br><! -- campo de textoc prenchido já com os valores--> 
			  <input type="text" id="id_aluno" name="id_aluno" value="<?php echo  $array_turma[1]['id_aluno'];?>"><br><br><! -- campo de textoc prenchido já com os valores--> 
			 
			 	<input type="text" id="id_disciplina" name="id_disciplina" value="<?php echo  $array_turma[1]['id_disciplina'];?>"><br><br><! -- campo de texto prenchido já com os valores--> 
			 
			 	<input type="text" id="turno" name="turno" value="<?php echo  $array_turma[1]['turno'];?>"><br><br><! -- campo de texto prenchido já com os valores--> 

			

			 <div id="botão">
				<button type="button" onclick="alterarTurma(getElementById('turma').value,getElementById('id_professor').value,getElementById('id_aluno').value,getElementById('id_disciplina').value,getElementById('turno').value,getElementById('id_turma').value)">ALTERAR</button> <! -- botão de alterar. Quando apertado envia os valores --> 
				
				<button type="button" onclick=" limparTurma()">LIMPAR</button><! -- botão de  limpar-->
				
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
