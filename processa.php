<?php
include_once("conexao.php");
$nome_imagem = $_FILES['arquivo'];
echo "Nome da imagem: $nome_imagem </br>"

$result_arquivo = "INSERT INTO pecas (img) VALUES ('$nome_imagem')";
$resultado_arquivo = mysqli_query($conn,$result_arquivo);
$ultimo_id = mysqli_insert_id($conn);

$_UP['pasta'] = "imagens".$ultimo_id.'/';

mkdir ($_UP['pasta'], 0777);

if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'].$nome_imagem)){
    

}


?>