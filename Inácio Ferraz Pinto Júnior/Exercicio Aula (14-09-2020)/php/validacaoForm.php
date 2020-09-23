<?php
session_start();

if(!empty($_POST['nome']) && !empty($_POST['sobrenome']) && !empty($_POST['rua']) && !empty($_POST['bairro']) && 
!empty($_POST['cidade']) && !empty($_POST['email']) && !empty($_POST['telefone'])){
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['sobrenome'] = $_POST['sobrenome'];
    $_SESSION['rua'] = $_POST['rua'];
    $_SESSION['bairro'] = $_POST['bairro'];
    $_SESSION['cidade'] = $_POST['cidade'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['telefone'] = $_POST['telefone'];
    $_SESSION['sexo'] = $_POST['sexo'];
    $_SESSION['estado'] = $_POST['estado'];
    header('Location: ./home.php');
    exit();
}else{
    header('Location: ../index.php');
    exit();
}


?>

