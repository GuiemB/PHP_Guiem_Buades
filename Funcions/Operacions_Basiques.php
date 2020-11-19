<?php

$nom = 'Guiem';

function suma($valor1, $valor2)
{
    return ($valor1 + $valor2);
}

function resta($valor1, $valor2)
{
    return ($valor1 - $valor2);
}

function multiplicacio($valor1, $valor2)
{
    return ($valor1 * $valor2);
}

function divisio($valor1, $valor2)
{
    return ($valor1 / $valor2);
}


echo ("La codificació md5 de $nom és:  ");
echo md5($nom);
echo "<br>";

echo ("La resta és:  ");
echo resta(10, 5);
echo "<br>";

echo ("La multiplicacio és:  ");
echo multiplicacio(4, 8);
echo "<br>";

echo ("La suma és:  ");
echo suma(4, 6);
echo "<br>";

echo ("La divisio és:  ");
echo divisio(20, 5);
echo "<br>";

?>
