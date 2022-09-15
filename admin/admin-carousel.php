<?php
require_once "assets/php/admin-header.php";
?>

<div class="container h-75">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-lg-5">
                <div class="card border-warning shadow-lg">
                    <div class="card-header bg-warning">
                        <h3 class="m-0 text-white">
                            <i class="fas fa-copyright"></i>
                            &nbsp;
                            Upload Image & Companies Official Website
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="admin-carousel.php" method="post" enctype="multipart/form-data" class="px-3" id="admin-video-form">
                            <div id="adminLoginAlert"></div>
                            <div class="form-group">
                                <input type="file" name="file" class="form-control form-control-lg rounded-0">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Website Link" name="link" class="form-control form-control-lg rounded-0">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="uploadCarousel" class="btn btn-warning btn-block btn-lg rounded-0 text-white" value="Upload Image" id="adminVideoBtn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<?php

    include ("admin-db2.php");
    if (isset($_POST["uploadCarousel"])){
        $name = $_FILES["file"]["name"];
        $link = $_POST["link"];
        $tmp = $_FILES["file"]["tmp_name"];

        move_uploaded_file($tmp, "assets/images/".$name);

        $sql = "INSERT INTO companies (name, weblink) VALUES('$name','$link')";
        $res = mysqli_query($con,$sql);
        if($res == 1){
            echo "<h1 class='text-center'>Image & Link Inserted Successfully!</h1>";
        }else{
            echo "<h1>Something Went Wrong...</h1>";
        }

    }

?>