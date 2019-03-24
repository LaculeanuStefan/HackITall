<?php session_start(); ?>
<?php include "Includes/header.php"; ?>
<?php include "Includes/styleHeaderEnterPIN.php"; ?>
<?php include "MySQL/db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<body onload=display_ct();>
    <div class="head">
        <div class="center1">
            <h2 style="color: white"><a href="passcode.php">TheftProof</a></h2>
        </div>
        
        <br>
        
        <div class="center">
            <span style="color: white" id='ct' ></span>
        </div>
    </div>
    
    <div class="enterPass">
        <div class="displayText">
            <input type="text" id="pass" style="width: 288px; height: 96px" readonly="readonly" value="">
        </div>
        
        <div class="buttons">
            <button class="btn-primary" name="pass" id="btn1" value="1" style="width: 95.5px; height: 100px;">1</button>
            <button class="btn-primary" name="pass" id="btn2" value="2" style="width: 95.5px; height: 100px;">2</button>
            <button class="btn-primary" name="pass" id="btn3" value="3" style="width: 95.5px; height: 100px;">3</button>
            <button class="btn-primary" name="pass" id="btn4" value="4" style="width: 95.5px; height: 100px;">4</button>
            <button class="btn-primary" name="pass" id="btn5" value="5" style="width: 95.5px; height: 100px;">5</button>
            <button class="btn-primary" name="pass" id="btn6" value="6" style="width: 95.5px; height: 100px;">6</button>
            <button class="btn-primary" name="pass" id="btn7" value="7" style="width: 95.5px; height: 100px;">7</button>
            <button class="btn-primary" name="pass" id="btn8" value="8" style="width: 95.5px; height: 100px;">8</button>
            <button class="btn-primary" name="pass" id="btn9" value="9" style="width: 95.5px; height: 100px;">9</button>
            <button class="btn-primary" name="pass" id="btnAccept" value="accept" style="width: 95.5px; height: 100px;">accept</button>
            <button class="btn-primary" name="pass" id="btn0" value="0" style="width: 95.5px; height: 100px;">0</button>
            <button class="btn-primary" name="pass" id="btnBack" value="back" style="width: 95.5px; height: 100px;">back</button> 
        </div>
    </div>
    
    <script type="text/javascript"> 
        function display_c(){
        var refresh=1000; // Refresh rate in milli seconds
        mytime=setTimeout('display_ct()',refresh)
        }

        function display_ct() {
        var x = new Date()
        document.getElementById('ct').innerHTML = x;
        display_c();
         }
        
        document.getElementById("btn0").addEventListener('click', function() {
            var text = document.getElementById('pass');
            text.value += "0";
        });
        
        document.getElementById("btn1").addEventListener('click', function() {
            var text = document.getElementById('pass');
            text.value += "1";
        });
        
        document.getElementById("btn2").addEventListener('click', function() {
            var text = document.getElementById('pass');
            text.value += "2";
        });
        
        document.getElementById("btn3").addEventListener('click', function() {
            var text = document.getElementById('pass');
            text.value += "3";
        });
        
        document.getElementById("btn4").addEventListener('click', function() {
            var text = document.getElementById('pass');
            text.value += "4";
        });
        
        document.getElementById("btn5").addEventListener('click', function() {
            var text = document.getElementById('pass');
            text.value += "5";
        });
        
        document.getElementById("btn6").addEventListener('click', function() {
            var text = document.getElementById('pass');
            text.value += "6";
        });
        
        document.getElementById("btn7").addEventListener('click', function() {
            var text = document.getElementById('pass');
            text.value += "7";
        });
        
        document.getElementById("btn8").addEventListener('click', function() {
            var text = document.getElementById('pass');
            text.value += "8";
        });
        
        document.getElementById("btn9").addEventListener('click', function() {
            var text = document.getElementById('pass');
            text.value += "9";
        });
        
        document.getElementById("btnBack").addEventListener('click', function() {
            var textulMeu = document.getElementById('pass');
            textulMeu.value = textulMeu.value.slice(0, textulMeu.value.length - 1);
        });
        
        document.getElementById("btnAccept").addEventListener('click', function() {
            var text = document.getElementById('pass');
            var pass = <?php echo $_SESSION['password'] ?>;
            if(text.value == pass) {
               window.location = "http://localhost/HackITall/success.php";
            }
        });
    </script>
</body>
</html>