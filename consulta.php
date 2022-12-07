<?php

include("conexao.php");

$select_data = "SELECT * FROM users";

$query = mysqli_query($conn,$select_data);

if(!$query){
    die("Error");
}
else{
    echo "select feito com sucesso";
}

while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
    echo "ID: {$row['id']} <br>".
    "Name: {$row['nome']} <br>".
    "Email: {$row['email']} <br>".
    "CPF: {$row['cpf']} <br>".
    "Telefone: {$row['telefone']} <br>".
    "----------------------------<br>";
}

?>