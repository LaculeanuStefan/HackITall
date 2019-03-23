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
                    Cum te-ai trezit in aceasta dimineata?
                </h4>

                <fieldset id="group1">
                    <input type="radio" name="option1" value="1"> Obosit.<br>
                    <input type="radio" name="option1" value="2"> Nu foarte bine.<br>
                    <input type="radio" name="option1" value="3"> Asa si asa.<br>
                    <input type="radio" name="option1" value="4"> Bine.<br>
                    <input type="radio" name="option1" value="5"> Foarte bine.
                </fieldset>
            </div>
        </div> 

        <div class="optionBox">
            <div class="options">
                <h4 style="color: #8B0000">
                    Te simti odihnit?
                </h4>

                <fieldset id="group2">
                    <input type="radio" name="option2" value="1"> Nu.<br>
                    <input type="radio" name="option2" value="2"> Nu prea.<br>
                    <input type="radio" name="option2" value="3"> Cat de cat.<br>
                    <input type="radio" name="option2" value="4"> Odihnit.<br>
                    <input type="radio" name="option2" value="5"> Foarte odihnit.
                </fieldset>
            </div>
        </div>

        <div class="optionBox">
            <div class="options">
                <h4 style="color: #8B0000">
                    Ai dormit suficient?
                </h4>

                <fieldset id="group3">
                    <input type="radio" name="option3" value="1"> Nu.<br>
                    <input type="radio" name="option3" value="2"> Nu prea.<br>
                    <input type="radio" name="option3" value="3"> Asa si asa.<br>
                    <input type="radio" name="option3" value="4"> Destul de mult.<br>
                    <input type="radio" name="option3" value="5"> Da.
                </fieldset>
            </div>
        </div>

        <div class="optionBox">
            <div class="options">
                <h4 style="color: #8B0000">
                    De obicei, somnul tau de noapte dureaza:
                </h4>

                <fieldset id="group4">
                    <input type="radio" name="option4" value="1"> Intre 3-5 ore.<br>
                    <input type="radio" name="option4" value="4"> Intre 5-7 ore.<br>
                    <input type="radio" name="option4" value="5"> Intre 7-9 ore.<br>
                    <input type="radio" name="option4" value="3"> Intre 9-11 ore.<br>
                    <input type="radio" name="option4" value="2"> Intre 11-13 ore.
                </fieldset>
            </div>
        </div>

        <div class="optionBox">
            <div class="options">
                <h4 style="color: #8B0000">
                    Alege una dintre urmatoarele culori: 
                </h4>

                <fieldset id="group5">
                    <input type="radio" name="option5" value="5"><font color="green"> Verde.</font><br>
                    <input type="radio" name="option5" value="4"><font color="blue"> Albastru.</font><br>
                    <input type="radio" name="option5" value="3"><font color="gold"> Galben.</font><br>
                    <input type="radio" name="option5" value="2"><font color="orange"> Portocaliu.</font><br>
                    <input type="radio" name="option5" value="1"><font color="red"> Rosu.</font>
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