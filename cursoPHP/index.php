<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        function incrementeVariable(){
            // static permite conservar el valor
            static $contador=0;
            $contador++;
            echo $contador . "<br>";
        }
        incrementeVariable();
        incrementeVariable();
        incrementeVariable();
        incrementeVariable();
    ?>
</body>
</html>