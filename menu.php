
	
   <ul>
   </br>
			
			<li>
			
				<a href="listar_pecas.php"> PEÇAS </a>
				
			</li>
			<li>
				<a href="listar_cursos.php"> CURSOS </a>
			</li>
			<li>
				<a href="listar_eventos.php"> EVENTOS </a>
			</li>
			
			<li>
			
				<a href="pesquisar.php"> Pesquisar pecas </a>
				
			</li>
	
			<?php 
			
			if (empty($_SESSION['email'])){ 
	
				echo "<li><a href='login.php'>Área Restrita </a></li>";

			}else  {
				echo "<li><a href='index.php'>Cadastro de Usuário</a></li>";
						
				
			} 
			?>
			
			
		</ul>
	

</nav>

