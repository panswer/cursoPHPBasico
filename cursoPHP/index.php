<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <!-- Codigo PHP -->
    <?php
        // $palabra="ricardo";
        // echo (strtolower($palabra));
        // echo (strtoupper($palabra));
        // function suma ($num1,$num2){
        //     $resultado=$num1+$num2;
        //     return $resultado;
        // }
        // suma(5,7);
        function Frase_Mayus($frase,$conversion=true){
            $resultado=strtolower($frase);
            if($conversion==true){
                $resultado=ucwords($frase);
            }else{
                $resultado=strtoupper($frase);
            }
            return $resultado;
        }
        echo (Frase_Mayus('Esto es una prueba',false));
    ?>
</body>

</html>