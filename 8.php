<!-- 6 Verificar número positivo, negativo ou zero
Crie um formulário que peça um número e verifique se ele é positivo, negativo ou zero. -->
<!DOCTYPE html>
<html>
<body>
    <form method="post">
    Número: <input type="number" name="numero"><br>
    <button type="submit">Verificar</button>
    </form>
    
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
        if ($numero > 0) {
        echo "$numero é positivo";
        } elseif ($numero < 0) {
        echo "$numero é negativo";
        } else {
        echo "$numero é zero";
        }
    }
?>
</body>
</html>