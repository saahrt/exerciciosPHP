<!-- 10. Calculo de Juros Simples*  
    Escreva uma função que receba o capital inicial, a taxa de juros e o tempo (em meses). A função deve 
    calcular o valor final após aplicar os juros simples (fórmula: valor_final = capital_inicial + 
    (capital_inicial * taxa_juros * tempo)). --> 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Juros Simples</title>
</head>
<body>
    <h1>Calculadora de Juros Simples</h1>
    <form method="post" action="">
        <label for="capital_inicial">Capital Inicial (R$):</label>
        <input type="number" name="capital_inicial" id="capital_inicial" step="0.01" required><br><br>

        <label for="taxa_juros">Taxa de Juros (% ao mês):</label>
        <input type="number" name="taxa_juros" id="taxa_juros" step="0.01" required><br><br>

        <label for="tempo">Tempo (meses):</label>
        <input type="number" name="tempo" id="tempo" required><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    function calcularJurosSimples($capital_inicial, $taxa_juros, $tempo) {
        $valor_final = $capital_inicial + ($capital_inicial * $taxa_juros / 100 * $tempo);
        return $valor_final;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $capital_inicial = $_POST['capital_inicial'];
        $taxa_juros = $_POST['taxa_juros'];
        $tempo = $_POST['tempo'];

        $valor_final = calcularJurosSimples($capital_inicial, $taxa_juros, $tempo);
        echo "<h3>O valor final após {$tempo} meses será: R$ " . number_format($valor_final, 2, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>