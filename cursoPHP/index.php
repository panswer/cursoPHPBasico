<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
</head>
<body>
    <p>&nbsp;</p>
    <form action="" name="form1" method="post">
        <p>
            <label for="num1"></label>
            <input type="text" name="num1" id="num1">
            <label for="num2"></label>
            <input type="text" name="num2" id="num2">
            <label for="operation"></label>
            <select name="operation" id="operation">
                <option>Suma</option>
                <option>Resta</option>
                <option>Multiplicacion</option>
                <option>Division</option>
                <option>Modulo</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Enviar" id="button" name="button" onClick="prueba">
        </p>
    </form>
    <p>&nbsp;</p>
    <!-- Codigo PHP -->
    <?php
        /* isset captura informacion por el atributo name de las etiquetas */
        if(isset($_POST["button"])){
            $numero1=$_POST["num1"];
            $numero2=$_POST['num2'];
            /* El select toma primero el dato de value y si este no es atributo en la option busca su texto interno */
            $operacion=$_POST["operation"];
            if(!strcmp("Suma",$operacion)){
                echo "El resultado es: " . ($numero1+$numero2);
            }
            if(!strcmp("Resta",$operacion)){
                echo "El resultado es: " . ($numero1-$numero2);
            }
            if(!strcmp("Multiplicacion",$operacion)){
                echo "El resultado es: " . ($numero1*$numero2);
            }
            if(!strcmp("Division",$operacion)){
                echo "El resultado es: " . ($numero1/$numero2);
            }
            if(!strcmp("Modulo",$operacion)){
                echo "El resultado es: " . ($numero1%$numero2);
            }
        }
    ?>
</body>
</html>