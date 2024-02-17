<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weselt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
</head>

<body>
<?php
include_once 'Header.php'
?>
    <H1>Welcome to WESELT!</H1>
    <form action="Register.inc.php" method="post">
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
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="col-md-6 mx-1">
            <label>Birth date</label>
            <input type="text" name="birth" class="form-control">
        </div>
        <div class="col-md-6 mx-1">
            <label>ID</label>
            <input type="text" name="ID" class="form-control">
        </div>
        <div class="col-md-6 mx-1">
            <label>Country</label>
            <input type="text" name="country" class="form-control">
        </div>
        <div class="col-md-6 mx-1">
            <label>City</label>
            <input type="text" name="city" class="form-control">
        </div>
        
        
        <div class="col-md-12 mx-1">
            <button type="submit" name="submit" class="btn btn-primary">Send</button>
        </div>
    </form>

</body>

</html>