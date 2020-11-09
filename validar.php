<?php
                include 'conexao.php'; 

			$id = trim($_GET['id']);
			$senha = trim($_GET['senha']);
			print $id;
			$pdo = Conexao::conectar();
			$sql  = "SELECT * FROM adm";
  		    $listaUsuario = $pdo->query($sql);
			foreach($listaUsuario as $login){
				if($id == $login['usuario'] && $senha == $login['senha']){
					if($login['admin'] == 1){
						header("location:tela_adm.php");
					}else(
						header("location:usu_home.php")
					);
					}else{
                        ?>
                        <script>
                            alert("Usuário ou senha incorreto!!!")
                            location.href = "login.php"
                        </script>
                        <?php
					}
            }
	?>