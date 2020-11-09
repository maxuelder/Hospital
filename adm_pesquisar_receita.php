<?php
    include 'conexao.php';
    $pdo = Conexao::conectar();
    $sql = 'Select * from remedio order by nome;';
    $listaUsuario = $pdo->query($sql);
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
                </select>
                <input type="submit" onclick ="pesquisa()"  >
                <script>
                    function pesquisa(){
                        var select = document.getElementById('selecionar');
                        
                        var value = select.options[select.selectedIndex].value;
                        switch (value){
                            case '1':
                                JavaScript:location.href='adm_pesquisa_receita1.php'
                                break;
                           
                            case '2':
                                JavaScript:location.href='adm_pesquisa_receita2.php?nome='+document.getElementById('txtPesquisa').value
                                break;
                        }
                       
                    }
                </script>
            </div>
            </div>
            
        </div>
        
    
    </div>
    <footer>
        

    </footer>
                
               
           
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="main.js"></script>
    
</body>
</html>

