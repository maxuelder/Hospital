<?php //edtCli.php
    include 'conexao.php'; 
    //recuperação de valores do formulário pelo método POST
     //veio por meio do hidden
    $id = trim($_POST['id']);
    
    $nome = trim($_POST['txtNome']); 
    print $nome; //demais text
    $descricao = trim($_POST['txtDescricao']);
    print $cpf;
    $quantidade = trim($_POST['txtQuantidade']); 
    print $cidade;
    $vencimento = trim($_POST['txtVencimento']);
    print $bairro;
    ;
    
    
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE remedio set nome=?, descricao=?, quantidade=?, vencimento=?WHERE id=?";
        $query = $pdo->prepare($sql); 
        $query->execute(array($nome, $descricao, $quantidade, $vencimento, $id));
        Conexao::desconectar(); 
    
    header("location:adm_pesquisa_remedio.php"); 

?>