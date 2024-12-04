<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert user</title>
</head>
<body>
<?php
$rnome = $_POST['nome'];
$rlogin = $_POST['login'];
$rsenha = $_POST['senha'];

include_once('connection.php');
$sql = "INSERT INTO usuarios (nome, login, senha, status) VALUES ('$rnome','$rlogin', '$rsenha')";
if ($mysqli->query($sql) === TRUE){
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " .$sql . "<br>" .$conn->error;
}
?>
<a href="index.php">Voltar para pagina principal</a>    
</body>
</html>
