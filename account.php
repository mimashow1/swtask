<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/account.css">
    <title>Account</title>
</head>
<body>
<?php include 'navbar.php'; ?>

<video id="video_bg" autoplay="autoplay" loop="loop">
    <source src="/images/bg.mp4" type="video/mp4"></source>

</video>
<div class="visible-xs">
    <h1 style="color: white; text-align: center; font-size: 15pt;">Account <i class="fas fa-user"></i></h1>
    <div class="center">
        <input type="text" placeholder="Your login"><br><br>
        <input type="password" placeholder="Your password"><br><br>
        <a class="button">Log in</a>
        <a class="button">Register</a>
    </div>
</div>
</body>
</html>