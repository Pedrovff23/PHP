<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require("bd.php");

    //CREATE TABLE
    //  $sql = "CREATE TABLE usuarios(nome VARCHAR(50), email VARCHAR(50))";
    //  $conexao->query($sql);

    //INSERT TABLE
    //  $sql = "INSERT INTO usuarios(nome, email) VALUES ('Pedro','pedro@gmail.com')";
    //  $conexao->query($sql);

    //SELECT TABLE
    // $sql = "SELECT * FROM usuarios";
    // $resultado = $conexao->query($sql);

    // if ($resultado->num_rows > 0) {
    //     while($linha = $resultado->fetch_assoc()){
    //         echo "Nome: ".$linha['nome']." Email:".$linha['email']."<br>";
    //     }
    // } else {
    //     echo "Sem Resgistro";
    // }

    //DELETE TABLE
    // $sql = "DELETE FROM usuarios WHERE nome = 'Pedro'";
    // $conexao->query($sql);

    //UPDATE TABLE
    // $sql = "UPDATE usuarios SET nome = 'Pedro Victor' WHERE nome = 'Pedro'";
    // $conexao->query($sql);
    ?>
</body>

</html>