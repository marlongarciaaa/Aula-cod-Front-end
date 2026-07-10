<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <title>GeoCalc - Área do Retangulo</title>
 <link rel="stylesheet" href="edicao.css">
</head>
<body>

 <h2> Cálculo da Área do Retangulo</h2>
 <p><strong>Descrição:</strong> Produto da base pela altura.</p>
 <p><strong>Fórmula:</strong> A = b * h</p>
 <form action="" method="POST">
 <label for="Base">Digite a medida do Base (cm):</label>
 <input type="number" step="1" name="Base" id="Base" required>
 <label for="altura">Digite a medida do altura (cm):</label>
 <input type="number" step="1" name="altura" id="altura" required>
 <button type="submit">Calcular</button>
 </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $Base = $_POST['Base'];
 $altura = $_POST['altura'];
 if ($Base > 0 || $altura > 0) {
 $area = ($Base * $altura);
 echo "<hr>";
 echo "<h3> Resultado:</h3>";
 echo "Para um retangulo com base de <strong>{$Base} cm</strong>:<br>";
 echo "A área total é de <strong>" . number_format($area, 2, ',', '.') . "
cm²</strong>.";
 } else {
 echo "<p style='color: red;'>Por favor, insira um número maior que zero!
</p>";
 }
 }
 ?>

 <a href="../trabalho/areaquadrado.php">← Anterior</a>
 <a href="./calculadora.html">Menu</a>
<a href="../trabalho/areatriangulo.php">Próxima →</a>

</body>
</html>