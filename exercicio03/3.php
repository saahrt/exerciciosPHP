<!-- calculadora simples -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
</head>
<body>
    <form method="POST" action"verificar3.php">
        <label>Numeros</label>
        <br>
        <input type="number" name="numero1"/>
        <br>
        <input type="number" name="numero2"/>
        <br>
        <label>Operador Matematico</label>
        <select type="operador">
            <option value="soma">+</option>
            <option value="subtrair">-</option>
            <option value="divisao">/</option>
            <option value="multiplicar">x</option>
        </select>
        <br><br>
        <button type="submit">Enviar</button>
        <br>
</body>
</html>