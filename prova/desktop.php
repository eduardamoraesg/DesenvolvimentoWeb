<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação</title>
</head>

<body>
    <form action="validacaoDesk.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" placeholder="Digite seu nome" name="nome"> <br><br>
        <label for="monitor">Monitor</label>
        <select name="monitor" id="monitor">
            <option value="LG Widescreen - 23.8' (R$699,99)">LG Widescreen - 23.8" (R$699,99)</option>
            <option value="SAMSUNG Gamer Odyssey - 25' (R$1.952,00)">SAMSUNG Gamer Odyssey - 25' (R$1.952,00)</option>
            <option value="AOC Gamer Hero - 24' (R$1.187,00)">AOC Gamer Hero - 24' (R$1.187,00)</option>
            <option value="Philips - 18.5' (R$398,97)">Philips - 18.5' (R$398,97)</option>
        </select>
        <br><br>
        <label for="cpu">CPU:</label>
        <select name="cpu" id="cpu">
            <option value="Intel Core i3-10100F (R$499,99)">Intel Core i3-10100F (R$499,99)</option>
            <option value="cpIntel Core i5-10400F (R$675,90)u2">Intel Core i5-10400F (R$675,90)</option>
            <option value="Intel Core i7-10700F (R$1.148,35)">Intel Core i7-10700F (R$1.148,35)</option>
            <option value="Intel Core i7 11ª Geração (R$2.050,00)">Intel Core i7 11ª Geração (R$2.050,00)</option>
        </select>
        <br><br>
        <label for="memoria">Memória</label>
        <select name="memoria" id="memoria">
            <option value="2GB">2GB</option>
            <option value="4GB">4GB</option>
            <option value="8GB">8GB</option>
            <option value="16GB">16GB</option>
        </select>
        <br><br>
        <label for="hdssd">HD/SSD</label>
        <select name="hdssd" id="hdssd">
            <option value="HD WD Sata - 500GB (R$174,00)">HD WD Sata - 500GB (R$174,00)</option>
            <option value="HD WD Sata Pull - 500GB (R$111,99)">HD WD Sata Pull - 500GB (R$111,99) </option>
            <option value="SSD Somnambulist 2280 NVME - 256GB (R$119,99)">SSD Somnambulist 2280 NVME - 256GB (R$119,99)</option>
            <option value="SSD Somnambulist Sata III - 240GB (R$104,92)">SSD Somnambulist Sata III - 240GB (R$104,92)</option>
        </select>
        <br><br>
        <label for="so">Sistema Operacional</label>
        <select name="so" id="so">
            <option value="Windows 11">Windows 11</option>
            <option value="Windows 10">Windows 10</option>
            <br>
        </select>
        <br><br>
            <input type="submit" value="Enviar">
    </form>
</body>
</html>