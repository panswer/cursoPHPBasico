<style>
    .resultado{
        color: #F00;
        font-weight: bold;
        font-size: 32px;
    }
</style>
<?php
    /* isset captura informacion por el atributo name de las etiquetas */
    if(isset($_POST["button"])){
        $numero1=$_POST["num1"];
        $numero2=$_POST['num2'];
        /* El select toma primero el dato de value y si este no es atributo en la option busca su texto interno */
        $operacion=$_POST["operation"];
        $resultado;
        Calcular($operacion,$numero1,$numero2);
        // $texto = "<p class='resultado'>El resultado es: $resultado</p>";
        // echo $texto;
    }

    function Calcular ($calculo) {
        global $numero1;
        global $numero2;
        global $resultado;
        if(!strcmp("Suma",$calculo)){
            $resultado=$numero1+$numero2;
        }
        if(!strcmp("Resta",$calculo)){
            $resultado=$numero1-$numero2;
        }
        if(!strcmp("Multiplicacion",$calculo)){
            $resultado=$numero1*$numero2;
        }
        if(!strcmp("Division",$calculo)){
            $resultado=$numero1/$numero2;
        }
        if(!strcmp("Modulo",$calculo)){
            $resultado=$numero1%$numero2;
        }
        if(!strcmp("Incremento",$calculo)){
            $resultado=++$numero1;
        }
        if(!strcmp("Decremento",$calculo)){
            $resultado=--$numero1;
        }
    }
?>