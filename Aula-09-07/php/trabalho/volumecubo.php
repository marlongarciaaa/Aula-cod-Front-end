<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <title>GeoCalc - volume do Quadrado</title>
</head>
<body>

 <h2> Cálculo da volume do Quadrado</h2>
 <p><strong>Descrição:</strong>  A aresta elevada ao cubo. </p>
 <p><strong>Fórmula:</strong> V = a³ </p>
 <form action="" method="POST">
 <label for="aresta">Digite a medida do aresta(cm):</label>
 <input type="number" step="1" name="aresta" id="aresta" required>
 <button type="submit">Calcular</button>
 </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $aresta = $_POST['aresta'];
 if ($aresta > 0) {
 $volume = pow($aresta, 3);
 echo "<hr>";
 echo "<h3> Resultado:</h3>";
 echo "Para um cubo com aresta de <strong>{$aresta} cm</strong>:<br>";
 echo "A área total é de <strong>" . number_format($volume, 2, ',', '.') . "
cm²</strong>.";
 } else {
 echo "<p style='color: red;'>Por favor, insira um número maior que zero!
</p>";
 }
 }
 ?>

</body>
</html>
