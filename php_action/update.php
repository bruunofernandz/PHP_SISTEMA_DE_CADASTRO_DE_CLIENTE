<?php
//Abrindo uma sessão
session_start();
require_once 'db_connect.php';
//verificando se há dados a serem cadastrados
if (isset($_POST['btn-editar'])):
//pegando os dados e filtrando com escape
$id = mysqli_escape_string($conexao, $_POST['id']);
$nome = mysqli_escape_string($conexao, $_POST['nome']);
$sobrenome = mysqli_escape_string($conexao, $_POST['sobrenome']);
$email = mysqli_escape_string($conexao, $_POST['email']);
$idade = mysqli_escape_string($conexao, $_POST['idade']);
$sql = "UPDATE $tabela  SET nome= '$nome', sobrenome = '$sobrenome', email= '$email', idade = '$idade' WHERE id='$id' ";


if (mysqli_query($conexao, $sql)):
$_SESSION['mensagem'] = "Dados atualizado com sucesso com sucesso!";
header ('Location: ../index.php');
else:
$_SESSION['mensagem'] = "Erro ao atualizar!";
header ('Location: ../index.php');
endif;
endif;
?>