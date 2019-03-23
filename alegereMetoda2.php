
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

</head>
<body>

<div id="container">
   <h1>Ati ales metoda de modificare a parolei la fiecare minut!</h1>
      <?php
      date_default_timezone_set('europe/bucharest');
      $h =  date('H'); 
      $m =  date('i');
      echo 'Parola este:' . $h . $m;
      ?>
      <form action = "alegereMetoda4.php" method="post">
          <button name="back">back</button>
      </form>
</div>

</body>
</html>


<?php
if(isset($_POST['back'])) {
    header('Location: passcode.php'); 
}
?>