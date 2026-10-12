<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Parte real e inteira
    </h1>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

    <label for="num">Digite um numero</label>
    <input type="number" step="0.01" name="num" id="num">
    <button type="submit">Enviar</button>

    </form>
    

    <?php

    $numero = (float)$_GET["num"] ?? 0;
    $numeroInteiro = (int) $numero;
    $numeroReal = $numero - $numeroInteiro;

    
    echo "parte inteira: $numeroInteiro <br>";
    echo "parte real: $numeroReal";

    ?>
</body>
</html>