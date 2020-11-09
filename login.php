

<?php
	include 'conexao.php';
    $pdo = Conexao::conectar();
    $sql = 'Select * from adm;';
    $listaUsuario = $pdo->query($sql);
?>



<!DOCTYPE html>
<html>
    
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="estilo_login.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="data:image/png;base64,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" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="usuario" class="form-control input_user" value="" placeholder="username" id = "usuario">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="" class="form-control input_pass" value="" placeholder="password" id = "senha">
						</div>
						
							<div class="d-flex justify-content-center mt-3 login_container" link rel="stylesheet" href="#">
				 		<button type="button" name="button" class="btn login_btn" onclick = "validar()" >Login </button>
						</div>
					</form>
				</div>
		
			</div>
		</div>
	</div>
	
	<script>
		function validar(){
		   
			a = document.getElementById("usuario").value
			b = document.getElementById("senha").value
			location.href = "validar.php?id="+a + '&senha='+b
			
		}
	</script>
	
	
</body>
</html>
