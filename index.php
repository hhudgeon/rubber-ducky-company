<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>The Ducky Company</title>
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <meta name="description" content="The Ducky Company">
    <meta name="keywords" content="The Ducky Company Home Page">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fascinate+Inline&family=Poppins:ital,wght@0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/styles.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>

<!---------------- START Navbar ------------------>
<?php include "includes/header.php"; ?>
<!---------------- END Navbar ------------------>

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container transparent_bg">

            <h1 class="header center white-text">The Ducky Company</h1>
            <div class="row center">
                <h4 class="header col s12 white-text">Biodegradable duckies that want to explore the world!</h4>
            </div>
        </div>
    </div>

    <div class="parallax"><img src="images/duck_splash.jpg" alt="Rubber ducky splashing in the water.">
    </div>
</div> <!--ends parallax container-->

<!---------------- START footer ------------------>
<?php include "includes/footer.php"; ?>

<!---------------- END footer ------------------>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>
