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
<head>
	<meta charset="utf-8">
	<title>Theftproof</title>

</head>
<body>

<div id="container">
	<h1>Theftproof!</h1>
    <form action="passcode.php" method="post">
        <select name="ceva2">
          <option value="ecuatie">Ecuatie Matematica</option>
          <option value="minute">Modificare in functie de minute</option>
          <option value="data">Modificare in functie de data</option>
          <option value="personalizata">Modificare personalizata</option>
        </select>
        <button name="submit">submit</button>
    </form>
    
</div>

</body>
</html>

