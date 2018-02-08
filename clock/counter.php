<?php
/*This is a countdown timer
 * Burning Man 8-25-2020
 */

//VARIABLES
    $secPerMinutes = 60;
    $secPerHour = 60 * $secPerMinutes;
    $secPerDay = 24 * $secPerHour;
    $secPerYear = 365 * $secPerDay;

    //current time variable
    $now = time();

    //Burning man time -- starts with 12 (noon) -- show difference in seconds
    $burningManTime = mktime(12,0,0,8,25,2020);

    //Number of seconds between then an now
    $seconds = $burningManTime - $now;
    $Years = floor($seconds/$secPerYear);

    //Subtract 2 years of seconds out of the current second to get days
    $seconds = $seconds - ($Years * $secPerYear);
    $Days = floor($seconds / $secPerDay);

    $seconds = $seconds -($Days * $secPerDay);
    $Hours =  floor($seconds / $secPerHour);

    $seconds = $seconds - ($Hours * $secPerHour);
    $Minutes = floor($seconds / $secPerMinutes);
    $Seconds = $seconds - ($Minutes * $secPerMinutes);








?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Counter</title>
    <link rel="stylesheet" type="text/css" href="../css/mystyles.css"/>
</head>

<body>
<div class="page-wrap">
    <header class="site-header">
        <?php include "../includes/header.php" ?>
    </header>
    <div class="flex-box">
        <nav class="main-nav">
            <?php include "../includes/menu.php" ?>
        </nav>
        <section class="main-content">

            <h2>Burning Man</h2>
            <div class="content">
                1970-Now: <?=$now?> secs <br>
                1970 - Burning Time: <?=$burningManTime?> secs <br>
                Now to Burning Man: <?=$seconds?> secs. <br>
                Years untill Burning Man: <?=$Years?> <br>
                Days untill Burning Man: <?=$Days?><br>
                Hours untill Burning Man: <?=$Hours?><br>
                Minutes untill Burning Man: <?=$Minutes?><br>
                Seconds untill Burning Man: <?=$Seconds?><br>

            </div>
        </section>
        <aside class="right-sidebar">Sidebar</aside>
    </div><!--end flex box here-->

    <footer>
        <?php include "../includes/footer.php" ?>
    </footer>
</div><!--/page wrap-->
</body>
</html>


