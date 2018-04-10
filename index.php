<?php
date_default_timezone_set('Africa/Lagos');
$date = date('l, M d, Y');
$time = date('G:i');
?>
<!DOCTYPE html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Alegreya|Allura|Almendra SC|Romanesco' rel='stylesheet'>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
        <div id=a class="header">
            <div class="header-text title"><span>HNG Internship 4</span></div>
            <div class="header-text about">About</div>
        </div>
        <div class="body">
            <div class="main"><span class="text">Oluwamelody Tech</span></div>
            <div class="under"><span>Lagos | NG</span></div>
        </div>
        <div class="footer">
            <span><?= $date ?> <br/> <?= $time ?></span>
        </div>
    </div>

</body>
</html>


