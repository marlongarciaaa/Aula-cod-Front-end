<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <title>GeoCalc - Área do trapezio</title>
</head>
<body>

 <h2> Cálculo da Área do trapezio</h2>
 <p><strong>Descrição:</strong>  A soma das bases multiplicada pela altura, dividida por dois. </p>
 <p><strong>Fórmula:</strong> A = ((B + b) × h) / 2</p>
 <form action="" method="POST">
 <label for="M">Digite a medida do baseM (cm):</label>
 <input type="number" step="1" name="M" id="M" required>
 <label for="N">Digite a medida da baseN (cm):</label>
 <input type="number" step="1" name="N" id="N" required>
 <label for="altura">Digite a medida da altura (cm):</label>
 <input type="number" step="1" name="altura" id="altura" required>
 <button type="submit">Calcular</button>
 </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $M = $_POST['M'];
 $N = $_POST['N'];
 $altura = $_POST['altura'];
 if ($M > 0 || $N > 0 || $altura > 0) {
 $area = (($M + $N )* $altura) /2;
 echo "<hr>";
 echo "<h3> Resultado:</h3>";
 echo "Para um trapezio com uma base maior de <strong>{$M} cm</strong>:<br>";
 echo "Para um trapezio com uma base menor de <strong>{$N} cm</strong>:<br>";
 echo "Para um trapezio com uma altura de <strong>{$altura} cm</strong>:<br>";
 echo "A área total é de <strong>" . number_format($area, 2, ',', '.') . "
cm²</strong>.";
 } else {
 echo "<p style='color: red;'>Por favor, insira um número maior que zero!
</p>";
 }
 }
 ?>

</body>
</html>
