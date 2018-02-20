<?php
include 'db_connect.php';
if(isset($_POST['login'])) {

    if ($_POST['user'] != '' && $_POST['pass'] != '' ){

        if(strlen($_POST['user']) > 2 && strlen($_POST['pass']) > 5){

            Login($conn);
        }
    }
}

function Login($con){
    $user = $_POST['user'];
    $result = mysqli_query($con, "SELECT * FROM users WHERE username LIKE '$user'");
    $row = mysqli_fetch_assoc($result);
    if (empty($row)){
        //echo ' login failed';
    } else {
        if (md5($_POST['pass']) == $row['password']){
            setcookie("ID", $row['ID']);
            header("Refresh:0");
            exit();
        } else {
            //echo 'Login failed';
        }
    }
}

function UserPosts($con){
    $user = "user_" .$_COOKIE["ID"];

    $query = "SELECT * FROM ".$user;

    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

    if (empty($row)){
        echo '<h2 style="color: white; font-size: 15pt; text-align: center;">You dont have posts yet</h2>';
    } else {
        echo '<h2 style="color: white; font-size: 13pt; text-align: center;">All your posts</h2>';
        echo '<div style="margin-bottom: 80px;>"';

        $num = 0;
        for ($i = 0; $i <= mysqli_num_rows($result); $i++){
            $query2 = "SELECT * FROM ".$user." WHERE ID = ".$num;

            $records = mysqli_query($con, $query2);
            $row2 = mysqli_fetch_assoc($records);
            echo '<img src="';
            echo $row2['image'];
            echo '" style="max-width: 80%; margin-left: 10%;">';
            echo '<h2 style="color:white; text-align: center; margin-top: 10px; margin-bottom: 20px;">';
            echo $row2['smallText'];
            echo '</h2>';
            $num++;
        }
        echo '</div>';
    }
}

?>

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
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/account.css">
    <title>Account</title>
</head>
<body>
<?php include 'navbar.php';
     if(!isset($_COOKIE['ID'])){
        echo '
            <video id="video_bg" autoplay="autoplay" loop="loop">
                <source src="/images/lines.mp4" type="video/mp4" >
            
            </video>
            <div class="visible-xs">
                <h1 style="color: black; text-align: center; font-size: 15pt;">Account <i class="fas fa-user" style="color: black;"></i></h1>
                <div class="center">
                   <form action="account.php" method="post">
                        <input type="text" name="user" placeholder="Your login"><br><br>
                        <input type="password" name="pass" placeholder="Your password"><br><br>
                        <input type="submit" name="login" class="button" value="Log in">
                        <input type="submit" name="register" class="button" value="Register">
                   </form>
                </div>
            </div>';}
     else {
        echo '
            <h1 style="color: white; text-align: center; font-size: 15pt;">Account <i class="fas fa-user" style="color: white;"></i></h1>
            <div class="center">
                <a class="button" style="border: 1px solid white; color: white;"> Add new post</a>
            </div>
        ';

        UserPosts($conn);
     }

?>
</body>
</html>
