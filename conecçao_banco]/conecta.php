<?php
include("db_config.php");

try {
    $conn = new PDO("mysql:host=$endereco;dbname=$banco;port=$porta", $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo = $conn;
    echo "conectado com sucesso";
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>
