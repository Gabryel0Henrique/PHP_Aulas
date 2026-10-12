<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dinheiroDigitado = $_GET["dinheiroDigitado"];
    $dolar = 5.22;
    $conversaoDolar = $dinheiroDigitado / $dolar;

    printf("Você quis converter R$ %0.2f em Dólar <br>", $dinheiroDigitado);
    printf("Deu U$ %0.2f", $conversaoDolar);
    ?>
</body>
</html>