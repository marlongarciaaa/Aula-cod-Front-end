<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <title>GeoCalc - Área do Quadrado</title>
</head>
<body>

 <h2> Cálculo da Área do Quadrado</h2>
 <p><strong>Descrição:</strong> A área do quadrado é calculada multiplicando a
medida de um lado por ele mesmo.</p>
 <p><strong>Fórmula:</strong> A = Lado² (A = l²)</p>
 <form action="" method="POST">
 <label for="lado">Digite a medida do lado (cm):</label>
 <input type="number" step="1" name="lado" id="lado" required>
 <button type="submit">Calcular</button>
 </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $lado = $_POST['lado'];
 if ($lado > 0) {
 $area = pow($lado, 2);
 echo "<hr>";
 echo "<h3> Resultado:</h3>";
 echo "Para um quadrado com lado de <strong>{$lado} cm</strong>:<br>";
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
