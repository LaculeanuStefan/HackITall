<!--
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Geography Quiz</title>

</head>
<body>

<div id="container">
	<h1>Passcode!</h1>
</div>
    
<div id="container">
	<h1>Alegeti algoritmul prin care doriti sa se schimbe parola.</h1>
</div>
    

</body>
</html>
-->

<?php session_start(); ?>

<?php include "Includes/header.php"; ?>
<?php include "Includes/styleHeaderLocker.php"; ?>
<?php include "MySQL/db.php"; ?>

<?php
if(isset($_POST['submit'])){
    if($_POST['ceva2'] == 'ecuatie'){ 
        header('Location: alegereMetoda1.php'); 
    } elseif($_POST['ceva2'] == 'minute') {
        header('Location: load1.php'); 
    } elseif($_POST['ceva2'] == 'data') {
        header('Location: alegereMetoda3.php'); 
    } elseif($_POST['ceva2'] == 'personalizata') {
        header('Location: alegereMetoda4.php');
    }
}   
?>



<!DOCTYPE html>
<html lang="en">
<body>

<div class="overlay"></div>

<div id="container">
    <div class="center">
        <h1><font color = "white" style="font-size:50px;"><a href="enterPIN.php">Theftproof!</a></font></h1>
    
        <form action="passcode.php" method="post">
            <select style="width: 250px" name="ceva2">
              <option value="ecuatie">Ecuatie Matematica</option>
              <option value="minute">Modificare in functie de minute</option>
              <option value="data">Modificare in functie de data</option>
              <option value="personalizata">Modificare personalizata</option>
            </select>
            <br>
            <br>
            <button style="width: 250px" class="btn-primary" name="submit">submit</button>
        </form>
    </div>
    
</div>

</body>
</html>

