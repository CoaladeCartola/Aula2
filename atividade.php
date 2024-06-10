<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cont = 2000;

        do{
            $dobro = $cont + $cont;
            echo "O dobro de $cont é $dobro";
            $cont++;

        } while ($cont <= 19999);
        ?>
</body>
</html>