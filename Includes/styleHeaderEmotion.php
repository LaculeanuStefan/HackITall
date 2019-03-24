<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Emotion Food</title>
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <style type="text/css">
            body {
                font-family: helvetica, sans-serif;
                background-image: url(Includes/resources/food.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                background-size: cover;
            }
            
            .options {
                margin: 10px auto;
                width: 450px;
                height: 190px;
                z-index: 1;
            }
            
            .optionBox {
                margin: 10px auto;
                width: 500px;
                height: 200px;
                z-index: 1;
                border: 1px solid grey;
                border-radius: 1%;
            }
            
            .overlay{
                opacity:0.8;
                background-color:white;
                position: fixed;
                width:100%;
                height:100%;
                top:0px;
                left:0px;
                z-index:-9;
            }
            
            .roundButton1 {
                width: 30px;
                height: 30px;
                border-radius: 50%;
                background-color: green;
                margin-left: 20px;
                float: left;
                margin-right: 10px;
            }
            
            .roundButton2 {
                width: 30px;
                height: 30px;
                border-radius: 50%;
                background-color: blue;
                margin-left: 20px;
                float: left;
            }
            
            .roundButton3 {
                width: 30px;
                height: 30px;
                border-radius: 50%;
                background-color: yellow;
                float: left;
            }
            
            .roundButton4 {
                width: 20px;
                height: 20px;
                border-radius: 50%;
                background-color: orange;
            }
            
            .roundButton5 {
                width: 20px;
                height: 20px;
                border-radius: 50%;
                background-color: red;
            }
            
            .submitButton {
                margin: 20px auto;
                width: 200px;
            }
            
            .redTextAlert {
                color: red;
                font-weight: bold;
            }
        </style>
    </head>
</html>