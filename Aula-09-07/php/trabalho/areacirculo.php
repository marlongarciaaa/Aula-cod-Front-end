<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <title>GeoCalc - Área do Circulo</title>
</head>
<body>

 <h2> Cálculo da Área do Circulo</h2>
 <p><strong>Descrição:</strong>  O valor de Pi multiplicado pelo quadrado do raio. </p>
 <p><strong>Fórmula:</strong> A = π × r²</p>
 <form action="" method="POST">
 <label for="raio">Digite a medida do raio (cm):</label>
 <input type="number" step="1" name="raio" id="raio" required>
 <button type="submit">Calcular</button>
 </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $raio = $_POST['raio'];
 if ($raio > 0) {
 $area = pi() * pow($raio, 2);
 echo "<hr>";
 echo "<h3> Resultado:</h3>";
 echo "Para um ciruculo com o raio de <strong>{$raio} cm</strong>:<br>";
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
