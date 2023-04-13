<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de login</title>
</head>
<body>
    <?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == "duda@gmail.com" && $senha == "1234") {
        echo "<br>Conectado.";
        ?>
        <h1>Bem-vindo(a) ao catálogo!</h1>
        <p>Você deseja obter informações sobre o Notebook ou Dekstop? <br>Clique na figura desejada.</p>
    
        <h2>Notebook</h2>
        <a href="notebook.php"><img src="https://i.dell.com/is/image/DellContent/content/dam/ss2/product-images/dell-client-products/notebooks/inspiron-notebooks/inspiron-15-3511/media-gallery/in3511nt_cnb_00055rf110_sl.psd?fmt=png-alpha&pscan=auto&scl=1&hei=402&wid=656&qlt=100,1&resMode=sharp2&size=656,402&chrss=full" alt="Notebook"></a>
        <br>
        <h2>Dekstop</h2>
        <a href="desktop.php"><img src="https://m.media-amazon.com/images/I/61m40b5Eg3L._AC_SX679_.jpg" alt="Dekstop"></a>
        <?php
    }
    else {
        echo "<br>Erro";
        ?>
        <a href="index.php">Voltar</a>
        <?php
    }
    ?>
    <!-- <form action="catalogo.php">
        <input type="submit" value="Continuar">
    </form> -->
</body>
</html>