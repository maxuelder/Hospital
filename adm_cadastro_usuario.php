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
            
            <a id="Sair" class="btn"href="index.php">
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
            <form action="insUsuario.php" method="post" id="adm_cadastro_usuario" name = "adm_cadastro_usuario" class="col s12">
              <div class="row">
                <div class="input-field col s6">
                    <input id="nome" type="text" class="validate" id="txtNome" name = "txtNome" required maxlength="40" minlength="3">
                    <label for="nome">Nome Completo</label>
                </div>
                <div class="input-field col s6">
                  <input id="cpf" type="number" class="validate" id="txtCpf"name = "txtCpf" required min="10">
                  <label for="cpf">Cpf</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s3">
                    <input id="cidade" type="text" class="validate" id="txtCidade"name = "txtCidade" required minlength = "3">
                    <label for="cidade">Cidade</label>
                </div>
                <div class="input-field col s3">
                    <input id="bairro" type="text" class="validate" id="txtBairro"name = "txtBairro"required minlength = "3">
                    <label for="bairro">Bairro</label>
                </div>
                <div class="input-field col s3">
                    <input id="rua" type="text" class="validate" id="txtRua"name = "txtRua"required minlength = "3">
                    <label for="rua">Rua</label>
                </div>
                <div class="input-field col s3">
                    <input id="numero" type="text" class="validate" id="txtNumero"name = "txtNumero">
                    <label for="numero">Nº</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                    <input type="date" class="datepicker" id="datepicker" id="txtData"name = "txtData">
                    <label for="date">Nascimento</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <input id="email" type="email" class="validate" id="txtEmail"name = "txtEmail"required minlength = "3">
                  <label for="email">Email</label>
                  
                </div>
                <div class="input-field col s6">
                    <input id="senha" type="password"  class="validate" id="txtSenha"name = "txtSenha"required min= "8">
                    <label for="senha">Senha</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                    <input id="alergia" type="text"  class="validate" id="txtAlergia"name = "txtAlergia"required minlength = "3">
                    <label for="alergia">Alergia</label>
                </div>
              </div>
                 <button id="salvar" class="btn" type ="submit">Salvar</button>
                     
                </a>
                <a id="cancelar" class="btn"href="tela_adm.php">
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

