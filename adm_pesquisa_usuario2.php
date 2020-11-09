<?php
    include 'conexao.php';

    $cpf = trim($_GET['cpf']);
    $pdo = Conexao::conectar();
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql  = "SELECT * FROM usuario WHERE  (cpf like '%$cpf%' or cpf = $cpf)";
    $query = $pdo->prepare($sql);
    $query -> execute(array($cpf));
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    $cpf2 = $dados['cpf'];
    $id = $dados['id'];
    $nome = $dados['nome'];
    $nascimento = $dados['nascimento'];
    $email = $dados['email'];
    $alergia = $dados['alergia'];
    
    Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Materialize - Navbar</title>
    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    
</head>
<body>
    <header>

    <style>
            #imag{
                position:relative;
                left:-700px;
           }
        </style>
        <div id="logo">
            <img id = "imag" src = rodape.png width="1000px" >
        </div>
        <div class="navbar-fixed" id="corpo">
            
            <a id="Home" class="btn"href="tela_adm.php">
                Home 
            </a>

            <a id="admCadastro" class="dropdown-trigger btn" data-target="dropdown-cadastro" href="#">
                Cadastro
            </a>
            <a id="admPesquisa" class="dropdown-trigger btn" data-target="dropdown-pesquisa" href="#">
                Pesquisa 
            </a>

            <a id="admReceita" class="dropdown-trigger btn" data-target="dropdown-receita" href="#">
                Receita 
            </a>
            
            <a id="Sair" class="btn"href="index.html">
                Sair 
            </a>

            <ul id="dropdown-cadastro" class="dropdown-content">
                <li><a href="adm_cadastro_usuario.php">Usuário</a></li>
                <li class="divider"></li>
                <li><a href="adm_cadastro_remedio.php">Remédio</a></li>
            </ul>

            <ul id="dropdown-pesquisa" class="dropdown-content">
                <li><a href="adm_pesquisa_usuario.php">Usuário</a></li>
                <li class="divider"></li>
                <li><a href="adm_pesquisa_remedio.php">Remédio</a></li>
            </ul>

            <ul id="dropdown-receita" class="dropdown-content">
                <li><a href="adm_criar_receita.php">Criar</a></li>
                <li class="divider"></li>
                <li><a href="adm_pesquisar_receita.php">Pesquisar</a></li>
            </ul>
        </div>
            
        
    </header>
    
    <div id="admInicial">
    <div class="row">
            <table>
                <th>
                <div class="input-field col s7" id="div"></div>
            <div class="input-field col s7" id="div"></div>
            
            <div class="input-field col s5" id="pesquisa">
                
                <input type="search" id = "txtPesquisa" class="col s8">
                <label for="txtPesquisa" id="txtPesquisa">Pesquisa</label>
                <div class="input-field col s4"id="selecionar1">
                <select class="browser-default" id="selecionar">
                    <option value="" disabled selected>Filtro</option>
                    <option value="1">Todos</option>
                    <option value="2">Cpf</option>
                    <option value="3">Nome</option>
                </select>
                <input type="submit" onclick ="pesquisa()"  >
                <script>
                    function pesquisa(){
                        var select = document.getElementById('selecionar');
                        
                        var value = select.options[select.selectedIndex].value;
                        switch (value){
                            case '1':
                                JavaScript:location.href='adm_pesquisa_usuario_1.php'
                                break;
                            case '2':
                                JavaScript:location.href='adm_pesquisa_usuario2.php?cpf='+document.getElementById('txtPesquisa').value
                                break;
                            case '3':
                                JavaScript:location.href='adm_pesquisa_usuario3.php?nome='+document.getElementById('txtPesquisa').value
                                break;
                        }
                       
                    }
                </script>
            </div>
            </div>
            
                </th>
            </table>
        </div>
        <table  class="table">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Nascimento</th>
            <th>email</th>
            <th>Alergia</th>
            <th>Opções</th>
            <th></th>
        
        </tr>
        <tr  class="black-text  accent-4"  >
        <td><?php echo $id; ?></td>
        <td><?php echo $nome; ?></td>
        <td><?php echo $cpf2; ?></td>
        <td><?php echo $nascimento; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $alergia; ?></td>
        <td><a href="adm_editar_usuario.php?cpf=<?php echo $cpf2; ?>" >Alterar</a></td>
        <td><a href = '#' onclick = "delet(<?php echo $id;?>)" >Remover</a></td>
        </tr>
        <?php
           foreach ($query as $usuario) {
            
        ?> 
        
        <tr  class="black-text  accent-4"  >
            <td><?php echo $usuario['id']; ?></td>
            <td><?php echo $usuario['nome']; ?></td>
            <td><?php echo $usuario['cpf']; ?></td>
            <td><?php echo $usuario['nascimento']; ?></td>
            <td><?php echo $usuario['email']; ?></td>
            <td><?php echo $usuario['alergia']; ?></td>
            <td><a href="adm_editar_usuario.php?cpf=<?php echo $usuario['cpf']; ?>" >Alterar</a></td>
            <td><a href = '#' onclick = "delet(<?php echo $usuario['id'];?> )" >Remover</a></td>
        </tr>

        <?php
           } 
        ?>
        <script>
            function delet(a){
                var oi = confirm("Você tem certeza que deseja excluir?")
                if(oi == true){
                    
                    location.href='adm_remove_usuario.php?id='+a
                }else{
                    location.href='adm_pesquisa_usuario_2.php?cpf'+$cpf
                }
                }
        </script>
    </thead>
    </table>
    </div>
    <footer>
        

    </footer>
                
               
           
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="main.js"></script>
    
</body>
</html>