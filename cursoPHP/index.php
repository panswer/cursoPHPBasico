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
        /* 
            define(nombre,valor,boolean)
            nombre=>Nombre de la constante
            valor=>Valor de la constante
            boolean=>Indica si es case sensitive la constante
            ejemplo:

            define("MIconstante",123,true);
            echo miConstante;
        */
        define("AUTOR","Ricardo");
        define('constante',123,true);
        /* 
            Las constantes no se reconocen dentro de un string
            echo "El autor es AUTOR"
        */
        echo AUTOR . '<br>';
        echo Constante;
    ?>
</body>
</html>