<?php session_start(); ?>
<?php include "Includes/header.php"; ?>
<?php include "Includes/styleHeaderLocker.php"; ?>
<?php include "MySQL/db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

</head>
<body>

<div class="overlay"></div>

<div id="container">    
	<div class="center6">
        <h1><font color = "white" style="font-size:30px;">Ati ales metoda de setare a unei parole personalizate!</font></h1>
    </div>
    <form action = "alegereMetoda4.php" method="post">
        <font color = "white">Introduceti parola personalizata: </font><br>
        <input style="width: 230px" type="text" name="parola"><br>
        <br/>
        <button style="width: 230px" class="btn-primary" name="ok">ok</button>
        <br/>
        <br/>
        <button style="width: 230px" class="btn-primary" name="back">back</button>
    </form>
    <br/>
</div>

</body>
</html>

<?php
    $flag = 1;
    $parola = 0;
    if(isset($_POST['ok'])) {
        if($_POST['parola'] < 999 or $_POST['parola'] > 1000000) {
            $usernameText = "<span class='redTextAlert'>Introduce o parola formata din cifre intre 4-6 caractere!</span>";
            $flag = 0;
        }
        if($flag == 0) {
            echo $usernameText;
        } else {
            echo '<font color = "white">Parola ta este: ' . $_POST['parola'] . '</font>';
            $_SESSION['password'] = $_POST['parola'];
        }
    }

?>


<?php
if(isset($_POST['back'])) {
    header('Location: passcode.php'); 
}
?>