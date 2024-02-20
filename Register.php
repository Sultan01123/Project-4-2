<?php
include_once 'Header.php'
?>
    <H1>Welcome to WESELT!</H1>
    <form action="include/Register.inc.php" method="post">
        <div class="col-6 mx-1">
            <label>Full name</label>
            <input type="text" name="fullname" class="form-control">
        </div>
        <div class="col-6 mx-1">
            <label>Email</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="col-6 mx-1">
            <label>Password</label>
            <input type="password" name="password" class="form-control" >
        </div>
        <div class="col-6 mx-1">
            <label>Phone</label>
            <input type="number" name="phone" class="form-control">
        </div>
        <div class="col-6 mx-1">
            <label>Birth date</label>   
            <input type="date" name="birth" class="form-control">
        </div>
        <div class="col-6 mx-1">
            <label>ID</label>
            <input type="number" name="ID" class="form-control">
        </div>
        <div class="col-6 mx-1">
            <label>Country</label>
            <input type="text" name="country" class="form-control">
        </div>
        <div class="col-6 mx-1">
            <label>City</label>
            <input type="text" name="city" class="form-control">
        </div>

        <div class="col-6 mx-1">
            <button type="submit" name="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"]== "emptyinput"){
            echo "<p class ='mx-1'>fill in all fields!</p>";
        }elseif($_GET["error"]== "nameexists"){
            echo "<p class ='mx-1'>Input exist!</p>";
        }elseif($_GET["error"]== "invalidEmail"){
            echo "<p class ='mx-1'>Choose a proper email!</p>";
        }elseif($_GET["error"]== "stmtfailed"){
            echo "<p class ='mx-1'>try again!</p>";
        }elseif($_GET["error"]== "nono"){
            echo "<p class ='mx-1'>you have signed in</p>";
        }
    }
    ?>
</body>

</html>