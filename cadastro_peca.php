<?php
session_start();
if (empty($_SESSION['email'])){
header("Location: login.php");
}
?>

<html>
	<head>
	<link rel="stylesheet" href="css/index.css"  type="text/css"/> 
		<title>Cadastro de peças</title>
		
	</head>
	<body>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<h1>Cadastrar peças</h1>
		<div class="bloco">
		<form method="POST" action="gravarInformacoes.php" enctype="multipart/form-data">
			<p><label> Nome da peça: </label>
			<input type ="text" name="nome_peca" placeholder ="Digite o nome da peça"/> <br/></p>
			<p><label> Autor da peça: </label>
			<input type ="text" name="autor" placeholder ="Digite o nome do autor."/> <br/></p>
			<p><label> Diretor da peça: </label>
			<input type ="text" name="diretor" placeholder ="Digite o nome dos diretores."/> <br/><p>
			<p><label> Data da peça: </label>
			<input type ="date" name="data_peca" placeholder="Digite a data da apresentação"/> <br/></p>
			<p><label> Tema da peça: </label>
			<input type ="text" name="tema" placeholder="Digite o tema do ano da peça"/> <br/></p>
			<p><label> Resumo da peça : </label>
			<input type ="text" name="resumo" placeholder="Faça um pequeno resumo"/> <br/></p>
			<label for="foto">Imagem:</label>
    		<input type="file" name="foto" id="foto">
			

			<input type="submit" value ="Cadastrar" class="submit" />  
			<input type="reset" value ="Limpar" class="submit"/>  
			</div>
			<div class="voltar">
			<a href="inicio.php">
			<img src="images/arrow.png">
		</div>
		</form> 
	
	
	</body>

</html>
