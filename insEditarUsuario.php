<?php //edtCli.php
    include 'conexao.php'; 
    //recuperação de valores do formulário pelo método POST
     //veio por meio do hidden
    $id = trim($_POST['id']);
    
    $nome = trim($_POST['txtNome']); 
    print $nome; //demais text
    $cpf = trim($_POST['txtCpf']);
    print $cpf;
    $cidade = trim($_POST['txtCidade']); 
    print $cidade;
    $bairro = trim($_POST['txtBairro']);
    print $bairro;
    $rua = trim($_POST['txtRua']);
    print $rua;
    $numero = trim($_POST['txtNumero']);
    print $numero;
    $nascimento = trim($_POST['txtData']);
    print $nascimento;
    $email = trim($_POST['txtEmail']);
    print $email;
    $senha = trim($_POST['txtSenha']);
    print $senha;
    $alergia = trim($_POST['txtAlergia']);
    print $alergia;
    
    
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE usuario set nome=?, cpf=?, cidade=?, bairro=?, rua=?, numero=?, nascimento=?, email=?, senha=?, alergia=? WHERE id=?";
        $query = $pdo->prepare($sql); 
        $query->execute(array($nome, $cpf, $cidade, $bairro, $rua, $numero, $nascimento, $email, $senha, $alergia, $id));
        Conexao::desconectar(); 
    
    header("location:adm_pesquisa_usuario.php"); 

?>