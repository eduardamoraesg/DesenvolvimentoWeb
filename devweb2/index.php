<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
    <h1>Página inicial</h1>
    <p>Preencha as informações abaixo:</p>
    <form action="processa.php" method="POST">
    <label for="nome">Nome:</label>
    <input type="text" placeholder = "Digite seu nome" name="nome" id="nome"> <br>
    <label for="e-mail">E-mail:</label>
    <input type="e-mail" placeholder = "Digite seu e-mail" name="email" id="e-mail"> <br>
    <label for="senha">Senha:</label>
    <input type="password" placeholder = "Digite sua senha" name="senha" id="senha"> <br>
    <input type="submit" value="Enviar">
</body>
</html>
