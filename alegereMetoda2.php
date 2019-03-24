<?php session_start(); ?>
<?php include "Includes/header.php"; ?>
<?php include "Includes/styleHeaderLocker.php"; ?>
<?php include "MySQL/db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<body>

<div class="overlay"></div>

<div id="container">
    <div class="center2">
        <h1><font color = "white" style="font-size:30px;">Ati ales metoda de modificare a parolei la fiecare minut!</font></h1>
    </div>
    <?php
    date_default_timezone_set('europe/bucharest');
    $h =  date('H');
    $m =  date('i');
    ?>
    <br><br><br>
    <font color="white" size="5">
    <?php
    echo 'Parola este:' . $h . $m;
    $_SESSION['password'] = $h . $m;
    ?>
    </font>
    
    <br><br>    
    
    <form action = "alegereMetoda4.php" method="post">
        <button style="width: 175px;" class="btn-primary" name="back">back</button>
    </form>
</div>

</body>
</html>


<?php
if(isset($_POST['back'])) {
    header('Location: passcode.php'); 
}
?>