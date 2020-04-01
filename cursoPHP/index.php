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
        /* echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";
        echo '<p class="resaltar">Esto es un ejemplo de frase</p>';
        echo "<p class=\"resaltar\">Esto es un ejemplo de frase</p>"; */
        /* 
            strcmp => compara strings con mayusculas o minusculas
            strcasecmp => compara string sin tomar encuenta si son mayusculas o minusculas
        */
        $variable1="casa";
        $variable2="CASA";

        // $resultado=strcmp($variable1,$variable2); //retorna 1 si no son iguales y 0 si son iguales
        $resultado=strcasecmp($variable1,$variable2);

        // echo "El resultado es $resultado";
        if($resultado){
            echo "No coinciden";
        }else{
            echo "Coinciden";
        }
    ?>
</body>
</html>