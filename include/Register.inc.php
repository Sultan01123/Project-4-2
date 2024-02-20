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

    require_once 'Db.inc.php';
    require_once 'function.inc.php';

    if(emptyInputRegister($name,$email,$password,$phone,$birth,$ID,$country,$city) !== false){
        header("Location: ../Register.php?error=emptyinput");
        exit();
    }
    if(nameexist($conn,$name,$email,$phone,$ID) !== false){
        header("Location: ../Register.php?error=nameexists");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("Location: ../Register.php?error=invalidEmail");
        exit();
    }
    createUser($conn,$name,$email,$password,$phone,$birth,$ID,$country,$city);
}else{
    header("Location: ../Register.php");
    exit();
}
?>