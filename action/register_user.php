<?php
require_once "../settings/connection.php";

if(isset($_POST["registerButton"])){
    $firstname= $_POST["firstName"];
    $lastname= $_POST["lastName"];
    $gender= $_POST["gender"];
    $familyrole= $_POST["familyRole"];
    $dob= $_POST["dob"];
    $phonenumber= $_POST["phoneNumber"];
    $email = $_POST["email"];
    $password = $_POST["password"];
   

    $hash = password_hash($password, PASSWORD_DEFAULT); 

    
    $insertquery= "INSERT INTO People (rid, fid, fname, lname, gender, dob, tel, email, passwd)
    VALUES (3, '$familyrole', '$firstname', '$lastname', '$gender', '$dob', '$phonenumber', '$email', '$hash')" ;

    if (mysqli_query($mysqli, $insertquery)) {
        header("Location: ../login/login.php");
        exit();
    } else {
        echo "Error: " . $insertquery . "<br>" . mysqli_error($mysqli);
    }



}

