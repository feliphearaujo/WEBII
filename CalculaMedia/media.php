<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>media</title>
</head>
<body>
    <?php
        $soma = $_POST["txtNota1"] + $_POST["txtNota2"] + $_POST["txtNota3"];
        $media = $soma / 3;
        echo "A média das notas é: $media";
    ?>
</body>
</html>