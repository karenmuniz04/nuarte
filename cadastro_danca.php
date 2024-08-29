<?php
session_start();
if (empty($_SESSION['email'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/index.css" type="text/css"/> 
    <title>Cadastro de danças</title>	
</head>
<body>
    <h1>Cadastrar danças</h1>
    <div class="bloco">
        <form method="POST" action="gravarInformacoes.php" enctype="multipart/form-data">
            <p>
                <label>Nome da dança:</label>
                <input type="text" name="nome_danca" placeholder="Digite o nome da dança"/><br/>
            </p>
            <p>
                <label>Alunos:</label>
                <input type="text" name="alunos_danca" placeholder="Digite o nome dos alunos."/><br/>
            </p>
            <p>
                <label>Data da dança:</label>
                <input type="date" name="data_danca" placeholder="Digite a data da apresentação"/><br/>
            </p>
            <label for="foto">Imagem:</label>
            <input type="file" name="foto" id="foto">

            <input type="submit" value="Cadastrar" class="submit"/>  
            <input type="reset" value="Limpar" class="submit"/>
        </form> 
    </div>
    <div class="voltar">
        <a href="inicio.php">
            <img src="images/arrow.png">
        </a>
    </div>
</body>
</html>
