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
        if ( !Storage.prototype.setObject ) {
            Storage.prototype.setObject = function(key, value) {
                this.setItem(key, JSON.stringify(value));
            }
        }

        if ( !Storage.prototype.getObject ) {
            Storage.prototype.getObject = function(key) {
                var value = this.getItem(key);
                return value && JSON.parse(value);
            }
        }

        window.onload = function () {

            var array = [];
            var testObj = new Object();
            testObj.likes = 5;
            testObj.likesMe = 20;
            testObj.guests = 15;
            testObj.month = "January";
            testObj.userID = 2;
            array.push(testObj);

            var testObj2 = new Object();
            testObj2.likes = 8;
            testObj2.likesMe = 1;
            testObj2.guests = 39;
            testObj2.month = "February";
            testObj2.userID = 2;
            array.push(testObj2);
            localStorage.setObject('dan16laz',array);

        }



        function dodajAktywne(elem) {
            var card = document.getElementsByClassName('card');
            for (i = 0; i < card.length; i++) {
                card[i].classList.remove('selected');

            }
            var cookieValue = elem.getAttribute("data-value");
            elem.classList.add('selected');

            console.log(cookieValue);

                var alldata = localStorage.getObject("dan16laz");
                for (i = 0; i < alldata.length; i++){
                    if (alldata[i].month === cookieValue){
                        var temp = alldata[i];
                    }
                }



                var sum = parseInt(temp.likes) + parseInt(temp.likesMe) + parseInt(temp.guests);
                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    backgroundColor: "#161823",
                    title: {
                        text: "Total " + sum,
                        horizontalAlign: "center",
                        verticalAlign: "center",
                        fontColor: "white"
                    },
                    data: [{
                        type: "doughnut",
                        startAngle: 0,
                        //innerRadius: 60,
                        indexLabelFontColor: "white",
                        indexLabelFontSize: 17,

                        dataPoints: [
                            {y: temp.likes, label: "My likes"},
                            {y: temp.likesMe, label: "Likes"},
                            {y: temp.guests, label: "Guests"}

                        ]
                    }]
                });
                chart.render();

        }
    </script>
</head>
<body>
<?php include 'navbar.php'; ?>

<h1 style="color: white; text-align: center; font-size: 15pt;">Statistic <i class="fas fa-star"></i></h1>

<div class="scrolling-wrapper">
    <div class="card" onclick="dodajAktywne(this)" data-value="January"><h2>January</h2></div>
    <div class="card" onclick="dodajAktywne(this)" data-value="February"><h2>February</h2></div>
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