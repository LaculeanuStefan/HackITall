<?php session_start(); ?>
<?php include "db.php"; ?>
<?php include "../Includes/header.php"; ?>
<?php include "../Includes/styleHeaderLogin.php"; ?>

<?php
$usernameText = "Username";
$passwordText = "Password";

if(isset($_POST['submit'])) {
    $loginFlag = true;
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    
    //creating a hashFormat
    $hashFormat = "$2y$10$";
    $salt = "iusesomecrazystrings21"; //needed 22 characters
    $hashF_and_salt = $hashFormat . $salt;
    
    $password = crypt($password, $hashF_and_salt);
    
    $query = "SELECT username FROM users WHERE username = '$username'";
    
    $usernameDuplicateVerification = mysqli_query($connection, $query);
    
    if(empty($_POST['username'])) {
        $usernameText = "<span class='redTextAlert'>You did not entered an username!</span>";
        
        $loginFlag = false;
    } elseif(!mysqli_num_rows($usernameDuplicateVerification)) {
        $usernameText = "<span class='redTextAlert'>Username not found!</span>";
        
        $loginFlag = false;
    } else {
        $query = "SELECT * FROM users WHERE username = '$username'";
    
        $passwordVerification = mysqli_query($connection, $query);
        
        $passwordVerification =mysqli_fetch_array($passwordVerification, MYSQLI_ASSOC);
        
        $hash = $passwordVerification['password'];
        
        if(empty($_POST['password'])) {
            $passwordText = "<span class='redTextAlert'>You did not entered a password!</span>";
        
            $loginFlag = false;
        } elseif(!password_verify($_POST['password'], $hash)) {
            $passwordText = "<span class='redTextAlert'>Incorrect password!</span>";
            
            $loginFlag = false;
        }
    }
    
    if($loginFlag == true) {
        //setting the session for this web app
        $_SESSION['username'] = $username;
        
        if($username == "Admin") {
            $_SESSION['privilege'] = "admin";
        } else {
            $_SESSION['privilege'] = "user";
        }
        
        header("Location: ../MainPage.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container">
        <div class="col-xs-6">
            <h1 class="text-center">Log in</h1>
            
            <form action="login.php" method="post">
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
                
                <input type="submit" class="btn btn-primary" name="submit" value="Log in">
            </form>
        </div>
    </div>
</body>
</html>