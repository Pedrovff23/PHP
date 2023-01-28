<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "aula";

//Criando conexão
$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error)
    die("conexão falhou: " . $conexao->connect_error);

    //Criando o Banco de dados
    // $sql = "CREATE DATABASE aula";

    // if($conexao->query($sql)===TRUE){
    //     echo "Banco de dados criado com sucesso";
    // }
    // else{
    //     echo "Erro ao criar o banco de dados";
    //     $conexao->error; 
    // }    

    // $conexao->close();
