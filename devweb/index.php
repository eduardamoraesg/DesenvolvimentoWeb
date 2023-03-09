<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
</head>
<body>
    <h1>Página inicial</h1>
    <p>Preencha as informações abaixo:</p>
    <form action="processa.php" method="post">
    <label for="nome"></label>
    <input type="text" placeholder = "Digite seu nome" name="nome" id="nome"> <br>
    <input type="email" placeholder = "Digite seu email" name="email" id="email"> <br>
    <input type="submit" value="Enviar">
</body>
</html>