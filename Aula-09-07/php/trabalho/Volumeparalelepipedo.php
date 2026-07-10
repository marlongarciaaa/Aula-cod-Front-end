<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <title>GeoCalc - volume do Paralelepípedo</title>
 <link rel="stylesheet" href="edicao.css">
</head>
<body>

 <h2> Cálculo da volume do Paralelepípedo</h2>
 <p><strong>Descrição:</strong>  O produto das três dimensões do bloco. </p>
 <p><strong>Fórmula:</strong>V = c × l × h </p>
 <form action="" method="POST">
 <label for="comprimento">Digite a medida do comprimento(cm):</label>
 <input type="number" step="1" name="comprimento" id="comprimento" required>

 <label for="largura">Digite a medida da largura(cm):</label>
 <input type="number" step="1" name="largura" id="largura" required>

 <label for="altura">Digite a medida do altura(cm):</label>
 <input type="number" step="1" name="altura" id="altura" required>

 <button type="submit">Calcular</button>
 </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $comprimento = $_POST['comprimento'];
 $largura = $_POST['largura'];
 $altura = $_POST['altura'];

 if ($comprimento > 0 || largura > 0 || altura > 0) {
 $volume = ($comprimento * $largura * $altura);
 echo "<hr>";
 echo "<h3> Resultado:</h3>";
 echo "Para um cubo com comprimento de <strong>{$comprimento} cm</strong>:<br>";
 echo "O volume total é de <strong>" . number_format($volume, 2, ',', '.') . "
cm²</strong>.";
 } else {
 echo "<p style='color: red;'>Por favor, insira um número maior que zero!
</p>";
 }
 }
 ?>
<a href="../trabalho/volumecubo.php">← Anterior</a>
 <a href="./calculadora.html">Menu</a>
<a href="../trabalho/volumeCilindro.php">Próxima →</a>
</body>
</html>