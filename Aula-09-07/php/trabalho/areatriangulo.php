<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <title>GeoCalc - Área do triangulo</title>
 <link rel="stylesheet" href="edicao.css">
</head>
<body>

 <h2> Cálculo da Área do triangulo</h2>
 <p><strong>Descrição:</strong> Metade do produto da base pela altura.</p>
 <p><strong>Fórmula:</strong> A = b * h /2 </p>
 <form action="" method="POST">
 <label for="lado">Digite a medida do base (cm):</label>
 <input type="number" step="1" name="base" id="base" required>
 <label for="altura">digite a medida da altura (cm)</label>
 <input type="number" step="1" name="altura" id="altura" required>
 <button type="submit">Calcular</button>
 </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $base = $_POST['base'];
 $altura = $_POST['altura'];
 if ($base > 0 || $altura > 0) {
 $area = ($base * $altura /2);
 echo "<hr>";
 echo "<h3> Resultado:</h3>";
 echo "Para um triangulo com base de <strong>{$base} cm</strong>:<br>";
 echo "A área total é de <strong>" . number_format($area, 2, ',', '.') . "
cm²</strong>.";
 } else {
 echo "<p style='color: red;'>Por favor, insira um número maior que zero!
</p>";
 }
 }
 ?>

 <a href="../trabalho/arearetangulo.php">← Anterior</a>
 <a href="./calculadora.html">Menu</a>
<a href="../trabalho/areacirculo.php">Próxima →</a>

</body>
</html>