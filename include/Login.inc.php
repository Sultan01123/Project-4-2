<?php
if (isset($_POST["submit"])){
    $uid=$_POST["uid"];
    $password=$_POST["password"];
    require_once 'Db.inc.php';
    require_once 'function.inc.php';

    if(emptyInputLogin($uid,$password) !== false){
        header("location: ../Login.php?error=emptyinput");
        exit();
    }
    Loginuser($conn,$uid,$password);
}else{
    header("location: ../Login.php");
    exit();
}