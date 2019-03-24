<?php include "Includes/header.php"; ?>
<?php include "Includes/styleHeaderLocker.php"; ?>
<?php include "MySQL/db.php"; ?>

<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

</head>
<body>

<div class="overlay"></div>

<div id="container">
    <div class="center5">
        <h1><font color = "white" style="font-size:30px;">Ati ales metoda de modificare a parolei in functie de data</font></h1>
    </div>
     
    <r><br></r>
     
    <?php
    date_default_timezone_set('europe/bucharest');
    $h =  date('d'); 
    $m =  date('m');
    $parola  = $h . $m;
    echo '<font color = "white">Parola ta este: ' . $parola . '</font>';
    $_SESSION['password'] = $parola;
    ?>
    <br><br>
    <form action = "alegereMetoda4.php" method="post">
        <button class="btn-primary" style="width:150px" name="back">back</button>
    </form>
</div>

</body>
</html>


<?php
if(isset($_POST['back'])) {
    header('Location: passcode.php');
}
?>