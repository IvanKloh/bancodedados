<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>
<?php

	include('../modelo/conexao.php');///inclusão do arquivo de conexão com o banco


		$nome_usuario = $_GET["nome_usuario"];
	//	///recebe o valor nome_usuario do arquivo da visao
    			 
		$okdb = mysqli_connect("localhost", "root", "", "aula");///conexão com o banco de dados


			$sql="SELECT
					 id_usuario, 
					 nome_usuario,
					 email_usuario,
					 senha_usuario
					FROM 
					 usuario WHERE 
					 nome_usuario LIKE '%$nome_usuario%'";///comando para mostrar todos os elementos da tabela 
 				
	 	$result = mysqli_query($okdb,$sql);
	 
		 echo "<table border='1'>
			<tr>
				<th> Usuário </th>
				<th> E-mail </th>
				<th> Senha </th>
			</tr>";

		 while($rows = $result-> fetch_assoc()){
			echo "<tr>";
			    echo "<td><a href='../visao/alterarUsuario?id=".$rows['id_usuario']."'>" . $rows['nome_usuario'] ."</a></td>"; ///link  na tabela
			 	echo "<td><a href='../visao/alterarUsuario?id=".$rows['id_usuario']."'>" . $rows['email_usuario'] ."</a></td>"; ///link  na tabela
			    echo "<td><a href='../visao/alterarUsuario?id=".$rows['id_usuario']."'>" . $rows['senha_usuario'] ."</a></td>"; ///link  na tabela
			 
			echo"</tr>";
			  }
		echo "</table>";

	mysqli_close($okdb);
	
      
?>