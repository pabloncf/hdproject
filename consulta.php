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
    echo "<br>-------------------------<br>";
    print_r(json_encode($row));
}

?>