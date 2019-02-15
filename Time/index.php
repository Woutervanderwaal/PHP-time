<?php

$hour = date(H);
$hour++;

  
$minute = date(i);

$dayImg = array("img/morning.png", "img/afternoon.png", "img/evening.png", "img/night.png");

$timeWord;

if($hour >= 6 And $hour <= 12)
{
    $timeWord = "Morgen";
    $background = $dayImg[0];
}

if($hour >= 12 And $hour <= 18)
{
    $timeWord = "Middag";
    $background = $dayImg[1];
}

if($hour >= 18 And $hour <= 0)
{
    $timeWord = "Avond";
    $background = $dayImg[2];    
}

if($hour >= 0 And $hour <= 6)
{
    $timeWord = "Nacht";
    $background = $dayImg[3];
}

?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    </head>
    <body>
    <div id="box">
        <div id="container">
            <h1><?php print("Goede ".$timeWord) ?></h1>
            <h1 id="whatsthetime"><?php print("Het is nu ".$hour.':'.$minute) ?></h1>
        </div>
    </div>
    <style>
        #box
        {
            background-image:url('<?php echo $background ?>');
        }
    </style>

    <script>
        function checkTime(i) {
  if (i < 10) {
    i = "0" + i;
  }
  return i;
}

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    
    m = checkTime(m);
    document.getElementById('whatsthetime').innerHTML = "Het is nu " + h + ":" + m;
    t = setTimeout(function() {
        startTime()
    }, 250);
    }
startTime();

var timeWord;

var today = new Date();
var h = today.getHours();

if(h >= 6 && h <= 12)
{
    timeWord = "Morgen";
    document.getElementById("box").style.background = "url('img/morning.png')";
}

if(h >= 12 && h <= 18)
{
    timeWord = "Middag";
    document.getElementById("box").style.background = "url('img/afternoon.png')";
}

if(h >= 18 && h <= 0)
{
    timeWord = "Avond";
    document.getElementById("box").style.background = "url('img/evening.png')";
}

if(h >= 0 && h <= 6)
{
    timeWord = "Nacht";
    document.getElementById("box").style.background = "url('img/night.png')";
}



    </script>
    </body>
</html>