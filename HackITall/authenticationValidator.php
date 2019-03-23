<?php session_start(); ?>
<?php 
function AuthenticationVerification() {
    if(isset($_SESSION['username'])) {
        return true;
    }
    else {
        return false;
    }
}
?>