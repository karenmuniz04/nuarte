<?php
session_start();
include_once("conexao.php");
define('TAMANHO_MAXIMO', 2 * 1024 * 1024); // 2 MB em bytes

// Verifica se foi enviado um arquivo
if (!isset($_FILES['foto'])) {
    echo "Selecione uma imagem";
    exit;
}

// Recupera os dados dos campos do arquivo de imagem
$foto = $_FILES['foto'];
$nome_imagem = $foto['name'];
$caminho_temporario = $foto['tmp_name'];
$tamanho = $foto['size'];

// Validações básicas
$tipo = mime_content_type($caminho_temporario);
if (strpos($tipo, 'image') === false || $tamanho > TAMANHO_MAXIMO) {
    echo "O arquivo enviado não é uma imagem válida ou excede o tamanho permitido.";
    exit;
}

// Diretório onde deseja salvar a imagem (certifique-se de ter permissão de escrita)
$diretorio_destino = '\\xampp\\htdocs\\cadastro\\images\\banco\\';
$caminho_destino = $diretorio_destino . $nome_imagem;

if (!move_uploaded_file($caminho_temporario, $caminho_destino)) {
    echo "Falha ao mover o arquivo para o destino.";
    exit;
}

// Dados do formulário
$nome_peca = filter_input(INPUT_POST, 'nome_peca', FILTER_SANITIZE_STRING);
$nome_danca = filter_input(INPUT_POST, 'nome_danca', FILTER_SANITIZE_STRING);
$autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
$diretor = filter_input(INPUT_POST, 'diretor', FILTER_SANITIZE_STRING);
$alunos_danca = filter_input(INPUT_POST, 'alunos_danca', FILTER_SANITIZE_STRING);
$data_peca = filter_input(INPUT_POST, 'data_peca', FILTER_SANITIZE_STRING);
$data_danca = filter_input(INPUT_POST, 'data_danca', FILTER_SANITIZE_STRING);
$tema = filter_input(INPUT_POST, 'tema', FILTER_SANITIZE_STRING);
$resumo = filter_input(INPUT_POST, 'resumo', FILTER_SANITIZE_STRING);




 
$query = "INSERT INTO eventos (nome_peca,nome_danca, autor, diretor,alunos_danca, data_peca, data_danca, tema, resumo, caminho_imagem) 
VALUES ('$nome_peca','$nome_danca', '$autor', '$diretor','$alunos_danca','$data_peca','$data_danca','$tema','$resumo','$nome_imagem')";
$resultado_banco = mysqli_query($conn, $query);


header("Location: inicio.php");



