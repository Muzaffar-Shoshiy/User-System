<?php
require_once "assets/php/header.php";
include "admin/admin-db2.php";
?>
    <!-- CONTENTS OF ABOUT PAGE -->
    <section id="about-contents-1" class="display_none">
        <img src="assets/img/Bitmap-about-desk.svg" class="bitmap-desktop-about" alt="">
        <div class="bitmap-desktop-about-shed"></div>
        <div class="container display-flex align-items-center">
            <h1 class="heading">About</h1>
        </div>
        <img src="assets/img/oval-about.svg" class="oval-about-2"  alt="">
        <img src="assets/img/oval-about.svg"  class="oval-about-1" alt="">
        <img src="assets/img/oval-2-about.svg" class="oval-about"  alt="">
    </section>
    <section id="about-contents-1-responsive">
        <div class="container">
            <h1 class="text-center">About</h1>
        </div>
    </section>


    <section id="videos" class="display_none" style="width: 100%;height: fit-content;padding: 100px 0;background-color: #fcb72b;">
        <?php
        
            $sql = "SELECT * FROM videos ORDER BY id DESC";
            $res = mysqli_query($con,$sql);
            if(mysqli_num_rows($res)>0){
                while($videos = mysqli_fetch_assoc($res)){ 
        ?>

                    <div class="container">
                        <div class="info-video" style="border-radius:3px;margin:0 auto;width: 980px;padding:10px;background-color:#445567;color:#fcb72b;">
                            <h3 class="heading-video" style="text-align: center;"><?= $videos['heading']; ?></h3>
                            <p class="description-video" style="text-align: center;"><?= $videos['description']; ?></p>
                            <p class="created-at" style="text-align: center;"><?= $videos['created_at']; ?></p>
                        </div>
                        <div class="video" style="margin:50px auto;position: relative;width:1000px;height:500px;border-radius:3px;">
                            <video style="border-radius:3px;" width="1000px" height="500px" controls>
                                <source src="admin/assets/videos/<?= $videos['name']; ?>" type="video/mp4">
                            </video>
                        </div>
                    </div>

        <?php    }
            } 
        
        ?>
    </section>
    <section id="videos-reponsive">
        <?php
        
            $sql = "SELECT * FROM videos ORDER BY id DESC";
            $res = mysqli_query($con,$sql);
            if(mysqli_num_rows($res)>0){
                while($videos = mysqli_fetch_assoc($res)){ 
        ?>

                    
                        <div class="info-video">
                            <h3 class="heading-video" style="text-align: center;"><?= $videos['heading']; ?></h3>
                            <p class="description-video" style="text-align: center;"><?= $videos['description']; ?></p>
                            <p class="created-at" style="text-align: center;"><?= $videos['created_at']; ?></p>
                        </div>
                        <div class="video">
                            <video controls>
                                <source src="admin/assets/videos/<?= $videos['name']; ?>" type="video/mp4">
                            </video>
                        </div>
                

        <?php    }
            } 
        
        ?>
    </section>

    <!-- FOOTER PART  -->
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
    <script>
       $(document).ready(function(){
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
       })
    </script>
</body>
</html>