<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="source/bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/intro.css">
    <title>Booting...</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <img src="images/boot-logo.png" class="bootimg" alt="Boot Logo">
            <div class="text-center">
                <div class="spinner-grow text-success" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="source/jquery-3.6.0/cdn-jquery.js"></script>
<script src="source/bootstrap-5.0.2/dist/js/bootstrap.min.js"></script>
<script>
    setTimeout(function(){
        window.location.href = '/role';
    },5000)
</script>
</html>