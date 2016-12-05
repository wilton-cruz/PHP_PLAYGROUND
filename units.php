<?php
//number in pounds we want to convert to kilograms
$pounds = 140;
//floating points value for the pound to kilogram convertion.
$lb_to_kg = 0.453592;
//use the variable above to calculate pounds multiplied by the kilogram convertion
 $kilograms = $pounds * $lb_to_kg;
//display the pounds to kilograms
echo "weight: ";
echo $pounds;
echo " lb = ";
echo $kilograms;
echo " kg. ";


//numbers of miles we want to convert to kilometers
$miles = 2.5;
//floating point value for the mile to kilometerconvertion.
$mile_to_km = 1.60934;
// use the variable above to calculate miles multiplied by the kilometer convertion.

$distance = $miles * $mile_to_km;
echo " there is ";
echo $distance;
echo " kilometers in ";
echo $miles;
echo ' miles';
?>