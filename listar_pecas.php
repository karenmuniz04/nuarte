<!DOCTYPE html>
<html>
<head>
    <title>Listar cadastros</title>
    <link rel="stylesheet" href="css/listar.css" type="text/css">
</head>
<body>
    <h1>Listar peças por tema</h1>

    <?php
    if (isset($_GET['tema'])) {
        $tema_escolhido = $_GET['tema'];
        $busca = "";

        $mysqli = new mysqli("localhost", "root", "", "cadastro");

        // Modifique a consulta SQL para incluir a condição do tema escolhido
        if ($resultado_sel = $mysqli->query("SELECT id, nome_peca, autor, diretor, data_peca, tema, resumo, caminho_imagem FROM eventos WHERE nome_peca LIKE '$busca%' AND tema = '$tema_escolhido'")) {
            echo '<div class="data-container">';
            
            while ($row = mysqli_fetch_assoc($resultado_sel)) {
                echo '<div class="data-row">';
               // echo '<div class="data-column">Id: ' . $row['id'] . '</div>';
                echo '<div class="data-column">Nome da Peça: ' . $row['nome_peca'] . '</div>';
                echo '<div class="data-column">Nome do Autor: ' . $row['autor'] . '</div>';
                echo '<div class="data-column">Nome do Diretor: ' . $row['diretor'] . '</div>';
                echo '<div class="data-column">Data da Peça: ' . $row['data_peca'] . '</div>';
                echo '<div class="data-column">Tema da Peça: ' . $row['tema'] . '</div>';
                echo '<div class="data-column">Resumo da Peça: ' . $row['resumo'] . '</div>';
                // Exibir a imagem
                $imagem = '/cadastro/images/banco/' .  $row['caminho_imagem'];
                echo '<div class="data-column"><img src="' . $imagem . '"></div>';
                echo '</div>';
            }
            echo '</div>';
        }
    } else {
        echo "Escolha um tema na página anterior.";
    }
    ?>
    <p>
    <div class="voltar">
        <a href="mostras.html">
            <img src="images/arrow.png">
        </a>
    </div>
    </p>
</body>
</html>
