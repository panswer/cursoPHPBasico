<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .resaltar{
            color: #F00;
            font-weight:bold;
        }
    </style>
</head>
<body>
    <?php
        define("AUTOR","Ricardo",true);
        echo "La linea de esta instruccion es: " . __LINE__ . "<br>";
        echo "Estamos trabajando con este fichero: " . __FILE__;
    ?>
</body>
</html>