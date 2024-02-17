<?php
if (isset($_POST["submit"])){
    $name=$_POST["fullname"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $phone=$_POST["phone"];
    $birth=$_POST["birth"];
    $ID=$_POST["ID"];
    $country=$_POST["country"];
    $city=$_POST["city"];

    require_once 'Dbh.inc.php';
    require_once 'function.inc.php';

    if(emptyInputSignup($name,$emil,$password,$phone,$birth,$ID,$country,$city) !== false){
        header("location: ../Register?error=emptyinput");
        exit();
    }
    if(nameexist($conn,$name) !== false){
        header("location: ../Register?error=nameexists");
        exit();
    }
    if(invalidEmail($emil) !== false){
        header("location: ../Register?error=invalidEmail");
        exit();
    }
    createUser($conn,$name,$emil,$password,$phone,$birth,$ID,$country,$city);
}else{
    header("localtion: ../Register.php");
    exit();
}