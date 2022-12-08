<?php
include("conexao.php");

$valida_cpf = $_GET['cpf'];

$select_users = "SELECT * FROM users WHERE cpf IN ($valida_cpf)";

$query = mysqli_query($conn, $select_users);

$row = mysqli_fetch_array($query, MYSQLI_ASSOC);

if(!$row){
    echo "<br>";
    echo "Erro: CPF não encontrado";

}else{
    echo "<br>--------------------------<br>";
    print_r(json_encode($row));
}

?>