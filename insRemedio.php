<?php //inspro.php


    include 'conexao.php';

    //recuperar os valores oriundos  do formulário
    $nome = trim($_POST['txtNome']);
    $descricao = trim($_POST['txtDescricao']);
    $quantidade = trim($_POST['txtQuantidade']);
    $vencimento = trim($_POST['txtVencimento']);
    
    

    if(!empty($nome) && !empty($descricao) && !empty($quantidade) && !empty($vencimento)){
        $pdo = Conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO remedio (nome, descricao, quantidade, vencimento) VALUES (?, ?, ?, ?)";
        $query = $pdo -> prepare($sql);
        $query -> execute(array($nome, $descricao, $quantidade, $vencimento));
        Conexao::desconectar();
    }

    header("location:tela_adm.php");
?>