<?php
#Condiciones
$num1 = 5;
$num2 = 4;
#Si condicional
if ($num1 < $num2) {
  echo "Numero 1 es menor a numero 2<br>";
}
#Y también
else if ($num1 == $num2){
  echo "Numero 1 y Numero 2 son identicos";
}
#Sino
else{
  echo "Numero 1 es mayor que Numero 2";
}
#Swiches(Segun)
$dia= "Sabado";
switch ($dia){
  case 'Sabado':
  echo "<br>Estudiar";
  break;
  case 'Domingo':
  echo "<br>Dormir";
  break;
  case 'Viernes':
  echo "<br>salir de fiesta";
  break;
  default: echo "ir a la universidad";
}

?>
