<html>
    <head> <title> Listar cadastros</title>
    <link rel="stylesheet" href="css/listar.css" type="text/css"></</head>
    <body>
    <h1>Lista cursos</h1>
    <?php 
    $busca ="";
        $mysqli = new mysqli("localhost",
        "root","","cadastro");
        //a variável está recebendo o select do bd
        if($resultado_sel = $mysqli->query("SELECT id,nome,professor,modalidade,carga_horaria FROM cursos WHERE nome like '".$busca."%'")){
            echo'<table border="2">';
            echo '<tr>';
            echo'<td class="tabela">Id</td>';
            echo'<td class="tabela">Nome do curso</td>';
            echo'<td class="tabela">Professor</td>';
            echo'<td class="tabela">Modalidade </td>';
            echo'<td class="tabela">Carga Horária</td>';
            echo'</tr>';

            while($row = mysqli_fetch_assoc($resultado_sel)){
                echo'<tr>';
                echo'<td>'.$row['id'].'</td>';
                echo'<td>'.$row['nome'].'</td>';
                echo'<td>'.$row['professor'].'</td>';
                echo'<td>'.$row['modalidade'].'</td>';
                echo'<td>'.$row['carga_horaria'].'</td>';
            }
            echo'</table>';
            //$resultado_sel->close();
        }
    ?>
    <div class="voltar">
    <a href="login.php">
        <img src="images/arrow.png"></div></p></div>
</body>
    </html>