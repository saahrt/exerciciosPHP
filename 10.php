<!-- 9. Inverter uma String*  
   Crie uma função que receba uma palavra e retorne essa palavra ao contrário. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function inverterString($str) {
        return strrev($str); // Usa a função nativa strrev() do PHP
    }

    $palavra = "exemplo";
    $palavraInvertida = inverterString($palavra);

    echo "Palavra original: " . $palavra . "<br>";
    echo "Palavra invertida: " . $palavraInvertida;
    ?>
</body>
</html>