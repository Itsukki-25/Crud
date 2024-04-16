<?php
global $mysqli;
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Exibir mensagem de erro e interromper a execução
    echo 'Acesso inválido! Utilize o método POST para enviar o formulário.';
    exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

//echo "Nome: $nome<br>";
//echo "Email: $email<br>";
//echo "Mensagem: $mensagem";

if (isset($_POST['email']) || isset($_POST['nome'])) {
    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu email";
    }
    else if (strlen($_POST['name']) == 0) {
        echo "Preencha seu nome";
    }
    else {
        $sql_code = "INSERT INTO users(name,email,message) VALUES('$name','$email','$mensagem')";
        $sql_query = mysqli_query($mysqli, $sql_code) or die('Falha na execução do código SQL: ' . mysqli_error($mysqli));
    }
}