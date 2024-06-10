<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = "fulano";

        switch ($nome) {
            case "fulano":
                echo "e ai fulano";
            break;

            case "sicrano":
                echo "e ai sicrano";
            break;

            case "beltrano":
                echo "e ai beltrano";
            break;

            default:
                echo "qual é o seu nome";
            break;
         }
         // resultado é: eae fulano
         ?>
</body>
</html>