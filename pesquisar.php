<?php
//session_start();
include_once("conexao.php");

	
?>

<html >
	<head>
	<link rel="stylesheet" href="css/pesquisar.css" type="text/css">
		
	</head>

	<body>
	  
	  
	 <h1>Pesquisar Peças</h1>
		
		<form method="POST" action="">
			<label>Nome da peça: </label>
			<input type="text" name="nome" placeholder="O que deseja pesquisar?"><br><br>
			
			<input name="pesquisar" type="submit" value="Pesquisar">
		</form><br><br>
	  </form>
		
		<?php
		
		$pesquisar = filter_input(INPUT_POST, 'pesquisar', FILTER_SANITIZE_STRING);
		if($pesquisar){
			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
			$Usuario= "SELECT * FROM pecas WHERE nome_peca LIKE '%$nome%'";
			$usuario = mysqli_query($conn, $Usuario);
			
			echo'<table border="2">';
            echo '<tr>';
            echo'<td>Id</td>';
            echo'<td>Nome da peça</td>';
            echo'<td>Nome do autor</td>';
            echo'<td>Nome do diretor</td>';
            echo'<td>Data da peça</td>';
            echo'<td>Tema da peça</td>';
            echo'<td>Resumo da peça</td>';
            echo'</tr>';

				
			
		 
		while($row_usuario = mysqli_fetch_assoc($usuario)){
			echo'<tr>';
                echo'<td>'.$row_usuario['id'].'</td>';
                echo'<td>'.$row_usuario['nome_peca'].'</td>';
                echo'<td>'.$row_usuario['autor'].'</td>';
                echo'<td>'.$row_usuario['diretor'].'</td>';
                echo'<td>'.$row_usuario['data_peca'].'</td>';
                echo'<td>'.$row_usuario['tema'].'</td>';
                echo'<td>'.$row_usuario['resumo'].'</td>';
                echo "<td> <a href='deletar.php?				tipo=2&id=".$row_usuario['id']."'>
                <img src='img/borracha.png' width='20' height='20' title='Excluir'/>
                </td>";
                echo "<td> <a href='editar.php?tipo=2&id=".$row_usuario['id']."'>
                <img src='img/edit.png' width='20' height='20' title='Atualizar'/>
                </td>";
                echo'</tr>';
				
				if (!empty($_SESSION['email'])){ 
			echo "<td><a href='excluir.php?tipo=2&id=" . $row_usuario['id'] . "'><img src='imagens/del.png' width='20' height='20' title='Excluir' /></td>";
			echo "<td><a href='editar.php?tipo=2&id=". $row_usuario['id'] ."'/><img src='imagens/edit.png' width='20' height='20' title='Alterar' /></td>";
			}
		}
		}
		echo '</table>';
		?>
			  		
<tr>

</table>
<div class="voltar">
    <a href="login.php">
        <img src="img/volta.png"></div></p></div>
	</body>
</html>