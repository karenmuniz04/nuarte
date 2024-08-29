<?php
    session_start();
    include_once("conexao.php");
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $nome_peca = filter_input(INPUT_POST, 'nome_peca', FILTER_SANITIZE_STRING);
    $autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
    $diretor = filter_input(INPUT_POST, 'diretor', FILTER_SANITIZE_STRING);
    $data_peca = filter_input(INPUT_POST, 'data_peca', FILTER_SANITIZE_STRING);
    $tema = filter_input(INPUT_POST, 'tema', FILTER_SANITIZE_STRING);
    $resumo = filter_input(INPUT_POST, 'resumo', FILTER_SANITIZE_STRING);


    $result_usuario = "UPDATE eventos SET nome_peca='$nome_peca', autor='$autor', diretor='$diretor',data_peca='$data_peca',tema='$tema',resumo='$resumo' WHERE id ='$id'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    //alterar através do id
    header("Location: editar.php?id=$id");

?>