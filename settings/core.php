<?php
session_start();



function check_login() {
    
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../login/login.php");
        die();
    }
}



function get_user_role_id() {
    if(isset($_SESSION["user_role"])) {
        return $_SESSION["user_role"];
    } else {
       return 0; 
}



