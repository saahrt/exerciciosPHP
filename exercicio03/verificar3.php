<?php
    $n1 = $_POST['numero1'];
    $n2 = $_POST['numero2'];
    $operador = $_POST['operador'];

    $resultado = null;

    switch ($operador){
        case 'soma':
            $resultado = $n1 + $n2;
            break;
        case 'subtrair':
            $resultado = $n1 - $n2;
            break;
        case 'dividir':
            if ($n2 != 0){
                $resultado = $n1 / $n2;
            }else{
                $resultado = "Erro: divisão por Zero";
            }
            break;
        case 'multiplicar':
            $resultado = $n1 * $n2;
            break;
        default:
            $resultado = "Operador Inválido";
    }
    echo "Resultado da Operação: $resultado"
?>