<?php
    require_once "assets/php/session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/header.css"> -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <!-- SECTION NAVIGATION AND LOGO PART -->
    <section id="one" class="display-flex just-cont-between align-items-center">
        <div class="container display-flex just-cont-between align-items-center">
            <nav class="nav display-flex align-items-center">
                <a class="logo" href="home.php">ShoshiyIT</a>
                <ul class="nav-list m-0 p-0 display-flex just-cont-between align-items-center">
                    <li class="nav-list-item">
                        <a class="nav-link <?= (basename($_SERVER["PHP_SELF"]) == "home.php")? "active":""; ?>" href="home.php"><i class="fas fa-home"></i>&nbsp;Home</a>
                    </li>
                    <li class="nav-list-item">
                        <a class="nav-link <?= (basename($_SERVER["PHP_SELF"]) == "about.php")? "active":""; ?>" href="about.php"><i class="fa-solid fa-house-user"></i>&nbsp;About Us</a>
                    </li>
                    <li class="nav-list-item">
                        <a class="nav-link <?= (basename($_SERVER["PHP_SELF"]) == "profile.php")? "active":""; ?>" href="profile.php"><i class="fas fa-user-circle"></i>&nbsp;Profile</a>
                    </li>
                    <li class="nav-list-item">
                        <a class="nav-link <?= (basename($_SERVER["PHP_SELF"]) == "feedback.php")? "active":""; ?>" href="feedback.php"><i class="fas fa-comment-dots"></i>&nbsp;Feedback</a>
                    </li>
                    <li class="nav-list-item">
                        <a class="nav-link <?= (basename($_SERVER["PHP_SELF"]) == "notification.php")? "active":""; ?>" href="notification.php"><i class="fas fa-bell"></i>&nbsp;Notification&nbsp;<span id="checkNotification" style="color: red;"></span></a>
                    </li>
                    <li class="nav-list-item">
                        <a href="profile.php" class="nav-link"><i class="fas fa-user-cog"></i>&nbsp;Hi!&nbsp;<?=$fname; ?></a>
                    </li>
                </ul> 
            </nav>
            <div class="nav-btns display-flex align-items-center">
                <div class="profile-icon" style="width: 55px;height: 55px;border-radius: 50%;position: relative;display: flex;justify-content: center;align-items: center;overflow: hidden;margin-right:50px;">
                    <?php if(!$cphoto): ?>
                        <img src="assets/img/default-user-icon.jpg" class="profile-icon-img" style="width: 55px;height: 55px;position: absolute;" alt="">
                    <?php else: ?>
                        <img src="<?= 'assets/php/'.$cphoto; ?>" class="profile-icon-img" style="width: 55px;height: 55px;position: absolute;" alt="">
                    <?php endif; ?>
                </div>
                <a href="assets/php/logout.php" class="nav-link btn"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
            </div>
        </div>
    </section>

    <!-- RESPONSIVE DESIGN -->
    <nav class="responsive-nav">
        <input type="checkbox" id="check">
        <label for="check" class="checkBtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">ShoshiyIT</label>
        <ul>
            <li class="nav-list-item">
                <a class="nav-link <?= (basename($_SERVER["PHP_SELF"]) == "home.php")? "active":""; ?>" href="home.php"><i class="fas fa-home"></i>&nbsp;Home</a>
            </li>
            <li class="nav-list-item">
                <a class="nav-link <?= (basename($_SERVER["PHP_SELF"]) == "about.php")? "active":""; ?>" href="about.php"><i class="fa-solid fa-house-user"></i>&nbsp;About Us</a>
            </li>
            <li class="nav-list-item">
                <a class="nav-link <?= (basename($_SERVER["PHP_SELF"]) == "profile.php")? "active":""; ?>" href="profile.php"><i class="fas fa-user-circle"></i>&nbsp;Profile</a>
            </li>
            <li class="nav-list-item">
                <a class="nav-link <?= (basename($_SERVER["PHP_SELF"]) == "feedback.php")? "active":""; ?>" href="feedback.php"><i class="fas fa-comment-dots"></i>&nbsp;Feedback</a>
            </li>
            <li class="nav-list-item">
                <a class="nav-link <?= (basename($_SERVER["PHP_SELF"]) == "notification.php")? "active":""; ?>" href="notification.php"><i class="fas fa-bell"></i>&nbsp;Notification&nbsp;<span id="checkNotification" style="color: red;"></span></a>
            </li>
            <li class="nav-list-item">
                <a href="profile.php" class="nav-link"><i class="fas fa-user-cog"></i>&nbsp;Hi!&nbsp;<?=$fname; ?></a>
            </li>
            <li class="nav-list-item">
                <a href="assets/php/logout.php" class="nav-link btn" style="margin: auto;"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>            </li>
            <li class="nav-list-item">
                <div class="profile-icon" style="width: 100px;height: 100px;border-radius: 50%;position: relative;display: flex;justify-content: center;align-items: center;overflow: hidden;margin:20px auto;">
                    <?php if(!$cphoto): ?>
                        <img src="assets/img/default-user-icon.jpg" class="profile-icon-img" style="width: 100px;height: 100px;position: absolute;" alt="">
                    <?php else: ?>
                        <img src="<?= 'assets/php/'.$cphoto; ?>" class="profile-icon-img" style="width: 100px;height:100px;position: absolute;" alt="">
                    <?php endif; ?>
                </div>
            </li>
        </ul>
    </nav>