<?php
session_start();
include_once("conexao.php");
?>

<html>
<head>
<title> Login de usuários</title>
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style.scss">
</head>

<?php
$mensg1="";
$email="";
$senha="";
if((isset($_POST['email'])) && (isset($_POST['senha']))){
	//busca no banco de dados
	$resultado_select = "SELECT email, senha FROM administrador WHERE email='".$_POST['email']."' and senha = '".$_POST['senha']."'";
    $resultado_usuario = mysqli_query($conn, $resultado_select);
    $resultado = mysqli_fetch_assoc($resultado_usuario);	
	if(isset($resultado)){
	$_SESSION['email'] = $resultado['email'];   
	header("Location: inicio.php");
	}else{
	$mensg1 = "Usuário ou senha inválidos";
	}
	
}
?>

<body>

	<div class="limiter">
		<div class="container-login100" style="background: #9053c7;background: -webkit-linear-gradient(-135deg, #c850c0, #4158d0);background: -o-linear-gradient(-135deg, #c850c0, #4158d0);background: -moz-linear-gradient(-135deg, #c850c0, #4158d0);background: linear-gradient(-135deg, #c850c0, #4158d0);">
		<a class="navbar-brand" style="margin-top: -35%; margin-left: -25%; " href="home.html">
            <img src="images/logo.png" alt="" style="width: 380px;"/>
          </a>
			<div class="wrap-login100" style="background: #fff;">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate form" method="post">
					<span class="login100-form-title">
						Login Nuarte
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email" id="email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="senha" placeholder="Password" id=senha>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Entrar
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Esqueceu
						</span>
						<a class="txt2" href="#">
							Email/ Senha?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="contaadm.php">
							Crie sua conta
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>