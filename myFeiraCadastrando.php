<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "myFeira";

// Criando a conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Checando a conexão com o banco de dados
if (!$conn) {
    die("A conexão com o BD falhou:" . mysqli_connect_error());
}

$sql = "INSERT INTO feirah (nome, quantidade, dataValidade, valor)
VALUES ('Acerola', 10, 5/10/2020, 1.65)";


if (mysqli_query($conn, $sql)) {
    echo "Cadastro realizado com sucesso";
} else {
    echo "Erro ao executar o código: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
    </body>
</html>