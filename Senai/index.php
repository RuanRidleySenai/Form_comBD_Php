<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    
</head>
<body>
<?php
    include_once('connection.php');
        $result = mysqli_query($mysqli, "SELECT * FROM usuario");

    if ($result -> num_rows > 0){
        while($row = $result ->fetch_assoc()){
            echo"ID: " .$row["id_user"]." - Nome: " .$row["nome"]. " - Email: " .$row["login"] . "<br>";
            }
    } else {
        echo "0 resultados";
    };

    ?>
    <form action="insertuser.php" method="post">
        <label for="">Usuário</label>
        <input type="text" name="nome"> <br>
        <label for="">Login</label>
        <input type="text" name="login"><br>
        <label for="">Senha</label>
        <input type="password" name="senha"><br>
        <input type="submit" name="Cadastrar">
    </form>
    
</body>
</html>