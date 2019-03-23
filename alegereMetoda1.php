
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

</head>
<body>

<div id="container">
	<h1>Ecuatie matematica!</h1>
    <h2>Formula de calculare a parolei este urmatoarea: <br/> parola = x + ora la care se face setarea concatenat cu y + minutele la care se face setarea</h2>
    <form action = "alegereMetoda1.php" method="post">
      Introduceti x(numar intre 1-100):<br>
        <input type="text" name="x"><br>
      Introduceti y(numar intre 1-100):<br>
        <input type="text" name="y">
        <br/>
        <br/>
        <button name="ok">ok</button>
        <br/>
        <button name="back">back</button>
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
      echo 'Parola ta este: ' . $calculeazaParola;
    }
}
?>