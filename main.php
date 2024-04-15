<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Exibir mensagem de erro e interromper a execução
    echo 'Acesso inválido! Utilize o método POST para enviar o formulário.';
    exit;
}
$nome = $_POST['name'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

echo "Nome: $nome<br>";
echo "Email: $email<br>";
echo "Mensagem: $mensagem";

