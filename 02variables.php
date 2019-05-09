<?php

#Variable textual
$nombre = "Regina";
$apellido = "Latorre";
echo "Mi nombre es <br><br> $nombre $apellido <br>";

#Variable numérica
$edad = 18.09;
echo "Edad: $edad<br><br>";

#Variable Booleana
$binario = false;
echo "Variable booleana $binario<br><br>";

#Variable Arreglo
$color = array("rojo","amarillo");
echo "Esto es una variable arreglo $color[0]<br><br>";

#Variable Arreglo con Propiedades
$verdura = array("ver1"=>"lechuga", "ver2"=> "zanahoria");
echo "Esta es una variable arreglo: $verdura[ver1]<br><br>";

#Variable de Objeto
$objeto = (object)["Cuadrado"=>"Cubo", "Triangulo"=>"Piramide"];
echo "Esta es una variable de objeto $objeto->Cuadrado";
?>
