<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa</title>
</head>
<body>
    <h1>Status do processamento</h1>
    <p>RECEBIDO!</p>
    <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        echo "Nome: " . $nome . "\r\n";
        echo "Email: " . $email;
    ?>
</body>
</html>