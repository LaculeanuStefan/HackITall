<?php session_start(); ?>

<?php include "Includes/styleHeaderEmotion.php"; ?>

<?php
$whatToEat = "";

if($_SESSION['meal'] == "breakfast") {
    if($_SESSION['totalPoints'] < 10) {
        $whatToEat = "1 - 2 pahare de apa pentru hidratare. <br>1 mar si o banana pentru energie si asimilarea vitaminelor necesare pentru inceperea unei dimineti inforta.";
    } elseif($_SESSION['totalPoints'] < 15) {
        $whatToEat = "1 - 2 pahare de apa pentru hidratare. <br>Cereale integrale cu lapte sau iaurt.<br>1 banana, 1 mar.";
    } elseif($_SESSION['totalPoints'] < 20) {
        $whatToEat = "1 - 2 pahare de apa pentru hidratare. <br>Un shake proteic de preferat format din lapte si diverse fructe.";
    } else {
        $whatToEat = "1 - 2 pahare de apa pentru hidratare. <br>Omleta formata din 2-3 oua cu cateva rosii coapte.";
    }
} elseif($_SESSION['meal'] == "lunch") {
    if($_SESSION['totalPoints'] < 10) {
        $whatToEat = "Salata cu verdeturi. <br>1 - 2 fructe la alegere. <br>Seminte de chis, caju.<br>Apa.";
    } elseif($_SESSION['totalPoints'] < 15) {
        $whatToEat = "Salata de verdeturi. <br>Cateva fructe.<br>Apa.";
    } elseif($_SESSION['totalPoints'] < 20) {
        $whatToEat = "Paste cu legume si pui sau peste.<br>1 - 2 fructe la alegere.";
    } else {
        $whatToEat = "Porc la gratar cu legume la abur si salata.<br>1 - 2 fructe la alegere.";
    }
} else {
    if($_SESSION['totalPoints'] < 10) {
        $whatToEat = "Salata de verdeturi, branza si seminte. <br>Apa.";
    } elseif($_SESSION['totalPoints'] < 15) {
        $whatToEat = "Supa crema de legume sau supa de pui cu taitei. <br>Apa.";
    } elseif($_SESSION['totalPoints'] < 20) {
        $whatToEat = "Orice carne light, de exemplu pastrav, dorada, curcan asezonate cu o salata.";
    } else {
        $whatToEat = "Cartofi la cuptor cu smantana,branza,ciuperci";
    }
}

echo $whatToEat;
?>