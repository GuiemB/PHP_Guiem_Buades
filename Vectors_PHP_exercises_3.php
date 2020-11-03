<?php
/*Vectores*/
$hora[]="Madrugada";
$hora[]="Mañana";
$hora[]="Mediodia";
$hora[]="Tarde";
$hora[]="Noche";

$platos[]="Carne con salsa de setas";
$platos[]="Spaghetti carbonara";
$platos[]="Tortilla Española";

/*Arrays*/
$alarma=array("8", "12", "14", "16", "20");

$pc=array("PC", "Mouse", "Keyboard", "i3core", "8GB RAM", "1TB");

/*Contadores*/
$contador2=sizeof($platos);
$contador3=sizeof($alarma);
$contador4=sizeof($pc);

/*Vector 1: Containing the window time of a day: Morning, Noon, Afternoon, Evening, Night*/
echo "<b>1. Vector: Containing the window time of a day<br></b>";
echo "Numero de elementos:";
echo sizeof($hora);
echo "<br>";

foreach ($hora as $value1)
  {
    echo $value1;
    echo "<br>";
  }

echo "<br>";

/*Vector 2: Containing some dishes of a restaurant: Beef with mushroom sauce, spaghetti carbonara, Spanish omelette*/
echo "<b>2. Vector: Containing some dishes of a restaurant<br></b>";
echo "Numero de elementos:";
echo sizeof($platos);
echo "<br>"
foreach ($platos as $value2)
  {
    echo $value2;
    echo "<br>";
  }

echo "<br>";

/*Vector 3: Containing the times when an alarm sounds: 8, 12, 14, 16, 20*/
echo "<b>3. Vector: Containing the times when an alarm sounds<br></b>";
echo "Numero de elementos: $contador3 <br>";

foreach ($alarma as $value3)
  {
    echo "Alarma programada a las $value3 <br>";
  }

echo "<br>";

/*Vector 4: Containing the list of components: PC, Mouse, Keyboard, i3core, 8GB RAM, 1TB*/
echo "<b>4. Vector: Containing the list of components<br></b>";
echo "Numero de elementos: $contador4 <br>";

foreach ($pc as $value4)
  {
    echo "$value4 <br>";
  }

?>
