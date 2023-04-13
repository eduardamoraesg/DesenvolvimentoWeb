<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notebook</title>
</head>

<body>
    <form action="validacaoNote.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" placeholder="Digite seu nome" name="nome"> <br><br>
        <label for="cpu">CPU:</label>
        <select name="cpu" id="cpu">
            <option value="Intel Core i3-10100F">Intel Core i3-10100F</option>
            <option value="Intel Core i5-10400F">Intel Core i5-10400F</option>
            <option value="Intel Core i7-10700F">Intel Core i7-10700F</option>
            <option value="Intel Core i7 11ª Geração">Intel Core i7 11ª Geração</option>
        </select>
        <br><br>
        <label for="memoria">Memória:</label>
        <select name="memoria" id="memoria">
            <option value="2GB">2GB</option>
            <option value="4GB">4GB</option>
            <option value="8GB">8GB</option>
            <option value="16GB">16GB</option>
        </select>
        <br><br>
        <label for="hs">HD/SSD:</label>
        <select name="hs" id="hs">
            <option value="HD WD Purple - 1TB (R$529,00)">HD WD Purple - 1TB (R$529,00)</option>
            <option value="HD WD Blue - 500gb (R$102,00)">HD WD Blue - 500gb (R$102,00)</option>
            <option value="SSD Interno WD Green - 240GB (R$125,00)">SSD Interno WD Green - 240GB (R$125,00)</option>
            <option value="SSD Interno WD Red SA - 500GB (R$823,65)">SSD Interno WD Red SA - 500GB (R$823,65)</option>
        </select>
        <br><br>
        <label for="so">Sistema Operacional:</label>
        <select name="so" id="so">
            <option value="Windows 11">Windows 11</option>
            <option value="Windows 10">Windows 10</option>
        </select>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>