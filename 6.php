<!-- 7 Cálculo de Tempo em Dias*  
   Crie uma função que receba a quantidade de dias e converta para anos, meses e dias. Por exemplo,
    400 dias devem ser convertidos para 1 ano, 1 mês e 5 dias (considerando 1 mês = 30 dias). -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Dias para Anos, Meses e Dias</title>
</head>
<body>
    <h1>Conversão de Dias para Anos, Meses e Dias</h1>

    <!-- quantidade de dias -->
    <form method="post" action="">
        <label for="dias">Digite a quantidade de dias:</label>
        <input type="number" id="dias" name="dias" required>
        <input type="submit" value="Converter">
    </form>

    <?php
    // converte dias em anos, meses e dias
    function converterDias($dias) {
        // quantidade de dias por ano e por mês
        $diasPorAno = 365;
        $diasPorMes = 30;

        $anos = floor($dias / $diasPorAno);
        $diasRestantes = $dias % $diasPorAno;

        $meses = floor($diasRestantes / $diasPorMes);
        $diasRestantes = $diasRestantes % $diasPorMes;

        return "{$anos} ano(s), {$meses} mês(es) e {$diasRestantes} dia(s)";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dias = $_POST['dias'];
        $resultado = converterDias($dias);
        echo "<h2>{$dias} dias correspondem a: {$resultado}</h2>";
    }
    ?>

</body>
</html>
