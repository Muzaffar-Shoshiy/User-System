<?php

 require_once "assets/php/header.php";
 include "admin/admin-db2.php";

?>
    <section id="two">
        <img src="assets/img/Bitmap.svg" class="bg-image" alt="">
        <div class="img-shed"></div>
        <div class="container">
            <h1 class="heading">IT SERVICES WITH</h1>
            <h1 class="heading-1">MUZAFFAR SHOSHIY</h1>
        </div>
        <div class="info-section display-flex">
            <img src="assets/img/line.svg" class="line" alt="">
            <p class="description">
                IT services refers to the application of business and technical expertise to enable organizations in the creation, management and optimization of or access to information and business processes. The IT services market can be segmented by the type of skills that are employed to deliver the service (design, build, run).
                <a href="about.php" class="btn mt-25">About</a>
            </p>
            <img src="assets/img/arrow-right.svg" class="arrow-right" alt="">
        </div>
    </section>
    <section id="contents-1" class="padding display_none">
        <div class="container">
            <h1 class="text-header">Business Automation</h1>
            <p class="text dim-grey">Business automation is a term for the use of technology applications that perform repetitive tasks, freeing up employees for higher value work. This includes business process automation (BPA), robotic process automation (RPA) and AI-powered automation.</p>
            <a href="https://www.ibm.com/cloud/blog/basics-of-business-automation#:~:text=What%20is%20business%20automation%3F,)%20and%20AI%2Dpowered%20automation." target="_blank" class="btn mt-25">Learn More</a>
        </div>
        <img src="assets/img/Mask.svg" class="bg-img-circles-3 display_none" alt="">
        <img src="assets/img/arrow-left-2.svg" class="bg-img-circles-3 array" alt="">
        <img src="assets/img/business.jpg" class="bg-img-circles-2 business-a" alt=""></div>
    </section>
    <section id="contents-1-responsive" class="">
        <img src="assets/img/business.jpg" class="bg-img-circles-2 business-a" alt="">
        <div class="container">
            <h1 class="text-header">Business Automation</h1>
            <p class="text dim-grey">Business automation is a term for the use of technology applications that perform repetitive tasks, freeing up employees for higher value work. This includes business process automation (BPA), robotic process automation (RPA) and AI-powered automation.</p>
            <a href="https://www.ibm.com/cloud/blog/basics-of-business-automation#:~:text=What%20is%20business%20automation%3F,)%20and%20AI%2Dpowered%20automation." target="_blank" class="btn mt-25">Learn More</a>
        </div>
    </section>
    <section id="contents-1" class="display_none padding">
        <div class="container">
            <div class="float-right">
                <h1 class="text-header">Telegram Bot</h1>
                <p class="text dim-grey">There are thousands of bots developed for Telegram, which can help and perform any function. Bots are “robots” that automate functionality to facilitate, track, post, receive and share information with other users and applications.</p>
                <a href="https://www.cminds.com/blog/wordpress/9-ways-telegram-bots-can-help-business/" target="_blank" class="btn mt-25">Learn More</a>
            </div>
        </div>
        <img src="assets/img/semi-circle.svg" class="bg-img-circles-rev-3" alt="">
        <img src="assets/img/bot-yellow.jpg" class="bg-img-circles-rev-2 business-a" alt=""></div>
    </section>
    <section id="contents-1-responsive" class="">
        <img src="assets/img/bot-yellow.jpg" class="bg-img-circles-2 business-a" alt=""></div>
        <div class="container">
            <h1 class="text-header">Telegram Bot</h1>
            <p class="text dim-grey">There are thousands of bots developed for Telegram, which can help and perform any function. Bots are “robots” that automate functionality to facilitate, track, post, receive and share information with other users and applications.</p>
            <a href="https://www.cminds.com/blog/wordpress/9-ways-telegram-bots-can-help-business/" target="_blank" class="btn mt-25">Learn More</a>
        </div>
    </section>
    <section id="contents-1" class="padding display_none mb-2">
        <div class="container">
            <h1 class="text-header">Platforms For Education</h1>
            <p class="text dim-grey">Elearning platforms are tools that any company or educational center should use today. The reason? Today more than ever, education requires modernization and, above all, adaptation to the needs of today’s market, which demands more educational technology as well as flexibility and accessibility.</p>
            <a href="https://pedagoo.com/benefits-of-elearning-platforms-for-education/?lang=en" target="_blank" class="btn mt-25">Learn More</a>
        </div>
        <img src="assets/img/Mask.svg" class="bg-img-circles-3" alt="">
        <img src="assets/img/edu-e.jpg" class="bg-img-circles-2 business-a" alt=""></div>
    </section>
    <section id="contents-1-responsive" class="">
        <img src="assets/img/edu-e.jpg" class="bg-img-circles-2 business-a" alt=""></div>
        <div class="container">
            <h1 class="text-header">Platforms For Education</h1>
            <p class="text dim-grey">Elearning platforms are tools that any company or educational center should use today. The reason? Today more than ever, education requires modernization and, above all, adaptation to the needs of today’s market, which demands more educational technology as well as flexibility and accessibility.</p>
            <a href="https://pedagoo.com/benefits-of-elearning-platforms-for-education/?lang=en" target="_blank" class="btn mt-25">Learn More</a>
        </div>
    </section>
    <section id="carousel" class="display_none">
        <div class="container">
            <ul class="slider">

                <?php
                    
                    $sql = "SELECT * FROM companies ORDER BY id DESC";
                    $res = mysqli_query($con,$sql);
                    if(mysqli_num_rows($res)>0){
                        while($companies = mysqli_fetch_assoc($res)){ 
                ?>

                    <li class="carousel-list-items">
                        <a href="https://<?= $companies['weblink'] ?>" target="_blank">
                            <img src="admin/assets/images/<?= $companies['name']; ?>" class="carousel-images" width="405px" alt="">
                        </a>
                    </li>

                <?php    }
                    } 

                ?>

            </ul>
        </div>
    </section>
    <section id="carousel-responsive">
                <h1 class="text-header mb-25">Companies Using <span class="color-yellow">ShoshiyIT</span> Services</h1>
                <!-- <ul class="logos-list"> -->
                <?php
                    
                    $sql = "SELECT * FROM companies ORDER BY id DESC";
                    $res = mysqli_query($con,$sql);
                    if(mysqli_num_rows($res)>0){
                        while($companies = mysqli_fetch_assoc($res)){ 
                ?>

                    <!-- <li > -->
                        <a class="company-logos-items" href="https://<?= $companies['weblink'] ?>" target="_blank">
                            <img src="admin/assets/images/<?= $companies['name']; ?>" class="carousel-images" alt="">
                        </a>
                    <!-- </li> -->

                <?php    
                        }
                    } 
                ?>
                <!-- </ul> -->
    </section>
    <section id="carousel" style="margin-top: 150px;" class="display_none">
        <div class="container">
            <ul class="slider">

                <?php
                    
                    $sql = "SELECT * FROM reviews ORDER BY id DESC";
                    $res = mysqli_query($con,$sql);
                    if(mysqli_num_rows($res)>0){
                        while($reviews = mysqli_fetch_assoc($res)){ 
                ?>

                    <li>
                        <div class="reviews" style="border: 10px solid #445567;background-color:#fcb72b;border-radius:5px;width:405px;height:500px;">
                            <div class="img" style="margin: 20px auto; border-radius: 50%;background-color:#445567;overflow:hidden;position:relative;width:170px;height:170px;">
                                    <img src="admin/assets/images/<?= $reviews['image']; ?>" class="carousel-images" style="border-radius: 50%;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:150px;height:150px;" alt="">
                            </div>
                            <h2 style="text-align: center;"><?=$reviews['name'];?></h2>
                            <p style="text-align: center;"><?=$reviews['job_title'];?></p>
                            <p style="text-align: center;"><?=$reviews['description'];?></p>
                            <p style="text-align: center;"><?=$reviews['created_at'];?></p>
                        </div>
                    </li>

                <?php    }
                    } 

                ?>

            </ul>
        </div>
    </section>
    <section id="company-reviews">
        <h1 class="text-header mb-25"><span class="color-yellow">Reviews</span>From Company Owner's</h1>
                <?php
                    
                    $sql = "SELECT * FROM reviews ORDER BY id DESC";
                    $res = mysqli_query($con,$sql);
                    if(mysqli_num_rows($res)>0){
                        while($reviews = mysqli_fetch_assoc($res)){ 
                ?>

                    <!-- <li> -->
                        <div class="reviews">
                            <div class="img">
                                <img src="admin/assets/images/<?= $reviews['image']; ?>" class="carousel-images reviews-carousel" alt="">
                            </div>
                            <h2 style="text-align: center;"><?=$reviews['name'];?></h2>
                            <p style="text-align: center;"><?=$reviews['job_title'];?></p>
                            <p style="text-align: center;"><?=$reviews['description'];?></p>
                            <p style="text-align: center;"><?=$reviews['created_at'];?></p>
                        </div>
                    <!-- </li> -->

                <?php    }
                    } 

                ?>

    </section>
    <section id="resume">
                <?php
                    
                    $sql = "SELECT resume FROM resume";
                    $res = mysqli_query($con,$sql);
                    if(mysqli_num_rows($res)>0){
                        while($resumes = mysqli_fetch_assoc($res)){ 
                ?>

                    <div style="display: grid;">
                        <i class="fa-regular fa-file-pdf" style="margin:20px auto;font-size: 35px;color: #fcb72b;font-weight:bold;"></i>
                        <a href="admin/assets/images/<?= $resumes['resume']; ?>" style="color: #fcb72b;font-weight:bold;">Download CV</a>
                    </div>

                <?php    }
                    } 

                ?>
    </section>
    <section id="pre-footer" class="display-flex align-items-center display_none">
        <div class="shed"></div>
        <div class="container display-flex align-items-center just-cont-between">
            <p class="footer-text">
                Contect Us Today And<br>
                Get <span class="color-yellow">5% Discount </span><br> 
                For Our Services 
            </p>
            <div class="nav-btn">
                <a href="assets/php/logout.php" class="nav-link btn"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
            </div>
        </div>
        <img class="bg-img-circles-1 display_none" src="assets/img/aylana.svg" alt="">
        <img class="bg-img-circles-2 display_none" src="assets/img/aylana.svg" alt="">
        <img class="bg-img-circles-3 display_none" src="assets/img/doira.svg" alt="">
    </section>
    <section id="pre-footer-responsive">
        <div class="shed"></div>
        <div class="d-grid">
            <p class="footer-text">
                Contact Us Today And
                Get <span class="color-yellow">5% Discount </span>
                For Our Services 
            </p>
            <div class="nav-btn">
                <a href="assets/php/logout.php" class="nav-link btn"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
            </div>
        </div>
    </section>
    <section id="footer" class="display-flex just-cont-between align-items-center display_none">
        <div class="container display-flex just-cont-between align-items-center">
            <nav class="nav display-flex align-items-center">
                <a class="logo" href="home.php">ShoshiyIT</a>
            </nav>
            <div class="display-flex align-items-center">
                <a href="https://www.instagram.com/muzaffar_shoshiy/" target="_blank" class="icons"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="https://www.instagram.com/muzaffar_shoshiy/" target="_blank" class="icons"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://web.telegram.org/z/#-465879425" target="_blank" class="icons"><i class="fa-brands fa-telegram"></i></a>
            </div>
        </div>
    </section>
    <section id="footer-responsive" class="">
        <div class="container">
            <h1 class="text-center">
               <a class="footer-logo dim-grey" href="home.php">ShoshiyIT</a>            
            </h1>
            <div class="display-flex just-cont-center align-items-center mt-1">
                <a href="https://www.instagram.com/muzaffar_shoshiy/" target="_blank" class="icons"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="https://www.instagram.com/muzaffar_shoshiy/" target="_blank" class="icons"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://web.telegram.org/z/#-465879425" target="_blank" class="icons"><i class="fa-brands fa-telegram"></i></a>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        $(document).ready(function(){
            // fetch notification
            fetchNotification()
            function fetchNotification(){
                $.ajax({
                    url: "assets/php/process.php",
                    method: "post",
                    data: { action: "fetchNotification" },
                    success:function(response){
                        // console.log(response)
                        $("#showAllNotification").html(response)
                    }
                })
            }
            // check notification
            checkNotification()
            function checkNotification(){
                $.ajax({
                    url: "assets/php/process.php",
                    method: "post",
                    data: { action: "checkNotification" },
                    success:function(response){
                        // console.log(response)
                        $("#checkNotification").html(response)
                    }
                })
            }
            // remove notification
            $("body").on("click", ".close", function(e){
                e.preventDefault()

                notification_id = $(this).attr("id")

                $.ajax({
                    url: "assets/php/process.php",
                    method: "post",
                    data: { notification_id: notification_id },
                    success:function(response){
                        checkNotification()
                        fetchNotification()
                    }
                })
            })
        })
        $('.slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            dots: true,
            prevArrow: '<span class="next_arrow"><i class="fa-solid fa-arrow-right"></i></span>',
            nextArrow: '<span class="prev_arrow"><i class="fa-solid fa-arrow-left"></i></span>'
        });
    </script>
</body>
</html>