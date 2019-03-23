<?php session_start(); ?>
<?php 
function authenticationVerification() {
    if(isset($_SESSION['username'])) {
        return true;
    }
    else {
        return false;
    }
}
?>