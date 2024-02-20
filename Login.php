<?php
include_once 'Header.php'
?>
    <H2>Login</H2>
    <form action="include/Login.inc.php" method="post">
        <div class="mb-3 col-3 mx-1">
            <label>Email / phone / ID</label>
            <input type="text" name="uid" class="form-control">
        </div>
        <div class="mb-3 col-3 mx-1">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <p class= "mx-1"><a href="Register.php" class="pe-auto mx-1">register</a></p>
        <div class="mx-1">
            <button type="submit" name="Submit" class="btn btn-primary">Login</button>
        </div>
    </form>
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"]== "emptyinput"){
            echo "<p class ='mx-1'>fill in all fields!</p>";
        }elseif($_GET["error"]== "wornglogin"){
            echo "<p class ='mx-1'>Wrong In!</p>";
        }
    }
    ?>
</body>

</html>