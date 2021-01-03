<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>
<?php

	include('../modelo/conexao.php');///inclusão do arquivo de conexão com o banco


		$turma = $_GET["turma"];
	//	///recebe o valor turma do arquivo da visao
    			 
		$okdb = mysqli_connect("localhost", "root", "", "aula");///conexão com o banco de dados


			$sql="SELECT
					 id_turma, 
					 id_professor,
					 id_aluno,
					 id_disciplina,
					 turno
					 FROM 
					 turma WHERE 
					 id_turma LIKE '%$turma%'";///comando para mostrar todos os elementos da tabela 
 				
	 	$result = mysqli_query($okdb,$sql);
	 
		 echo "<table border='1'>
			<tr>
				<th> Turma </th>
				<th> Professor </th>
				<th> Aluno </th>
				<th> Disciplina </th>
				<th> Turno </th>
			</tr>";

		 while($rows = $result-> fetch_assoc()){
			  echo "<tr>";
				  echo "<td><a href='../visao/alterarTurma?id=".$rows['id_turma']."'>" . $rows['id_turma'] ."</a></td>"; ///link  na tabela
				  echo "<td><a href='../visao/alterarTurma?id=".$rows['id_turma']."'>" . $rows['id_professor'] ."</a></td>"; ///link  na tabela
				  echo "<td><a href='../visao/alterarTurma?id=".$rows['id_turma']."'>" . $rows['id_aluno'] ."</a></td>"; ///link  na tabela
				  echo "<td><a href='../visao/alterarTurma?id=".$rows['id_turma']."'>" . $rows['id_disciplina'] ."</a></td>";///link na tabela
				  echo "<td><a href='../visao/alterarTurma?id=".$rows['id_turma']."'>" . $rows['turno'] ."</a></td>";  ///link na tabela
				  echo"</tr>";
			  }
			echo "</table>";

	mysqli_close($okdb);
	
      
?>