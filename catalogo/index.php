<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
</head>
<body>
    <h1>Produtos</h1>
    <h2>Escolha um de nossos produtos:</h2>
    <form action="processateclado.php" method="post">
    
    <label for="catalog">Nome do produto: </label>
    
    <select name="catalog" id="catalog">
        <option value="m">Monitor</option>
        <option value="t" selected>Teclado</option>
        </select>
        <br><input type="submit" value="Ver detalhes">
</body>
</html>