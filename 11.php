<!--2 Classificação de Idade*  
   Crie uma função que receba a idade de uma pessoa e classifique-a em categorias: “Criança” (0-12 anos), 
   “Adolescente” (13-17 anos), “Adulto” (18-64 anos) ou “Idoso” (65+ anos). -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificação de Idade</title>
</head>
<body>
    <h1>Classificação de Idade</h1>
    <form method="post" action="">
        <label for="idade">Digite sua idade:</label>
        <input type="number" id="idade" name="idade" required>
        <input type="submit" value="Classificar">
    </form>

    <?php
    function classificarIdade($idade) {
        if ($idade >= 0 && $idade <= 12) {
            return "Criança";
        } elseif ($idade >= 13 && $idade <= 17) {
            return "Adolescente";
        } elseif ($idade >= 18 && $idade <= 64) {
            return "Adulto";
        } elseif ($idade >= 65) {
            return "Idoso";
        } else {
            return "Idade inválida";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = $_POST['idade'];
        $categoria = classificarIdade($idade);//chama função
        echo "<h2>A pessoa de {$idade} anos é: {$categoria}</h2>";
    }
    ?>
</body>
</html>