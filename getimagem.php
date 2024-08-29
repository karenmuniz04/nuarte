<?php
    session_start(); 
    include_once("conexao.php");

    $result = mysqli_query($conn, "SELECT * FROM pecas WHERE id=$PicNum");
    $row = mysqli_fetch_object($result);

    Header ("Content-type: image/jpg");
    echo $row -> img; 



?> 