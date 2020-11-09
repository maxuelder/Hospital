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
            <form action="insRemedio.php" method="post" id="adm_cadastro_remedio" name = "adm_cadastro_remedio" class="col s12">
              <div class="row">
                <div class="input-field col s12">
                    <input id="txtNome" type="text" class="validate" name = "txtNome" required minlength = "3>
                    <label for="nome">Nome</label>
                </div>
              </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="txtDescricao" type="text" class="validate" name = "txtDescricao" required minlength = "3>
                        <label for="descricao">Descrição </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input id="txtQuantidade" type="number" class="validate" name = "txtQuantidade">
                        <label for="descricao">Quantidade </label>
                    </div>
                    <div class="input-field col s2">
                        <input id="txtVencimento" type="date" class="validate" name = "txtVencimento">
                        <label for="vencimento">Vencimento</label>
                    </div>
                </div>
                  
              </div>
              </div>
              <button id="salvarRemedio" class="btn" type ="submit">Salvar</button>
                     
                </a>
                <a id="cancelarRemedio" class="btn"href="tela_adm.php">
                    Cancelar 
                </a>
            </form>
            
          </div>
    </div>
    <footer>
        

    </footer>
                
               
           
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="main.js"></script>
    
</body>
</html>

