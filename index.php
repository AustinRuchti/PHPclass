<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Class - Austin Ruchti</title>
    <link rel="stylesheet" type="text/css" href="css/mystyles.css"/>
</head>

<body>
<div class="page-wrap">
    <header class="site-header">
        <?php include "includes/header.php" ?>
    </header>
    <div class="flex-box">
    <nav class="main-nav">
       <?php include "includes/menu.php" ?>
    </nav>
    <section class="main-content">
        <div class="img">/*insert image and tag*/</div>
        <h2>Hello! (insert content here)</h2>
        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Proin tempus pellentesque est maximus sodales. Cras pellentesque augue porta
                accumsan sollicitudin.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Proin tempus pellentesque est maximus sodales. Cras pellentesque augue porta
                accumsan sollicitudin.</p>
        </div>
    </section>
    <aside class="right-sidebar">Sidebar</aside>
    </div><!--end flex box here-->

    <footer>
        <?php include "includes/footer.php" ?>
    </footer>
</div><!--/page wrap-->
</body>
</html>


