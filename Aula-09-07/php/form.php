<?php
session_start();

if (!isset($_SESSION["alunos"])) {
    $_SESSION["alunos"] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome      =trim($_POST["nome"]);
    $idade     =$_POST["idade"];
    $email     =trim($_POST["email"]);
    $curso     =$_POST["curso"];
    $turma     =$_POST["turma"];
    $telefone  = trim($_POST["telefone"]);

    $aluno = [
        "nome" => $nome,
        "idade" => $idade,
        "email" => $email,
        "curso" => $curso,
        "turma" => $turma,
        "telefone" => $telefone
    ];
    $_SESSION["alunos"][] = $aluno;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>trabalho</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
   
<h1>Sistema de Cadastro</h1>

<form action=""method="post">

    <label for="nome">nome</label>
    <input type="text" id="nome" name="nome">
    <br>
    <label for="idade" >idade</label>
    <input type="number" id="idade" name="idade">
    <br>
    <label for="E-mail">email</label>
    <input type="text" id="email" name="email">
    <br>
    <label for="turma">turma</label>
    <input type="text" id="turma" name="turma">
    <br>
    <label for="telefone">telefone</label>
    <input type="text" id="telefone" name="telefone">
    <br> 
    <label for="curso">curso</label>
    <select name="curso" id="curso" name="curso">
        <option value="informatica">informatica basica</option>
        <option value="tecnologia">tecnologia basica</option>
        <option value="analista">analista de sistemas basico</option>
    </select>
    <input type="submit" value="enviar">

  
</form>

<h2>Alunos Cadastrados</h2>
<?php

if (count($_SESSION["alunos"]) > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Nome</th>";
    echo "<th>Idade</th>";
    echo "<th>Email</th>";
    echo "<th>Curso</th>";
    echo "<th>Turma</th>";
    echo "<th>Telefone</th>";
    echo "</tr>";

 foreach ($_SESSION["alunos"] as $aluno) {
        echo "<tr>";
        echo "<td>".$aluno["nome"]."</td>";
        echo "<td>".$aluno["idade"]."</td>";
        echo "<td>".$aluno["email"]."</td>";
        echo "<td>".$aluno["curso"]."</td>";
        echo "<td>".$aluno["turma"]."</td>";
       	echo "<td>".$aluno["telefone"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
else{
    echo "<p>Nenhum aluno cadastrado.</p>";
}

?>
</div>

</body>
</html>