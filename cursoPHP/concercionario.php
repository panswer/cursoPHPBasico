<?php
    class Compra_Vehiculo{

        private $precio_base;

        static $ayuda=4500;

        function Compra_Vehiculo($gama){
            if($gama=="urbano"){
                $this->precio_base=10000;
            }else if($gama=="compacto"){
                $this->precio_base=20000;
            }else if($gama=="berlina"){
                $this->precio_base=30000;
            }
        }//Fin de constructor

        function Climatizador(){
            $this->precio_base+=2000;
        }//Fin Climatizador

        function Navegador_GPS(){
            $this->precio_base+=2500;
        }//Fin Navegador_GPS

        function Tapiceria_Cuero($color){
            if($color=="blanco"){
                $this->precio_base+=3000;
            }else if($color=="beige"){
                $this->precio_base+=3500;
            }else{
                $this->precio_base+=5000;
            }
        }//Fin Tapiceria_Cuero

        function Get_Precio(){
            /* 
                self:: ingresar a un metodo o parametro static
            */
            $total = $this->precio_base - self::$ayuda;
            return $total . "<br>";
        }//Fin Get_Precio

    }//Fin clase
?>