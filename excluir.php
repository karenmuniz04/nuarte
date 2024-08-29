<?php
			session_start();
				if (empty($_SESSION['email'])){
				header("Location: login.php");
				}
?>

<html> 
    <head>
    <title>Excluir peças</title>
    <link rel="stylesheet" href="css/excluir.css"  type="text/css"/> 
    </head>
    <h1>Excluir peças</h1>
    <?php 
    $busca ="";
        $mysqli = new mysqli("localhost",
        "root","","cadastro");
        //a variável está recebendo o select do bd
        if($resultado_sel = $mysqli->query("SELECT id,nome_peca,autor,diretor,data_peca,tema,resumo FROM eventos WHERE nome_peca like '".$busca."%'")){
            echo'<table border="2">';
            echo '<tr>';
           // echo'<td class="tabela">Id</td>';
            echo'<td class="tabela">Nome da peça</td>';
            echo'<td class="tabela">Nome do autor</td>';
            echo'<td class="tabela">Nome do diretor</td>';
            echo'<td class="tabela">Data da peça</td>';
            echo'<td class="tabela">Tema da peça</td>';
            echo'<td class="tabela">Resumo da peça</td>';
            echo'</tr>';

            while($row = mysqli_fetch_assoc($resultado_sel)){
                echo'<tr>';
               // echo'<td>'.$row['id'].'</td>';
                echo'<td>'.$row['nome_peca'].'</td>';
                echo'<td>'.$row['autor'].'</td>';
                echo'<td>'.$row['diretor'].'</td>';
                echo'<td>'.$row['data_peca'].'</td>';
                echo'<td>'.$row['tema'].'</td>';
                echo'<td>'.$row['resumo'].'</td>';
                echo "<td> <a href='deletar.php?tipo=2&id=".$row['id']."'>
                <img src='img/borracha.png' width='20' height='20' title='Excluir'/>
                </td>";
            }
            echo'</table>';
            //$resultado_sel->close();
        }
    ?>
    <p>
    <div class="voltar">
    <a href="inicio.php">
        <img src="images/arrow.png"></div></p>
</html>

