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
                            Upload Resume
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="admin-resume.php" method="post" enctype="multipart/form-data" class="px-3" id="admin-video-form">
                            <div id="adminLoginAlert"></div>
                            <div class="form-group">
                                <input type="file" name="file" class="form-control form-control-lg rounded-0">
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
        $tmp = $_FILES["file"]["tmp_name"];

        move_uploaded_file($tmp, "assets/images/".$name); 

        $sql = "UPDATE resume SET resume = '$name' WHERE id = '1'";
        $res = mysqli_query($con,$sql);
        if($res == 1){
            echo "<h1 class='text-center'>Resume Uploaded Successfully!</h1>";
        }else{
            echo "<h1>Something Went Wrong...</h1>";
        }

    }

?>