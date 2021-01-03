<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>
<?php

	include('../modelo/conexao.php');///inclusão do arquivo de conexão com o banco


		$prof = $_GET["prof"];
	//	///recebe o valor prof do arquivo da visao
    			 
		$okdb = mysqli_connect("localhost", "root", "", "aula");///conexão com o banco de dados


			$sql="SELECT
					 id_professor, 
					 nome_professores,
					 disciplina,
					 turma
					 FROM 
					 professores WHERE 
					 nome_professores LIKE '%$prof%'";///comando para mostrar todos os elementos da tabela 
 				
	 	$result = mysqli_query($okdb,$sql);
	 
		 echo "<table border='1'>
			<tr>
				<th> Nome </th>
				<th> Disciplina </th>
				<th> Turma </th>
			</tr>";

		 while($rows = $result-> fetch_assoc()){
			  echo "<tr>";
				  echo "<td><a href='../visao/alterarProfessores?id=".$rows['id_professor']."'>" . $rows['nome_professores'] ."</a></td>"; ///link  na tabela
				  echo "<td><a href='../visao/alterarProfessores?id=".$rows['id_professor']."'>" . $rows['disciplina'] ."</a></td>";///link na tabela
				  echo "<td><a href='../visao/alterarProfessores0?id=".$rows['id_professor']."'>" . $rows['turma'] ."</a></td>";  ///link na tabela
			  echo"</tr>";
			  }
			echo "</table>";

	mysqli_close($okdb);
	
      
?>