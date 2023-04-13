<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação Desktop</title>
</head>
<body>
    <?php
    $nome = $_POST['nome'];
    $cpu = $_POST['cpu'];
    $memoria = $_POST['memoria'];
    $hdssd = $_POST['hdssd'];
    $so = $_POST['so'];

    echo "" . $nome . ",<br>";
    echo " " . $cpu . "<br>";
    echo " " . $memoria . "<br>";
    echo " " . $hdssd . "<br>";
    echo " " . $so;
    ?>
</body>
</html>