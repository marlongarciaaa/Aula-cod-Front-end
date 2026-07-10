<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <title>GeoCalc - volume do esfera</title>
 <link rel="stylesheet" href="edicao.css">
</head>
<body>

 <h2> Cálculo do volume do esfera</h2>
 <p><strong>Descrição:</strong>  Quatro terços de Pi multiplicado pelo raio ao cubo.  </p>
 <p><strong>Fórmula:</strong>V = (4/3) × π × r³ </p>
 <form action="" method="POST">
 <label for="raio">Digite a medida do Raio da base(cm):</label>
 <input type="number" step="1" name="raio" id="raio" required>

 <button type="submit">Calcular</button>
 </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $raio = $_POST['raio'];
 if ($raio > 0) {
 $volume = (4/3) * pi() * ($raio * $raio * $raio);
 echo "<hr>";
 echo "<h3> Resultado:</h3>";
 echo "Para uma esfera com raio de <strong>{$raio} cm</strong>:<br>";
 echo "O volume total é de <strong>" . number_format($volume, 2, ',', '.') . "
cm²</strong>.";
 } else {
 echo "<p style='color: red;'>Por favor, insira um número maior que zero!
</p>";
 }
 }
 ?>
 <a href="../trabalho/volumeCone.php">← Anterior</a>
 <a href="./calculadora.html">Menu</a>

</body>
</html>
