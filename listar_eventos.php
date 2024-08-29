<html>
    <head> <title> Listar cadastros</title>
    <link rel="stylesheet" href="css/listar.css" type="text/css"></</head>
    <body>
    <h1>Listar eventos </h1>
    <?php 
    $busca ="";
        $mysqli = new mysqli("localhost",
        "root","","cadastro");
        //a variável está recebendo o select do bd
        if($resultado_sel = $mysqli->query("SELECT id,nome,data,matéria FROM eventos WHERE nome like '".$busca."%'")){
            echo'<table border="2">';
            echo '<tr>';
            echo'<td class="tabela">Id</td>';
            echo'<td class="tabela">Nome do evento</td>';
            echo'<td class="tabela">Data</td>';
            echo'<td class="tabela">Matéria </td>';
            echo'</tr>';

            while($row = mysqli_fetch_assoc($resultado_sel)){
                echo'<tr>';
                echo'<td>'.$row['id'].'</td>';
                echo'<td>'.$row['nome'].'</td>';
                echo'<td>'.$row['data'].'</td>';
                echo'<td>'.$row['matéria'].'</td>';
            }
            echo'</table>';
            //$resultado_sel->close();
        }
    ?>

<div class="voltar">
    <a href="login.php">
        <img src="img/volta.png"></div></p>
</body>
    </html>