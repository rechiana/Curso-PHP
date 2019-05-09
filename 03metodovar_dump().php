<?php

#Variable textual
$nombre = "Regina";
$apellido = "Latorre";
echo "Mi nombre es <br> $nombre $apellido <br>";
var_dump($nombre, $apellido);
echo "<br>";

#Variable numérica
$edad = 18.09;
echo "<br>Edad: $edad<br>";
var_dump($edad);
echo "<br>";

#Variable Booleana
$binario = false;
echo "<br>Variable booleana $binario<br>";
var_dump($binario);
echo "<br>";

#Variable Arreglo
$color = array("rojo","amarillo");
echo "<br>Esto es una variable arreglo $color[0]<br>";
var_dump($color);
echo "<br>";

#Variable Arreglo con Propiedades
$verdura = array("ver1"=>"lechuga", "ver2"=> "zanahoria");
echo "<br>Esta es una variable arreglo: $verdura[ver1]<br>";
var_dump($verdura);
echo "<br>";

#Variable de Objeto
$objeto = (object)["Cuadrado"=>"Cubo", "Triangulo"=>"Piramide"];
echo "<br>Esta es una variable de objeto $objeto->Cuadrado<br>";
var_dump($objeto);
echo "<br>";
?>
