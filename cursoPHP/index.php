<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <!-- Codigo PHP -->
    <?php
        // rand() debuelve un valor aleatorio
        // Sin argumento debuelve un numero aleatorio
        // $num1=rand();
        // Con argumento debuelve un numero aleatorio comprendido entre los valores indicados. Primer parametro el valor minimo, segundo parametro valor maximo.
        // $num1=rand(50,100);
        // echo "El numero es: $num1";
        // $num1=pow(5,3);
        /* 
            PHP cambia el tipo de dato dependiendo de el valor a guardar
        */
        $num1="5";

        $resultado=(int)($num1);
        
        echo "El resultado es: " . round($num1,2);
    ?>
</body>

</html>