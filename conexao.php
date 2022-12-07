<?php

$servername = "localhost";
$dbname = "users";
$username = "root";
$password = "";

$conn = new mysqli($servername,$username,$password,$dbname);

if(!$conn){
    die("conexão falhou | ".mysqli_connect_error());
}
else{
    echo "conexão realizada com sucesso";
}

?>