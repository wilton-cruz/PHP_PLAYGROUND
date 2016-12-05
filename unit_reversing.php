<?php
//number in kilograms we want to convert to pounds.
$kilos = 10;
//floating points value for the kilogram to pounds convertion.
$kl_to_lb = 2.20462;
//use the variable above to calculate kilogram multiplied by the pound convertion.
$pounds = $kl_to_lb * $kilos;
//display the kilograms to pounds.

echo "There are ";
echo $pounds;
echo " pounds in ";
echo $kilos;
echo " kilograms.";

?>