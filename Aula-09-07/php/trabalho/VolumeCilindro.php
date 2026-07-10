<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <title>GeoCalc - volume do Cilindro</title>
 <link rel="stylesheet" href="edicao.css">
</head>
<body>

 <h2> Cálculo da volume do Cilindro</h2>
 <p><strong>Descrição:</strong>  A área da base circular multiplicada pela altura do cilindro. 
 </p>
 <p><strong>Fórmula:</strong> V = π × r² × h </p>
 <form action="" method="POST">
 <label for="raio">Digite a medida do Raio da base(cm):</label>
 <input type="number" step="1" name="raio" id="raio" required>
 <label for="altura">Digite a medida da altura(cm):</label>
 <input type="number" step="1" name="altura" id="altura" required>

 <button type="submit">Calcular</button>
 </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $raio = $_POST['raio'];
 $altura = $_POST['altura'];
 if ($raio > 0 || $altura > 0) {
 $volume = pi() * ($raio * $raio * $altura);
 echo "<hr>";
 echo "<h3> Resultado:</h3>";
 echo "Para um cilindro com raio de <strong>{$raio} cm</strong>:<br>";
 echo "O volume total é de <strong>" . number_format($volume, 2, ',', '.') . "
cm²</strong>.";
 } else {
 echo "<p style='color: red;'>Por favor, insira um número maior que zero!
</p>";
 }
 }
 ?>
<a href="../trabalho/volumeparalelepipedo.php">← Anterior</a>
 <a href="./calculadora.html">Menu</a>
<a href="../trabalho/volumeCone.php">Próxima →</a>
</body>
</html>
