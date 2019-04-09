<?php
include_once 'db_connect.php';
// sql 
$sql = "CREATE TABLE $tabela (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nome VARCHAR(255) NOT NULL,
sobrenome VARCHAR(255) NOT NULL,
email VARCHAR(255),
idade INT (3)
)";
if (mysqli_query($conexao, $sql)) {
   echo "A tabela clientes foi criada com sucesso!";
} else {
   echo "ERRO ao criar a tabela: " . mysqli_error($conexao);
}
mysqli_close($conexao);
?>