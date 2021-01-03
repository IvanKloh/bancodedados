<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>
<?php

	include('../modelo/conexao.php');///inclusão do arquivo de conexão com o banco


		$disc = $_GET["disc"];///recebe o valor disc do arquivo da visao
    			 
		$okdb = mysqli_connect("localhost", "root", "", "aula");///conexão com o banco de dados


			$sql="SELECT
					 id_disciplina, 
					 nome_disciplina
					 FROM 
				     disciplina WHERE 
					 nome_disciplina LIKE '%$disc%'";///comando para mostrar todos os elementos da tabela 
 				
	 	$result = mysqli_query($okdb,$sql);
	 
		 echo "<table border='1'>
			<tr>
			<th>Nome</th>
			</tr>";

		 while($rows = $result->fetch_assoc()){
			  echo "<tr>";
			  echo "<td><a href='../visao/alterarDisciplina?id=".$rows['id_disciplina']."'>" . $rows['nome_disciplina'] ."</a></td>"; ///link  na tabela
			 
			  echo"</tr>";
			  }
			echo "</table>";

	mysqli_close($okdb);
	
      
?>