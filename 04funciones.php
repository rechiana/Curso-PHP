<?php
#Función sin parámetro
function saludo(){
  echo "Hola";
}
saludo();

#Funciones con parámetros
function despedida($adios){
  echo "<br>$adios<br>";
}
despedida("Chau");

#Funciones con retorno
function retorno($retorno){
  return $retorno;
}
echo retorno("retornar");






?>
