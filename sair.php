<?php
    session_start(); 
//apagar a sessão iniciada	
    unset(
        $_SESSION['email']
    );    
    //redirecionar o usuario para a página de login
    header("Location: login.php");
?>