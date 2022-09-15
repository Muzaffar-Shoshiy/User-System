<?php
require_once "assets/php/admin-header.php";
?>

<div class="container h-75">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-lg-5">
                <div class="card border-primary shadow-lg">
                    <div class="card-header bg-primary">
                        <h3 class="m-0 text-white">
                            <i class="fas fa-copyright"></i>
                            &nbsp;
                            Upload Reviews
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="admin-reviews.php" method="post" enctype="multipart/form-data" class="px-3" id="admin-video-form">
                            <div id="adminLoginAlert"></div>
                            <div class="form-group">
                                <input type="file" name="file" class="form-control form-control-lg rounded-0">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Full Name" name="name" class="form-control form-control-lg rounded-0">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Job Title" name="job_title" class="form-control form-control-lg rounded-0">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Description" name="description" class="form-control form-control-lg rounded-0">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="uploadReviews" class="btn btn-primary btn-block btn-lg rounded-0 text-white" value="Upload Review" id="adminVideoBtn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<?php

    include ("admin-db2.php");
    if (isset($_POST["uploadReviews"])){
        $image = $_FILES["file"]["name"];
        $name = $_POST["name"];
        $job_title = $_POST["job_title"];
        $description = $_POST["description"];
        $tmp = $_FILES["file"]["tmp_name"];

        move_uploaded_file($tmp, "assets/images/".$image);

        $sql = "INSERT INTO reviews (image, name, job_title, description) VALUES('$image','$name','$job_title','$description')";
        $res = mysqli_query($con,$sql);
        if($res == 1){
            echo "<h1 class='text-center'>Infos Inserted Successfully!</h1>";
        }else{
            echo "<h1>Something Went Wrong...</h1>";
        }

    }

?>