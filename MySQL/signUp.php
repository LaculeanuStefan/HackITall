<?php session_start(); ?>
<?php include "../Includes/header.php"; ?>
<?php include "../Includes/styleHeaderLogin.php"; ?>
<?php include "db.php"; ?>
<?php

$emailText = "Email";
$usernameText = "Username";
$passwordText = "Password";
$confirmPasswordText = "Confirm password";

if(isset($_POST['submit'])) {
    $signUpFlag = true;
    //$errorMsg = "";
    
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    
    $email = mysqli_real_escape_string($connection, $email);
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    $confirmPassword = mysqli_real_escape_string($connection, $confirmPassword);
    
    //aux for email and username from databese to verify not to already exists
    $query = "SELECT email FROM users WHERE email = '$email'";
    
    $emailDuplicateVerification = mysqli_query($connection, $query);
    
    $query = "SELECT username FROM users WHERE username = '$username'";
    
    $usernameDuplicateVerification = mysqli_query($connection, $query);
    
    //enrypting password
    //creating a hashFormat
    $hashFormat = "$2y$10$";
    $salt = "iusesomecrazystrings21"; //needed 22 characters
    $hashF_and_salt = $hashFormat . $salt;
    
    //the crypting of the password
    $password = crypt($password, $hashF_and_salt);
    
    if(empty($_POST['email'])) {
        $emailText = "<span class='redTextAlert'>You did not entered an email address!</span>";
        
        $signUpFlag = false;
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailText = "<span class='redTextAlert'>You did not entered a valid email address!</span>";
        
        $signUpFlag = false;
    } elseif(mysqli_num_rows($emailDuplicateVerification)) {
        $emailText = "<span class='redTextAlert'>Email address already registered!</span>";
        
        $signUpFlag = false;
    }
    
    if(empty($_POST['username'])) {
        $usernameText = "<span class='redTextAlert'>You did not entered an username!</span>";
        
        $signUpFlag = false;
    } elseif(strlen($_POST['username']) < 5) {
        $usernameText = "<span class='redTextAlert'>You should enter an username with at least 5 characters!</span>";
        
        $signUpFlag = false;
    } elseif(mysqli_num_rows($usernameDuplicateVerification)) {
        $usernameText = "<span class='redTextAlert'>Username already registered!</span>";
        
        $signUpFlag = false;
    }
    
    if(empty($_POST['password'])) {
        $passwordText = "<span class='redTextAlert'>You did not entered a password!</span>";
        
        $signUpFlag = false;
    } elseif(strlen($_POST['password']) < 5) {
        $passwordText = "<span class='redTextAlert'>You should enter a password with at least 5 characters!</span>";
        
        $signUpFlag = false;
    }
    
    if(empty($_POST['confirmPassword']) && !empty($_POST['password']) && strlen($_POST['password']) >= 5) {
        $confirmPasswordText = "<span class='redTextAlert'>You did not entered a password confirmation!</span>";
        
        $signUpFlag = false;
    } elseif($_POST['password'] != $_POST['confirmPassword'] && !empty($_POST['password']) && strlen($_POST['password']) >= 5) {
        $confirmPasswordText = "<span class='redTextAlert'>Password confirmation failed!</span>";
        
        $signUpFlag = false;
    }
    
    if($signUpFlag == true) {
        $query = "INSERT INTO users(email, username, password) VALUE('$email', '$username', '$password')";
    
        $result = mysqli_query($connection, $query);
    
        /*if(!$result) {
            $errorMsg .= "<div class='container'><p class='redTextAlert'>Username or email already exists!</p></div>";
            
            echo $errorMsg;
        } else {*/
        
        //setting the session for this web app
        $_SESSION['username'] = $username;
        
        //privilege session setup
        $_SESSION['privilege'] = 'user';
        
            header("Location: ../MainPage.php");
    //}
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container">
        <div class="col-xs-6">
            <h1 class="text-center">Sign Up</h1>
            
            <form action="signUp.php" method="post">
                <div class="form-group">
                    <label for="email">
                        <?php echo $emailText; ?>
                    </label>
                    
                    <input type="text" name="email" class="form-control">
                </div>
                   
                <div class="form-group">
                    <label for="username">
                        <?php echo $usernameText; ?>
                    </label>
                    
                    <input type="text" name="username" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="password">
                        <?php echo $passwordText; ?>
                    </label>
                    
                    <input type="password" name="password" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="confirmPassword">
                        <?php echo $confirmPasswordText; ?>
                    </label>
                    
                    <input type="password" name="confirmPassword" class="form-control">
                </div>
                
                <input type="submit" class="btn btn-primary" name="submit" value="Create account" id="submit">
            </form>
        </div>
    </div>
</body>
</html>