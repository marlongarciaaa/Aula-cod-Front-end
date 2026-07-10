<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculadora</title>
</head>
<body>

    <?php
    echo '<h1>Calculadora</h1>';
    $nota = 8.5;

    if ($nota >= 7.0) {
        echo "Status: Aprovado.";
    } elseif ($nota >= 5.0) {
     echo "Status : Recuperação.";
    } else {
      echo "Status: Reprovada.<br>"; 
    
    };
    echo "<br>";
    $parOUimpar = 5;
     if($parOUimpar % 2 == 0) {
        echo "o Número $parOUimpar é Par.";
     }else{
        echo "o Número $parOUimpar é Impar.";
     };
    ?>
    
    <?php
    // sintaxe moderna com colchetes []
    $cursos = ["Informática", "Redes", "Design"];
    echo "<br>";
    echo $cursos[0]; // Imprime: Informática
    ?>
    
    <?php
    $aluno =[
        "nome" => "Beatriz",
        "idade" => 18,
        "UC" => 5
    ];
    echo $aluno["nome"]; //Imprime: Beatriz
    ?>
    
    

</body>
</html>