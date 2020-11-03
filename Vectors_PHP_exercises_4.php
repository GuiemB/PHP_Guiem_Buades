<?php

# Variables y arrays.
$uno['Enero']=array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31");
$dos['Menu']=array("Carne con salsa de setas", "paghetti carbonara", "Tortilla Española");
$tres['Alarma']=array("8", "12", "14", "16", "20");
$cuatro['PC']=array("PC", "Mouse", "Keyboard", "i3core", "8GB RAM", "1TB");

/*1.*/
foreach ($uno as $uno_1) {

  echo "1. Associative array: Dias del mes de Enero <br>";
  echo "String Key: Enero<br>";
  echo "Numero de elementos:";
  echo sizeof($uno_1);
  echo "</br>";

  foreach ($uno_1 as $uno_2) {
    echo "$uno_2<br>";
  }
  echo "<br>";
}

/*2.*/
foreach ($dos as $dos_1) {

  echo "2. Associative array: Menu semanal <br>";
  echo "String Key: Menu <br>";
  echo "Numero de elementos:";
  echo sizeof($dos_1);
  echo "</br>";

  foreach ($dos_1 as $dos_2) {
    echo "$dos_2<br>";
  }
  echo "<br>";
}

/*3.*/
foreach ($tres as $tres_1) {

  echo "3. Associative array: Alarmas programadas <br>";
  echo "String Key: Alarma <br>";
  echo "Numero de elementos:";
  echo sizeof($tres_1);
  echo "<br>";

  foreach ($tres_1 as $tres_2) {
    echo "$tres_2<br>";
  }
  echo "<br>";
}

/*4.*/
foreach ($cuatro as $cuatro_1) {

  echo "4. Associative array: Producto 123 <br>";
  echo "String Key: PC <br>";
  echo "Numero de elementos:";
  echo sizeof($cuatro_1);
  echo "</br>";

  foreach ($cuatro_1 as $cuatro_2) {
    echo "$cuatro_2<br>";
  }
  echo "<br>";
}
?>
