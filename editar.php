<?php
    session_start();
    include_once("conexao.php");
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $result_usuario = "SELECT * FROM eventos WHERE id ='$id'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $row_usuario = mysqli_fetch_assoc($resultado_usuario);

?>
<?php
if (empty($_SESSION['email'])){
header("Location: login.php");
}
?>
<html>
    <head> 
        <title> Alterar peças </title>
        <link rel="stylesheet" href="css/index.css"  type="text/css"/> 
    </head>
    <body>
    <h1> Tela de edição </h1>
    <div class="bloco">
    <form method="POST" action="alterarCodigo.php">
    <input type ="hidden" name="id" value="<?php echo $row_usuario['id'];?>"  /> 
    <p><label> Nome: </label>
    <input type ="text" name="nome_peca" placeholder="Digite o nome" value="<?php echo $row_usuario['nome_peca'];?>" /> </p>
    <p><label> Autor: </label>
    <input type ="text" name="autor" value="<?php echo $row_usuario['autor'];?>"/> </p>
    <p><label> Diretor: </label>
    <input type ="text" name="diretor" value="<?php echo $row_usuario['diretor'];?>"/> </p>
    <p><label> Data: </label>
    <input type ="date" name="data_peca" value="<?php echo $row_usuario['data_peca'];?>"/> </p>
    <p><label> Tema: </label>
    <input type ="text" name="tema" value="<?php echo $row_usuario['tema'];?>"/> </p>
    <p><label> Resumo: </label>
    <input type ="text" name="resumo" value="<?php echo $row_usuario['resumo'];?>"/></p>
    <div>
    <input type="submit" value ="Atualizar" class="submit"/>  
    <input type="reset" value ="Limpar" class="sumbmit"/>
    <div class="voltar">
    <a href="inicio.php">
        <img src="images/arrow.png"></div></p>
</form>




</body>
</html>