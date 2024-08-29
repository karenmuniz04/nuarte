<?php
session_start();
include_once("conexao.php");
?>
<?php
    $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);


    $resultado_usuario = "INSERT INTO administrador (nome,email,senha) VALUES ('$nome','$email', '$senha')";
    $resultado_banco = mysqli_query($conn, $resultado_usuario);
    header("Location: login.php");
?>