<?php
    echo '<div class="hidden-xs">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#"><i class="fas fa-user"></i> Account</a></li>
                    <li><a href="stat.php"><i class="fas fa-star"></i> Statistic</a></li>
                    <li><a href="#"><i class="fas fa-bell"></i> Notifications</a></li>
                    <li><a href="#"><i class="fas fa-bookmark"></i> Saved</a></li>
                    <li class="active"><a href="#"><i class="fas fa-home"></i> Home</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="visible-xs">

    <div class="downMenu">

        <div class="menu">
            <div class="element">
                <li><a href="#"><i class="fas fa-user" id="icon"></i></a></li>
            </div>
            <div class="element">
                <li><a href="stat.php"><i class="fas fa-star" id="icon"></i></a></li>
            </div>
            <div class="element">
                <li><a href="#"><i class="fas fa-bell" id="icon"></i></a></li>
            </div>
            <div class="element">
                <li><a href="#"><i class="fas fa-bookmark" id="icon"></i></a></li>
            </div>
            <div class="element">
                <li><a href="#"><i class="fas fa-home" id="icon"></i></a></li>
            </div>
        </div>
    </div>
</div>';
?>