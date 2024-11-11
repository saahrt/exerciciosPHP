<!-- 5 Contador de letras em uma string
Crie um formulário que receba uma frase e conte quantas letras ela possui (ignorando
espaços). -->
<!DOCTYPE html>
<html>
<body>
    <form method="post">
    Frase: <input type="text" name="frase"><br>
    <button type="submit">Contar Letras</button>
    </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $frase = $_POST["frase"];
    $contagem = strlen(str_replace(' ', '', $frase));
    echo "A frase possui $contagem letras.";
    }
?>
</body>
</html>