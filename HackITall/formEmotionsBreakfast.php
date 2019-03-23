<?php session_start(); ?>

<?php
$formText = "";

if(isset($_POST['submit'])) {
    if(isset($_POST['option1']) && isset($_POST['option2']) && isset($_POST['option3']) && isset($_POST['option4']) && isset($_POST['option5'])) {
        $totalPoints = $_POST['option1'] + $_POST['option2'] + $_POST['option3'] + $_POST['option4'] + $_POST['option5'];
        
        echo $totalPoints;
        
        $_SESSION['totalPoints'] = $totalPoints;
        $_SESSION['meal'] = "breakfast";
        
        header('Location: youNeedToEatProcess.php');
    }
    else {
        $formText = "<span class='redTextAlert'>Trebuie sa raspunzi la toate intrebarile!</span>";
    }
}
?>

<?php include "foodToEat.php"; ?>
<?php include "Includes/header.php"; ?>
<?php include "Includes/styleHeaderEmotion.php"; ?>
<?php include "MySQL/db.php"; ?>

<!DOCTYPE html>
<html>
<body>
   
    <?php echo $formText; ?>
   
    <div class="overlay"></div>
    
    <form method="post" action="formEmotions.php">
        <div class="optionBox"> 
            <div class="options">
                <h4 style="color: #8B0000">
                      Cum te-ai simtit astazi?
                </h4>

                <fieldset id="group1">
                    <input type="radio" name="option1" value="1"> Fericit<br>
                    <input type="radio" name="option1" value="2"> Entuziasmat<br>
                    <input type="radio" name="option1" value="3"> Speriat<br>
                    <input type="radio" name="option1" value="4"> Suparat<br>
                    <input type="radio" name="option1" value="5"> Furios
                </fieldset>
            </div>
        </div> 

        <div class="optionBox">
            <div class="options">
                <h4 style="color: #8B0000">
                    Cat de activ ai fost astazi?
                </h4>

                <fieldset id="group2">
                    <input type="radio" name="option2" value="1"> Foarte mult<br>
                    <input type="radio" name="option2" value="2"> Mult<br>
                    <input type="radio" name="option2" value="3"> Putin<br>
                    <input type="radio" name="option2" value="4"> Aproape deloc<br>
                    <input type="radio" name="option2" value="5"> Deloc
                </fieldset>
            </div>
        </div>

        <div class="optionBox">
            <div class="options">
                <h4 style="color: #8B0000">
                    Ai dificultati in a te concentra in ceea ce ai de facut?
                </h4>

                <fieldset id="group3">
                    <input type="radio" name="option3" value="1"> Dificultati foarte mari<br>
                    <input type="radio" name="option3" value="2"> Dificultati mari<br>
                    <input type="radio" name="option3" value="3"> Asa si asa<br>
                    <input type="radio" name="option3" value="4"> Aproape deloc<br>
                    <input type="radio" name="option3" value="5"> Deloc
                </fieldset>
            </div>
        </div>

        <div class="optionBox">
            <div class="options">
                <h4 style="color: #8B0000">
                    Ai dificultati in a te concentra in ceea ce ai de facut?
                </h4>

                <fieldset id="group4">
                    <input type="radio" name="option4" value="1"> Dificultati foarte mari<br>
                    <input type="radio" name="option4" value="2"> Dificultati mari<br>
                    <input type="radio" name="option4" value="3"> Asa si asa<br>
                    <input type="radio" name="option4" value="4"> Aproape deloc<br>
                    <input type="radio" name="option4" value="5"> Deloc
                </fieldset>
            </div>
        </div>

        <div class="optionBox">
            <div class="options">
                <h4 style="color: #8B0000">
                    Alege una dintre urmatoarele culori: 
                </h4>

                <fieldset id="group5">
                    <input type="radio" name="option5" value="1"><font color="green"> Verde</font><br>
                    <input type="radio" name="option5" value="2"><font color="blue"> Albastru</font><br>
                    <input type="radio" name="option5" value="3"><font color="gold"> Galben</font><br>
                    <input type="radio" name="option5" value="4"><font color="orange"> Portocaliu</font><br>
                    <input type="radio" name="option5" value="5"><font color="red"> Rosu</font>
                </fieldset>
            </div>
        </div>

        <br><hr>

        <div class="submitButton">

                <button name="submit" class="btn-primary">Vreau sa aflu ce trebuie sa mananc!</button>
        </div>
    </form>
</body>
</html>