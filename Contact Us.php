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
    <H2>Contact Us</H2>
    <form class="row g-3 container">
        <div class="col-3 mx-1">
            <label for="inputEmail4" class="form-label">First name</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-3">
            <label for="inputEmail4" class="form-label">Last name</label>
            <input type="text" class="form-control">
        </div>
    
        <div class="col-6 mx-1">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-6 mx-1">
            <label for="inputEmail4" class="form-label">Phone</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-6 mx-1">
            <label for="inputEmail4" class="form-label">School</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-6 mx-1">
            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="col-12 mx-1">
            <button type="submit" class="btn btn-primary">Send</button>
        </div>
    </form>

</body>

</html>