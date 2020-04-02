<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <!-- Codigo PHP -->
    <?php
        // function Incremento (&$valor1){
        //     return ++$valor1;
        // }
        // $numero = 5;
        // echo (Incremento($numero) . '<br>');
        // echo ($numero);
        function Cambia_Mayus (&$param) {
            $param=strtolower($param);
            $param=ucwords($param);
            return $param;
        }
        $cadena = "hOlA mUnDo";
        echo Cambia_Mayus($cadena) . "<br>";
        echo $cadena;
    ?>
</body>

</html>