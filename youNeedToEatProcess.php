<?php session_start(); ?>

<?php include "Includes/styleHeaderEmotion.php"; ?>

<?php
$whatToEat = "";

if($_SESSION['meal'] == "breakfast") {
    if($_SESSION['totalPoints'] < 10) {
        $whatToEat = "1 - 2 pahare de apa pentru hidratare. <br>1 mar si o banana pentru energie si asimilarea vitaminelor necesare pentru inceperea unei dimineti inforta.";
    } elseif($_SESSION['totalPoints'] < 15) {
        $whatToEat = "Apa. <br>Cereale integrale cu lapte sau iaurt.<br>1 banana, 1 mar.";
    } elseif($_SESSION['totalPoints'] < 20) {
        
    } else {
        
    }
} elseif($_SESSION['meal'] == "lunch") {
    if($_SESSION['totalPoints'] < 10) {
        $whatToEat = "Salata cu verdeturi. <br>1 - 2 fructe la alegere. <br>Seminte de chis, caju.<br>Apa.";
    } elseif($_SESSION['totalPoints'] < 15) {
        $whatToEat = "Salata de verdeturi. <br>";
    } elseif($_SESSION['totalPoints'] < 20) {
        
    } else {
        
    }
} else {
    if($_SESSION['totalPoints'] < 10) {
        $whatToEat = "Salata de verdeturi. <br>Apa.";
    } elseif($_SESSION['totalPoints'] < 15) {
        
    } elseif($_SESSION['totalPoints'] < 20) {
        
    } else {
        
    }
}

echo $whatToEat;
?>