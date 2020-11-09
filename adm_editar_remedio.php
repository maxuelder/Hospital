<?php
    include 'conexao.php';

    $nome2 = trim($_GET['cpf']);
    $pdo = Conexao::conectar();
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql  = "SELECT * FROM remedio WHERE nome = ?";
    $query = $pdo->prepare($sql);
    $query -> execute(array($nome2));
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    $id = $dados['id'];
    $nome = $dados['nome'];
    $descricao = $dados['descricao'];
    $quantidade = $dados['quantidade'];
    $vencimento = $dados['vencimento'];

    
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
    <form action="insEditarRemedio.php" method="post" id="adm_cadastro_remedio" name = "adm_cadastro_remedio" class="col s12">
              <div class="row">
                <div class="input-field col s12">
                    <input id="txtNome" type="text" class="validate" name = "txtNome" value = "<?php echo $nome; ?>" onfocus =" this.value ='' ">
                    <label for="nome">Nome</label>
                </div>
              </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="txtDescricao" type="text" class="validate" name = "txtDescricao"value = "<?php echo $descricao; ?>" onfocus =" this.value ='' ">
                        <label for="descricao">Descrição </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input id="txtQuantidade" type="number" class="validate" name = "txtQuantidade"value = "<?php echo $quantidade; ?>" onfocus =" this.value ='' ">
                        <label for="descricao">Quantidade </label>
                    </div>
                    <div class="input-field col s2">
                        <input id="txtVencimento" type="date" class="validate" name = "txtVencimento"value = "<?php echo $vencimento; ?>" onfocus =" this.value ='' ">
                        <label for="vencimento">Vencimento</label>
                    </div>
                </div>
                <input type="hidden" name = "id" value ="<?php echo $id; ?>">
                  
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

