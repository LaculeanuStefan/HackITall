<!DOCTYPE html>
<html lang="en">
    <head>
        <title>S.O.S.</title>
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <style type="text/css">
            body {
                font-family: helvetica, sans-serif;
                background-image: url(Includes/resources/meals.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                background-size: cover;
            }
            
            .overlay{
                opacity:0.7;
                background-color:white;
                position: fixed;
                width:100%;
                height:100%;
                top:0px;
                left:0px;
                z-index:-9;
            }
            
            .firstTwo {
                margin-left: 10px;
                margin-top: 10px;
                margin-right: 10px;
                height: 300px;
            }
            
            .breakfast {
                width: 600px;
                height: 300px;
                float: left;
                border: 1px solid grey;
                background-image: url(Includes/resources/breakfast.jpg);
                background-size:       cover;
                background-repeat:     no-repeat;
                background-position:   center center; 
            }
            
            .breakfast:hover {
                width: 630px;
                height: 315px;
            }
            
            .bigCharacters {
                font-size: 100px;
                font-style: italic;
                font-weight: bolder;
            }
            
            .lunch {
                width: 600px;
                height: 300px;
                margin-right: 0;
                float: right;
                border: 1px solid grey;
                background-image: url(Includes/resources/lunch.jpg);
                background-size:       cover;
                background-repeat:     no-repeat;
                background-position:   center center;
            }
            
            .lunch:hover {
                width: 630px;
                height: 315px;
            }
            
            .dinner {
                margin: 0 auto;
                width: 600px;
                height: 300px;
                margin-top: 30px;
                border: 1px solid grey;
                background-image: url(Includes/resources/dinner.jpg);
                background-size:       cover;
                background-repeat:     no-repeat;
                background-position:   center center;
            }
            
            .dinner:hover{
                width: 630px;
                height: 315px;
            }
        </style>
    </head>
</html>