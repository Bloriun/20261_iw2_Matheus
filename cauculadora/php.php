<?php
$n1 = isset($_POST['numero1']) ? floatval($_POST['numero1']) : 0;
$n2 = isset($_POST['numero2']) ? floatval($_POST['numero2']) : 0;
$op = isset($_POST['operacao']) ? $_POST['operacao'] : '';

$resultado = 0;

if ($op == 'somar') {
    $resultado = $n1 + $n2;
} else if ($op == 'subtrair') {
    $resultado = $n1 - $n2;
} else if ($op == 'multiplicar') {
    $resultado = $n1 * $n2;
} else if ($op == 'dividir') {
    if ($n2 != 0) {
        $resultado = $n1 / $n2;
    } else {
        echo "Erro: Divisão por zero";
        exit;
    }
}

echo $resultado;
?>