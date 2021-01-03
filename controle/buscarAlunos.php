<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>
<?php

	include('../modelo/conexao.php');///inclusão do arquivo de conexão com o banco


		$fname = $_GET["fname"];///recebe o valor fname do arquivo da visao
    			 
		$okdb = mysqli_connect("localhost", "root", "", "aula");///conexão com o banco de dados


			$sql="SELECT
					 id_aluno, 
					 nome_aluno,
					 aniversario_aluno,
					 sexo_aluno
					 FROM 
					 aluno WHERE 
					 nome_aluno LIKE '%$fname%'";///comando para mostrar todos os elementos da tabela 
 				
	 	$result = mysqli_query($okdb,$sql);
	 
		 echo "<table border='1'>
			<tr>
			<th>Nome</th>
			<th>Aniversário</th>
			<th>Sexo</th>
			</tr>";

		 while($rows = $result->fetch_assoc()){
			  echo "<tr>";
			  echo "<td><a href='../visao/alterarAlunos?id=".$rows['id_aluno']."'>" . $rows['nome_aluno'] ."</a></td>"; ///link  na tabela
			  echo "<td><a href='../visao/alterarAlunos?id=".$rows['id_aluno']."'>" . $rows['aniversario_aluno'] ."</a></td>";///link na tabela
			  echo "<td><a href='../visao/alterarAlunos?id=".$rows['id_aluno']."'>" . $rows['sexo_aluno'] ."</a></td>";  ///link na tabela
			  echo"</tr>";
			  }
			echo "</table>";

	mysqli_close($okdb);
	
      
?>