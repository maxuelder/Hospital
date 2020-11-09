<?php //edtCli.php
    include 'conexao.php'; 
    //recuperação de valores do formulário pelo método POST
     //veio por meio do hidden
    
    $id = trim($_GET['id']);
    $msg = 0;
    $pdo = Conexao::conectar();
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql  = "SELECT * FROM receita WHERE  id=?";
    $query = $pdo->prepare($sql);
    $query -> execute(array($id));
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    $remedio = $dados['nomeRemedio'];
    $quantidade = $dados['quantidade'];
    $validar = 0;
    $idR = $remedio;
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql  = "SELECT * FROM remedio WHERE  (nome like '%$idR%')";
    $query = $pdo->prepare($sql);
    $query -> execute(array($idR));
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    $quantidadeRemedio = $dados['quantidade'];
    $quantidadeBD = $quantidadeRemedio - $quantidade;
    if ($quantidadeBD >= 0){
        $msg = 1;
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE remedio set quantidade = ? where nome = ?";
        $query = $pdo->prepare($sql);
        $query->execute(array($quantidadeBD, $remedio));
        $sql = "UPDATE receita set validar = ? where id = ?";
        $query = $pdo->prepare($sql);
        $query->execute(array($validar, $id));
        Conexao::desconectar();
    }
    
         

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
    <form action="adm_pesquisar_receita.php" method = "post" id = "frmRemCli" name = "frmRemCli" >
        <input type="hidden" name = "id" value="<?php echo $id;print $id;?>">
        <div id="divVoltar">
            <p><?php 
            if($msg == 1){
                print("Realizado baixa na receita com sucesso.");
            }else{
                print("Não possuimos remédios suficientes....");
            }?>
            </p>
            <button id="voltarBtn" class="btn" type="submit">
            Voltar
        </div>
        
    
        
    </button>
    </form>
    
    </div>
    <footer>
        

    </footer>
                
               
           
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="main.js"></script>
    
</body>
</html>

