<?php

include("conexao.php");

$envio_nome = $_GET['nome'];
$envio_email = $_GET['email'];
$envio_cpf = $_GET['cpf'];
$envio_tel = $_GET['telefone'];

$query = "INSERT INTO users (nome, email, cpf, telefone) values ('$envio_nome','$envio_email','$envio_cpf','$envio_tel')";

mysqli_query($conn,$query);

if($query){
    echo "salvo com sucesso";
}
else{
    echo "Ocorreu um erro";
}

?>