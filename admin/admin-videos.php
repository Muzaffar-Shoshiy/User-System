<?php

    require_once "assets/php/admin-header.php";

?>




<div class="container h-75">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-lg-5">
                <div class="card border-success shadow-lg">
                    <div class="card-header bg-success">
                        <h3 class="m-0 text-white">
                            <i class="fas fa-video"></i>
                            &nbsp;
                            Upload Videos
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="admin-videos.php" method="post" enctype="multipart/form-data" class="px-3" id="admin-video-form">
                            <div id="adminLoginAlert"></div>
                            <div class="form-group">
                                <input type="file" name="file" class="form-control form-control-lg rounded-0">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Heading" name="heading" class="form-control form-control-lg rounded-0">
                            </div>
                            <div class="form-group">
                                <textarea type="text" placeholder="Description" name="description" class="form-control form-control-lg rounded-0"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="upload" class="btn btn-success btn-block btn-lg rounded-0" value="Upload Video" id="adminVideoBtn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<?php

    include ("admin-db2.php");
    if (isset($_POST["upload"])){
        $name = $_FILES["file"]["name"];
        $heading = $_POST["heading"];
        $description = $_POST["description"];
        $tmp = $_FILES["file"]["tmp_name"];

        move_uploaded_file($tmp, "assets/videos/".$name); 

        $sql = "INSERT INTO videos (name, heading, description) VALUES('$name','$heading','$description')";
        $res = mysqli_query($con,$sql);
        if($res == 1){
            echo "<h1 class='text-center'>Video Inserted Successfully!</h1>";
        }else{
            echo "<h1>Something Went Wrong...</h1>";
        }

    }

?>