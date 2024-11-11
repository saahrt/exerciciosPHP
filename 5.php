<!--4 Calcular Média de Notas*  
   Crie uma função que receba três notas e calcule a média. A função deve retornar se 
   o aluno foi “Aprovado” (média >= 6) ou “Reprovado” (média < 6). -->
<!DOCTYPE html>
<html>
   <body>
      <form method="post">
      Nota 1: <input type="number" step="0.1" name="nota1"><br>
      Nota 2: <input type="number" step="0.1" name="nota2"><br>
      Nota 3: <input type="number" step="0.1" name="nota3"><br>
      <button type="submit">Calcular Média</button>
      </form>

   <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nota1 = $_POST["nota1"];
      $nota2 = $_POST["nota2"];
      $nota3 = $_POST["nota3"];
      $media = ($nota1 + $nota2 + $nota3) / 3;
   echo "Média: $media<br>";
   echo ($media >= 6) ? "Aprovado" : "Reprovado";
   }
   ?>
   
   </body>
</html>