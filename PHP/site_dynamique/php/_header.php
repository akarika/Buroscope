<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>HOTEL DELUXE - <?php echo $title ;?></title>
    <meta name="description" content="<?php echo $description ;?>">
    <?php if (!empty($slidesOutput)&& $pageEnCours=="home") :   ?>
    <link rel="stylesheet" href="js/slick/slick.css">
    <link rel="stylesheet" href="js/slick/slick-theme.css">
    <?php   endif;?>
    <link rel="stylesheet" href="icon/font/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

</head>
<body>
<header>
    <div id="top-header" class="container">
        <h1 id="logo">HOTEL<span>DELUXE</span> <em>Hotel & motel Theme</em></h1>
        <nav>
            <ul id="menu">
                <li><a <?php if ($pageEnCours =="home"){echo 'class="active" ';}?>href="#">START</a></li>
                <li><a <?php if ($pageEnCours =="facilities"){echo 'class="active" ';}?>href="#">FACILITIES</a></li>
                <li><a <?php if ($pageEnCours =="restaurant"){echo 'class="active" ';}?>href="#">RESTAURANT</a></li>
                <li><a <?php if ($pageEnCours =="conference"){echo 'class="active" ';}?>href="#">CONFERENCE</a></li>
                <li><a <?php if ($pageEnCours =="bookings"){echo 'class="active" ';}?>href="#">BOOKINGS</a></li>
                <li><a <?php if ($pageEnCours =="contact"){echo 'class="active" ';}?>href="#">CONTACT US</a></li>
            </ul>
        </nav>
    </div>
    <div id="banner">
        <div>
            <p><span>Hello</span>, You've Reached</p>
            <hr/>
            <h2>HOTEL DELUXE</h2>
            <hr/>
            <p>HOTEL - SPA SALOON - FINE DINING</p>
        </div>
    </div>
    <form id="price-form" action="" method="post">
        <div>
            <label>Arrival</label>
            <input type="date" name="arrival" placeholder="21/08/2013">
        </div>
        <div>
            <label>Departure</label>
            <input type="date" name="departure" placeholder="23/08/2013">
        </div>
        <div>
            <label>Arrival</label>
            <select name="room-type">
                <option value="stdS">Standard Single Room</option>
                <option value="stdD">Standard Double Room</option>
                <option value="luxS">Luxe Single Room</option>
                <option value="luxS">Luxe Double Room</option>
            </select>
        </div>
        <div>
            <input type="submit" name="submit" value="View Prices">
        </div>
    </form>
</header>