<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Photo App</title>
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <style type="text/css">
            body {
                font-family: helvetica, sans-serif;
                background-image: url(Includes/resources/Background-img.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                background-size: cover;
            }
            
            .bigHeader {
                position: sticky;
                top: 0;
                right: 0;
                left: 0;
                width: 100%;
                height: 76px;
                border-bottom: 1px solid gold;
                z-index: 1;
            }
            
            .transparentHeader {
                opacity: 0.9;
                width: 100%;
                height: 75px;
                background-color: white;
                position: absolute;
            }
            
            .fixedHeader {
                width: 1300px;
                margin: 0 auto;
                position: relative;
            }
            
            .head {
                width: 585px;
                height: 75px;
                position: relative;
                float: left;
            }
            
            .headMiddle {
                width: 130px;
                height: 75px;
                margin: 0 auto;
                position: relative;
                float: left;
            }
            
            .logo {
                width: 100%;
                height: 100%;
                background-image: url(resources/logo.png);
                position: absolute;
            }
            
            .custom {
                width: 100px;
            }
            
            .accountInfo {
                margin-right: 40px;
                margin-top: 3px;
                float: right;
            }
            
            .accountInfoLogged {
                margin-right: 40px;
                margin-top: 20px;
                float: right;
            }
            
            .upload {
                margin-top: 3px;
                margin-left: 40px;
                float: left;
            }
            
            .mainBlock {
                position: relative;
                width: 1300px;
                margin: 0 auto;
            }
            
            .photoBlock {
                width: 492px;
                height: 422px;
                margin-top: 10px;
                margin-left: 404px;
            }
            
            .photo {
                width: 240px;
                border-radius: 5px;
                border: 1px solid grey;
                float: left;
            }
            
            .photoInfos {
                width: 240px;
                height: 422px;
                border-radius: 5px;
                border: 1px solid grey;
                float: right;
                background-color: wheat;
            }
            
            .commentsSection {
                width: 800px;
                margin: 3px auto;
                border-radius: 5px;
                background-color: wheat;
                border: 1px solid grey;
            }
            
            .comments {
                margin: 3px 3px 3px 3px;
                width: 100%;
                height: auto;
            }
            
            .insertComment {
                margin: 3px 3px 3px 3px;
            }
        </style>
    </head>
</html>