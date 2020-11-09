<?php //edtCli.php
    include 'conexao.php'; 
    //recuperação de valores do formulário pelo método POST
     //veio por meio do hidden
    $id = trim($_POST['id']);
    
    $cpf = trim($_POST['txtCpf']); 
    $nome = trim($_POST['txtNome']);
    $alergia = trim($_POST['txtAlergia']); 
    $remedio = trim($_POST['txtRemedio']);
    $descricao = trim($_POST['txtDescricao']);
    $quantidade = trim($_POST['txtQuantidade']);
    $data = trim($_POST['txtData']);
    $vencimento = trim($_POST['txtVencimento']);
    $medico = trim($_POST['txtMedico']);
    $validar =0 ;
    //criar no bd coluna validar, e arrumar pesquisa para aperecer só os true
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE receita set cpf=?, nome=?, alergia=?, nomeRemedio=?, descricao=?, quantidade=?, data=?, vencimentoReceita=?, medico=?, validar=? WHERE id=?";
        $query = $pdo->prepare($sql); 
        $query->execute(array($cpf, $nome, $alergia, $remedio, $descricao, $quantidade, $data, $vencimento, $medico,$validar, $id));
        Conexao::desconectar(); 

 
     
    //recuperação de valores do formulário pelo método POST
     //veio por meio do hidden
    $idR = $remedio;
    $pdo = Conexao::conectar();
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql  = "SELECT * FROM remedio WHERE  (nome like '%$idR%')";
    $query = $pdo->prepare($sql);
    $query -> execute(array($idR));
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    $quantidadeRemedio = $dados['quantidade'];
    $quantidadeBD = $quantidadeRemedio - $quantidade;
    if ($quantidadeBD >= 0){
        $pdo = Conexao::conectar();
        $pd[->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE remedio set quantidade = ? where nome = idR";
        $query = $pdo->prepare($sql);
        $query->execute(array($quantidadeBD, $idR));
        Conexao::desconectar();
    }else{

        print "Não temos quantidade suficiente de remédio no estoque."
        print "Altere a receita e tente novamente."
    }
    
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE remedio set quantidade=? WHERE id=?";
        $query = $pdo->prepare($sql); 
        $query->execute(array($nome, $descricao, $quantidade, $vencimento, $id));
        Conexao::desconectar(); 
    
        header("location:adm_pesquisar_receita.php"); 

?>