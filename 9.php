<!-- 8 Calculando fatorial de um número
Crie um formulário que calcule o fatorial de um número dado. -->
<!DOCTYPE html>
<html>
<body>
    <form method="post">
    Número: <input type="number" name="numero"><br>
    <button type="submit">Calcular Fatorial</button>
    </form>
    
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $fatorial = 1;
        for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
        }
        echo "Fatorial de $numero é: $fatorial";
    }
?>
</body>
</html>