<?php

$dias_31 = array("1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31.");
$dias_29 = array("1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29.");
$dias_30 = array("1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30.");


$calendario['Enero']=$dias_31;
$calendario['Febrero']=$dias_29;
$calendario['Marzo']=$dias_31;
$calendario['Abril']=$dias_30;
$calendario['Mayo']=$dias_31;
$calendario['Junio']=$dias_30;
$calendario['Julio']=$dias_31;
$calendario['Agosto']=$dias_31;
$calendario['Septiembre']=$dias_30;
$calendario['Octubre']=$dias_31;
$calendario['Noviembre']=$dias_30;
$calendario['Diciembre']=$dias_31;


#Foreach para hacer los echo con los meses y sus dias.

foreach ($calendario as $value_1 => $value_2) {
  echo "<b>- $value_1 :</b>";
  foreach ($value_2 as $value_3 => $value_4) {
    echo "$value_4 <br>";
}
}


?>
