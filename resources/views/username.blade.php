<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="source/bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="source/bootstrap-5.0.2/dist/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata&effect=anaglyph">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Log In</title>
</head>
<body>
    <div class="container">
        <img src="images/whois.png" class="profile-img" alt="Profile">
        <h3 class="font-effect-anaglyph user">Username</h3>
        <form action="/login">
            <div class="input-group w-25 passform">
                <input type="text" class="form-control" placeholder="Username" aria-label="UserPass" aria-describedby="button-addon2">
                <button class="btn btn-outline-success" type="submit" id="button-addon2"><span class="fa Example of arrow-circle-right fa-arrow-circle-right"></span></button>
            </div>
        </form>
    </div>
</body>
<script src="source/jquery-3.6.0/cdn-jquery.js"></script>
<script src="source/bootstrap-5.0.2/dist/js/bootstrap.min.js"></script>
</html>