<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>
</head>

<body>
    <h1>Página inicial</h1>
    <p>Preencha as informações abaixo:</p>
    <form action="validacaoLogin.php" method="POST">
        <label for="e-mail">E-mail:</label>
        <input type="e-mail" placeholder="Digite seu e-mail" name="email" id="email"> <br>
        <label for="senha">Senha:</label>
        <input type="password" placeholder="Digite sua senha" name="senha" id="senha"> <br> <br>
        <input type="submit" value="LOGAR">
    </form>
</body>

</html>