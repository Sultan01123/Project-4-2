<?php
function emptyInputRegister($name,$email,$password,$phone,$birth,$ID,$country,$city){
    $result;
    if(empty($name)||empty($email)||empty($password)||empty($phone)||empty($birth)||empty($ID)||empty($country)||empty($city)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}

function nameexist($conn,$name,$email,$phone,$ID) {
    $sql = "SELECT * From drivertext WHERE usersname = ? OR usersemail = ? OR usersphone = ? OR usersId = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../Register.php?error=stmtfail");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ssii",$name,$email,$phone,$ID);
    mysqli_stmt_execute($stmt);
    $resultdata = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultdata)){
        return $row;
    }else{
        $result=false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function invalidEmail($email){
    $result;
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}

function createUser($conn,$name,$email,$password,$phone,$birth,$ID,$country,$city){
    $sql = "INSERT INTO 'drivertext' (usersname,usersemail,userspassword,usersphone,,usersId,userscountry,userscity) VALUES (?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../Register.php?error=stmtfail");
        exit();
    }
    $hashedpwd = password_hash($password,PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"sssisiss",$name,$email,$hashedpwd,$phone,$birth,$ID,$country,$city);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../Register.php?error=nono");
    exit();

}

function emptyInputLogin($uid,$password){
    $result;
    if(empty($uid)||empty($password)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}

function Loginuser($conn,$uid,$password){
    $Eexist = nameexist($conn,$name,$uid,$phone,$ID);
    if($Eexist === false){
        header("location: ../Login.php?error=wornglogin");
    exit();
    }
    $passwordhashed = $Eexist["userspassword"];
    $checkpassword = password_verify($password,$passwordhashed);
    if($checkpassword === false){
        header("location: ../Register.php?error=wornglogin");
        exit();        
    }elseif($checkpassword === true){
        session_start();
        $_SESSION["usersNo"] = $Eexist["usersNo"];
        $_SESSION["usersname"] = $Eexist["usersname"];
        header("location: ../Main.php");
        exit();
    }
}
