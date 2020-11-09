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
    
    
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE receita set cpf=?, nome=?, alergia=?, nomeRemedio=?, descricao=?, quantidade=?, data=?, vencimentoReceita=?, medico=? WHERE id=?";
        $query = $pdo->prepare($sql); 
        $query->execute(array($cpf, $nome, $alergia, $remedio, $descricao, $quantidade, $data, $vencimento, $medico, $id));
        Conexao::desconectar(); 
    
    header("location:adm_pesquisar_receita.php"); 

?>