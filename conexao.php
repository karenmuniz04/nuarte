<?php
$servidor = "localhost";
$usuario = "root";
$senha="";
$dbname = "cadastro";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);




function abrirBanco(){
    $conexao = new mysqli("localhost", "root", "", "cadastro");
    return $conexao;
}

function selectAllPessoa(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM eventos ORDER BY nome_peca";
    $resultado = $banco->query($sql);
    $banco->close();
    while ($row = mysqli_fetch_array($resultado)) {
        $grupo[] = $row;
    }
    return $grupo;
}


function voltarIndex(){
    header("Location:index.php");
}
function formatoData($data){
            $array = explode("-", $data);
            // $data = 2016-04-14
            // $array[0]= 2016, $array[1] = 04 e $array[2]= 14;
            $novaData = $array[2]."/".$array["1"]."/".$array[0];
            return $novaData;
}



?>
