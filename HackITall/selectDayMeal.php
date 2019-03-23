<?php include "foodToEat.php"; ?>
<?php include "Includes/header.php"; ?>
<?php include "Includes/styleHeaderSelectMeal.php"; ?>
<?php include "MySQL/db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<body>
    <div class="overlay"></div>
    
    <div class="firstTwo">
        <div class="breakfast" onclick="window.location='formEmotionsBreakfast.php'"><font size="20" color="blue"><b><i>Micul dejun</i></b></font></div>

        <div class="lunch"  onclick="window.location='formEmotions.php'"><font size="20" color="blue"><b><i>Pranzul</i></b></font></div>
    </div>
    
    
    <div class="dinner" onclick="window.location='formEmotionsDinner.php'"><font size="20" color="blue"><b><i>Cina</i></b></font></div>
</body>
</html>