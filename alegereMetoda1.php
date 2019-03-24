<?php session_start(); ?>
<?php include "Includes/header.php"; ?>
<?php include "Includes/styleHeaderLocker.php"; ?>
<?php include "MySQL/db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<body>

<div class="overlay"></div>

<div id="container">
	<div class="center3">
        <h1><font color = "white" style="font-size:30px;">Ecuatie matematica!</font></h1>
    </div>
    <br>
    <h4><font color = "white">Formula de calculare a parolei este urmatoarea: <br/> parola = x + ora la care se face setarea concatenat cu y + minutele la care se face setarea</font>
    </h4>
    
    <br><br>
    
    <form action = "alegereMetoda1.php" method="post"><font color = "white">
        Introduceti x(numar intre 1-100):</font><br>
        <input type="text" name="x"><br><font color = "white">
        <br>Introduceti y(numar intre 1-100):</font><br>
        <input type="text" name="y">
        <br>
        <br>
        <button style="width: 200px" class="btn-primary" name="ok">ok</button>
        <br><br>
        <button style="width: 200px" class="btn-primary" name="back">back</button>
    </form>
    <br/>
</div>

</body>
</html>

<?php
if(isset($_POST['back'])) {
    header('Location: passcode.php'); 
}
?>

<?php
if(isset($_POST['ok'])) {
    date_default_timezone_set('europe/bucharest');
    if(!empty($_POST['x']) and !empty($_POST['y'])) {
      $h =  date('H'); 
      $m =  date('i');
      $calculeazaParola1 = $h + $_POST['x'];
      $calculeazaParola2 = $m + $_POST['y'];
      $calculeazaParola = $calculeazaParola1 . $calculeazaParola2;
      echo '<font color = "white">Parola ta este: ' . $calculeazaParola . '</form>';
        $_SESSION['password'] = $calculeazaParola;
    }
}
?>