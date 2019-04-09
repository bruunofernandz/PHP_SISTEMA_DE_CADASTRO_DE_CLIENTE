<?php
//Abrindo uma sessão
session_start();
require_once 'db_connect.php';
//verificando se há dados a serem cadastrados
if (isset($_POST['btn-cadastrar'])):
//pegando os dados e filtrando com escape
$nome = mysqli_escape_string($conexao, $_POST['nome']);
$sobrenome = mysqli_escape_string($conexao, $_POST['sobrenome']);
$email = mysqli_escape_string($conexao, $_POST['email']);
$idade = mysqli_escape_string($conexao, $_POST['idade']);
$sql = "INSERT INTO $tabela(nome, sobrenome, email, idade)
VALUES ('$nome', '$sobrenome', '$email', '$idade')"; 

if (mysqli_query($conexao, $sql)):
$_SESSION['mensagem'] = "Cadastrado com sucesso!";
header ('Location: ../index.php');
else:
$_SESSION['mensagem'] = "Erro ao cadastro!";
header ('Location: ../index.php');
endif;
endif;
?>