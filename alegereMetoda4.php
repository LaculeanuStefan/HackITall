<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

</head>
<body>

<div id="container">    
	<h1>Ati ales metoda de setare a unei parole personalizate!</h1>
    <form action = "alegereMetoda4.php" method="post">
         Introduceti parola personalizata: <br>
        <input type="text" name="parola"><br>
        <br/>
        <button name="ok">ok</button>
        <br/>
        <br/>
        <button name="back">back</button>
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
            echo 'Parola ta este: ' . $_POST['parola'];
        }
    }

?>


<?php
if(isset($_POST['back'])) {
    header('Location: passcode.php'); 
}
?>