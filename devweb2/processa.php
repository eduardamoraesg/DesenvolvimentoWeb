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
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    echo "Nome: " . $nome;
    echo "Email: " . $email;
    echo "Senha: " . $senha;

    if ($email == "duda@gmail.com" && $senha == "1234") {
        echo "Conectado";
    }
    if ($email!="duda@gmail.com") {
        echo "Email inválido";
    }
    if ($senha!=1234) {
        echo "Senha inválida";
    }
    ?>
</body>
</html>