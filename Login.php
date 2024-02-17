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
    <H2>Login</H2>
    <form action="Register.inc.php" method="post">
        <div class="mb-3 col-3 mx-1">
            <label>Email address</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="mb-3 col-3 mx-1">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <p><a href="Register.php" class="pe-auto mx-1">register</a></p>
        <div class="mx-1">
            <button type="submit" name="Submit" class="btn btn-primary">Login</button>
        </div>
    </form>

</body>

</html>