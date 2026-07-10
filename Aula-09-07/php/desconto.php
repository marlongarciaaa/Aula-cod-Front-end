<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>desconto</title>
</head>
<body>
    <?php
  //Declaração da função com parâmetros  
    function calcularDesconto($valortotal, $porcentagem) {
        $desconto = $valortotal * ($porcentagem / 100);
        return $valortotal - $desconto;
    }
    //chamda a atribuição do retorno da função
    echo "<br><br>Calcular 10% de desconto de 250 <br>";
    $valorfinal = calcularDesconto(250.00, 10);
    echo "<b>valor com desconto: R$ $valorfinal </b>";
    //resposta 225
    ?>
</body>
</html>