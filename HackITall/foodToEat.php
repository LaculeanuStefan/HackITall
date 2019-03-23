<?php include "points.php" ?>

<?
$max = -1;
$index = -1;
   
$whatToEat = "Nimic ca ejti gras!";

function WhatToEat() {
    for($i = 0; $i < 5; $i++) {
        if($option[i] > $max) {
            $max =$option[i];
            $index = $i;
        }
    }
    
    switch($index) {
        case 0:
            $whatToEat = "fructe";
            break;
        case 1:
            $whatToEat = "Legume";
            break;
        case 2:
            $whatToEat = "Carne";
            break;
        case 3:
            $whatToEat = "Paste";
            break;
        case 4:
            $whatToEat = "Orice";
            break;
    }
}  
?>