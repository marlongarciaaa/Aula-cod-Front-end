<!DOCTYPE html>
<html lang="en">
<head>
    <title>calculo</title>
</head>
<body>
    <?php
    function calcula($num1,$num2,$op){
    if ($op == "soma"){
        return $num1 + $num2;
    }
    elseif($op == "sub"){
        return $num1 - $num2;
    }
    elseif($op == "mut"){
        return $num1 * $num2;
    }
    elseif($op == "div"){
        return $num1 / $num2;  
    }
    
    };
    $calc = calcula(12,10,"soma");
    echo 'Resultado igual a ' . $calc; 
    ?>        
    

</body>
</html>