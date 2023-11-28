<?php 
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = password_hash(mysqli_real_escape_string($conn, $_POST["password"]), PASSWORD_DEFAULT);
    $plano = mysqli_real_escape_string($conn, $_POST["plano"]);  

    $sql = "INSERT INTO USUARIO (NOME, EMAIL, SENHA, PLANO) VALUES ('$nome', '$email', '$password', '$plano')";

    if (mysqli_query($conn, $sql)){
        echo "Dados inseridos com sucesso";
    } else{
        echo "Erro ao inserir dados: " . mysqli_error($conn);
    }
}
?>
