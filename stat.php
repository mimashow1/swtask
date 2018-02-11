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
    <link rel="stylesheet" type="text/css" href="css/stat.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Statistic</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        window.onload = function () {
            localStorage.setItem("Likes", 1);
            localStorage.setItem("LikesMe", 3);
            localStorage.setItem("Guests", 2);

            var sum = parseInt(localStorage.getItem('Likes')) + parseInt(localStorage.getItem('LikesMe')) + parseInt(localStorage.getItem('Guests'));
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                backgroundColor: "#161823",
                title:{
                    text: "Total " + sum,
                    horizontalAlign: "center",
                    verticalAlign: "center",
                    fontColor: "white"
                },
                data: [{
                    type: "doughnut",
                    startAngle: 60,
                    //innerRadius: 60,
                    indexLabelFontColor: "white",
                    indexLabelFontSize: 17,

                    dataPoints: [
                        { y: localStorage.getItem('Likes'), label: "My likes" },
                        { y: localStorage.getItem('LikesMe'), label: "Likes" },
                        { y: localStorage.getItem('Guests'), label: "Guests" }

                    ]
                }]
            });
            chart.render();

        }
    </script>
</head>
<body>
<?php include 'navbar.php'; ?>
<script>
    function dodajAktywne(elem) {
        // get all 'a' elements
        var card = document.getElementsByClassName('card');
        // loop through all 'a' elements
        for (i = 0; i < card.length; i++) {
            // Remove the class 'active' if it exists
            card[i].classList.remove('selected')
        }
        // add 'active' classs to the element that was clicked
        elem.classList.add('selected');
    }
</script>
<h1 style="color: white; text-align: center; font-size: 15pt;">Statistic <i class="fas fa-star"></i></h1>

<div class="scrolling-wrapper">
    <div class="card selected" onclick="dodajAktywne(this)"><h2>January</h2></div>
    <div class="card" onclick="dodajAktywne(this)"><h2>February</h2></div>
    <div class="card" onclick="dodajAktywne(this)"><h2>March</h2></div>
    <div class="card" onclick="dodajAktywne(this)"><h2>April</h2></div>
    <div class="card" onclick="dodajAktywne(this)"><h2>May</h2></div>
    <div class="card" onclick="dodajAktywne(this)"><h2>June</h2></div>
    <div class="card" onclick="dodajAktywne(this)"><h2>July</h2></div>
    <div class="card" onclick="dodajAktywne(this)"><h2>August</h2></div>
    <div class="card" onclick="dodajAktywne(this)"><h2>September</h2></div>
    <div class="card" onclick="dodajAktywne(this)"><h2>October</h2></div>
    <div class="card" onclick="dodajAktywne(this)"><h2>November</h2></div>
    <div class="card" onclick="dodajAktywne(this)"><h2>December</h2></div>
</div>

<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</body>
</html>