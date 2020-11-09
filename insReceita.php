<?php //inspro.php


    include 'conexao.php';

    //recuperar os valores oriundos  do formulário
    $nome = trim($_POST['txtNome']);
    $cpf = trim($_POST['txtCpf']);
    $alergia = trim($_POST['txtAlergia']);
    $nomeRemedio = trim($_POST['txtRemedio']);
    $descricao = trim($_POST['txtDescricao']);
    $quantidade = trim($_POST['txtQuantidade']);
    $datas = trim($_POST['txtData']);
    $vencimentoReceita = trim($_POST['txtVencimento']);
    $medico = trim($_POST['txtMedico']);
   
    

    if(!empty($nome) && !empty($cpf) && !empty($alergia) && !empty($nomeRemedio) && 
        !empty($descricao) && !empty($quantidade) && !empty($datas) && !empty($vencimentoReceita) && 
        !empty($medico)){
        $pdo = Conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO receita (nome, cpf, alergia, nomeRemedio, descricao, quantidade, 
        data, vencimentoReceita, medico) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $query = $pdo -> prepare($sql);
        $query -> execute(array($nome, $cpf, $alergia, $nomeRemedio, $descricao, $quantidade, $datas, $vencimentoReceita, $medico));
        Conexao::desconectar();
    }

    header("location:tela_adm.php");
?>
