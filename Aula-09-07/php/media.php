<!DOCTYPE html>
<html lang="en">
<head>
    <title>media</title>
</head>
<body>
    
    <?php
    echo '<h1>Calculadora</h1>';
    $nota = 6.5;

    if ($nota >= 7.0) {
        echo "Status: Aprovado.";
    } elseif ($nota >= 5.0) {
     echo "Status : Recuperação.";
    } else {
      echo "Status: Reprovada.<br>"; 
    };
    ?>

</body>
</html>