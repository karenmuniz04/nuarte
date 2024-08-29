<?php
	session_start();
	if (empty($_SESSION['email'])){
	header("Location: login.php");
	}
?> 
<html>
<head>
<title> Inicio </title>
<link rel="stylesheet" href="css/inicio.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- fontes style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/style.scss" rel="stylesheet" />
  <!-- responsividade style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="css/style-team.css" rel="stylesheet" />
  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
	
	<div class="container-login100"> 
	<div class="container">
	<h2> Eventos - Nuarte </h2>
	<div class="wrap-login100" style="background: #fff;">
		<div>
			<a href="cadastro_peca.php">
			<img src="./img/pecas.png" class="icons"></a>
			<p class="legendas"> Peças </p>
			<a href="cadastro_danca.php">
			<img src="./img/dancas.png" class="icons"></a>
			<p class="legendas">  Danças </p>
			
		</div>
		<div>
			<a href="listar_pecas_edit.php">
			<img src="./img/editar.png" class="icons"></a>
			<p class="legendas"> Editar</p>
			<a href="gerarPDF.php">
			<img src="./img/gerar_pdf.png" class="icons"></a>
			<p class="legendas"> Imprimir</p>

		</div>
		<div>
			<a href="deletar.php">
			<img src="./img/excluir.png" class="icons"></a>
			<p class="legendas"> Excluir</p>
			<a href="sair.php">
			<img src="./img/sair.png" class="icons"></a>
			<p class="legendas"> Sair</p>
		</div>
	</div>
	
	
</div>
	

	</div>


</body>

</html>