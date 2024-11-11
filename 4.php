<!--  1. Escreva uma função que receba o valor de um produto e um percentual de desconto. A função 
  deve calcular o valor final após o desconto e retornar esse valor. -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Desconto Simples</title>
</head>
<body>
    <form method="POST" action="verifica4.php">
        <label>Valor</label>
        <br>
        <input type="number" name="valor"/>
        <label>Desconto</label>
        <input type="number" name="desconto"/>
        <br>
        <button type="submit">Verificar</button>
    </form>
    
<?php
    function calcularDesconto($valorProduto, $percentualDesconto) {
        $desconto = ($valorProduto * $percentualDesconto) / 100;
        $valorFinal = $valorProduto - $desconto;
        return $valorFinal;
    }
echo "Valor final após desconto: " . $valorFinal . "<br>";
?>
</body>
</html>