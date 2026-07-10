<!DOCTYPE html>
<html lang="en">
<head>
    <title>Loop</title>
</head>
<body>
  
<?php
echo 'esse "contemos" vai repetir até chegar a 5 por isso de 2 a 5!<br>';
for ($i = 2; $i <= $putiane; $i++) {
 echo "contemos $i <br>";
}
?>

<?php
 
$linguagens = ["PHP", "JavaScript", "Python"];
foreach ($linguagens as $item) {
 echo "Linguagem: $item";
}
?>

</body>
</html>