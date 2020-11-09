<?php //inspro.php


    include 'conexao.php';

    //recuperar os valores oriundos  do formulário
    $nome = trim($_POST['txtNome']);
    $cpf = trim($_POST['txtCpf']);
    $cidade = trim($_POST['txtCidade']);
    $bairro = trim($_POST['txtBairro']);
    $rua = trim($_POST['txtRua']);
    $numero = trim($_POST['txtNumero']);
    $nascimento = trim($_POST['txtData']);
    $email = trim($_POST['txtEmail']);
    $senha = trim($_POST['txtSenha']);
    $alergia = trim($_POST['txtAlergia']);
    

    if(!empty($nome) && !empty($cpf) && !empty($cidade) && !empty($bairro) && !empty($rua) && !empty($numero) && !empty($nascimento) && !empty($email) && !empty($senha) && !empty($alergia)){
        $pdo = Conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO usuario (nome, cpf, cidade, bairro, rua, numero, nascimento, email, senha, alergia) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $query = $pdo -> prepare($sql);
        $query -> execute(array($nome, $cpf, $cidade, $bairro, $rua, $numero, $nascimento, $email, $senha, $alergia));
        Conexao::desconectar();
    }

    header("location:tela_adm.php");
?>
