<?php

function ValidarEmail($email){
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if (ValidarEmail ('guiem@gmail.com')){
  echo 'Valid';
} else {
  echo 'Not valid';
}

echo '<br>';

function ValidarPassword($password, $password2){
  if (strcmp($password, $password2) == 0 ){
      return True;}
  else   {
    echo "No son iguales";}
}

echo ValidarPassword('Hoaala', 'Hola')
?>
