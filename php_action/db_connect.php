<?php
//conexão com o banco
$servidor = "localhost";
$usuario_banco ="fateca94_alunos";
$senha = "fatec@araras";
$banco_dados= "fateca94_alunos";
$tabela= "bruno_clientes";
//abrindo a conexão
$conexao = mysqli_connect($servidor, $usuario_banco, $senha, $banco_dados);

if (mysqli_connect_error()):
   echo "Erro na conexão:" . mysqli_connect_error();
endif;