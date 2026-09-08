<?php
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';

echo "Dados gravados com sucesso! Nome: " . $nome . " | Telefone: " . $telefone . " | Email: " . $email;
?>