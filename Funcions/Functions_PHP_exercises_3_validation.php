<?php

$nom="Guiem Buades Estrany";

function fullNameSplit($nom)
{
  return explode(" ", $nom);
}

$variable=fullNameSplit($nom);
foreach($variable as $variable2){

echo $variable2. "<br>";
}

  function pwdhash($contra)

{
  return password_hash($contra, PASSWORD_DEFAULT);
}
echo pwdhash("contraseña")
?>
