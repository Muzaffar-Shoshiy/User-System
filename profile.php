<?php
    require_once "assets/php/header.php";
    ?>

<div class="profile-page">
        <div class="profileBackImg" style="width: 100%;height: 150px;background-color: #445567;">
            
        </div>
        <div class="profile-back-line display-flex align-items-center" style="width: 100%;height: 75px;background-color: #fcb72b;">
            <div class="container display-flex just-cont-between align-items-center">
                <div class="editImg display_none">
                    <?php if(!$cphoto): ?>
                        <img src="assets/img/default-user-icon.jpg" class="profileImg" alt="">
                    <?php else: ?>
                        <img src="<?= 'assets/php/'.$cphoto; ?>" class="profileImg" alt="">
                    <?php endif; ?>
                </div>
                <ul class="responsive-profile-list display-flex">
                    <li class="nav-item">
                        <a href="#profile" id="profile-btn" data-toggle="tab">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="#editProfile" id="e-profile-btn" data-toggle="tab">Edit Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="#changePass" id="ch-pass-btn" data-toggle="tab">Change Password</a>
                    </li>
                </ul>
            </div>
        </div>
        <p id="verifyEmailAlert" style="position:absolute;text-align:center;left:50%;transform:translateX(-50%);"></p>
        <div class="profile-section" style="width: 100%;height:500px;background-color: #445567;display:flex;align-items:center;justify-content:center;">
            <!-- PROFILE TAB -->
            <div class="" id="profile" style="width:320px;color:#fcb72b; border: 5px solid #fcb72b;padding:30px;">
                <div class="profile-header">
                    <h2 style="text-align: center;">Profile</h2>
                    <div>
                        <div class="">
                            User ID : <?=$cid;?>
                        </div>
                        <div class="">
                            <span class="card-text p-2 m-1 rounded">
                                <b>Name : </b><?=$cname;?>
                            </span><br>
                            <span class="card-text p-2 m-1 rounded">
                                <b>E-Mail : </b><?=$cemail;?>
                            </span><br>
                            <span class="card-text p-2 m-1 rounded">
                                <b>Gender : </b><?=$cgender;?>
                            </span><br>
                            <span class="card-text p-2 m-1 rounded">
                                <b>Date of birth : </b><?=$cdob;?>
                            </span><br>
                            <span class="card-text p-2 m-1 rounded">
                                <b>Phone : </b><?=$cphone;?>
                            </span><br>
                            <span class="card-text p-2 m-1 rounded">
                                <b>Registered On : </b><?=$reg_on;?>
                            </span><br>
                            <span class="card-text p-2 m-1 rounded">
                                <b>E-Mail Verified : </b><?=$verified;?>
                                <?php if($verified == "Not Verified!"): ?>
                                    <a href="#" id="verify-email" class="float-right" style="color:#fff;">Verify Now</a>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- EDIT PROFILE TAB -->
            <div id="editProfile">
                        <div class="card-deck">
                            <div class="">
                                <form action="" method="post" class="px-3 mt-2" enctype="multipart/form-data" id="profile-update-form">
                                    <input type="hidden" name="oldimage" value="<?=$cphoto;?>">
                                    <div class="form-group m-0">
                                        <label style="color: #fff;" for="profilePhoto" class="m-1">Upload Profile Image</label><br>
                                        <input type="file" style="color:#fff;" name="image" id="profilePhoto">
                                    </div><br>
                                    <div class="form-group m-0">
                                        <label style="color: #fff;" for="name" class="m-1">Name</label><br>
                                        <input type="text" name="name" id="name" class="form-control" value="<?= $cname; ?>">
                                    </div>
                                    <div class="form-group m-0">
                                        <label style="color: #fff;" for="gender" class="m-1">Gender</label><br>
                                        <select style="width:100%;height:60px;padding:10px;" name="gender" id="gender">
                                            <option value="" disabled <?php if($cgender == null){echo "selected";} ?> >Select</option>
                                            <option value="Male" <?php if($cgender == "Male"){echo "selected";} ?> >Male</option>
                                            <option value="Female" <?php if($cgender == "Female"){echo "selected";} ?> >Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group m-0">
                                        <label style="color: #fff;" for="dob">Date of Birth</label><br>
                                        <input type="date" id="dob" name="dob" value="<?= $cdob; ?>" class="form-control">
                                    </div>
                                    <div class="form-group m-0">
                                        <label style="color: #fff;" for="phone">Phone</label><br>
                                        <input type="tel" id="phone" name="phone" value="<?= $cphone; ?>" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="form-group mt-2">
                                        <input type="submit" name="profile_update" value="Update Profile" class="input-btn" id="profileUpdateBtn" style="cursor: pointer;">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            <!-- CHANGE PASSWORD TAB -->
            <div id="changePass">
                <div id="changepassAlert"></div>
                <div class="card-deck">
                    <div class="card border-success">
                        <div class="card-header bg-success text-white text-center lead">
                            <h2 style="text-align:center;color:#fff;">Change Password</h2>
                        </div><br>
                        <form action="#" method="post" class="px-3 mt-2" id="change-pass-form">
                            <div class="form-group">
                                <label style="color:#fff" for="curpass">Enter Your Current Password</label><br>
                                <input type="password" name="curpass" placeholder="Current Password" class="form-control form-control-lg" id="curpass" required minlength="5">
                            </div>

                            <div class="form-group">
                                <label style="color:#fff" for="newpass">Enter New Password</label><br>
                                <input type="password" name="newpass" placeholder="New Password" class="form-control form-control-lg" id="newpass" required minlength="5">
                            </div>

                            <div class="form-group">
                                <label style="color:#fff" for="cnewpass">Confirm New Password</label><br>
                                <input type="password" name="cnewpass" placeholder="Confirm New Password" class="form-control form-control-lg" id="cnewpass" required minlength="5">
                            </div>

                            <div class="form-group">
                                <p id="changepassError" class="text-danger"></p>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="changepass" value="Change Password" class="input-btn" id="changePassBtn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $("#editProfile").hide()
            $("#changePass").hide()
            $("#e-profile-btn").click(function(e){
                e.preventDefault()
                $("#editProfile").show()
                $("#profile").hide()
                $("#changePass").hide()
            })
            $("#profile-btn").click(function(e){
                e.preventDefault()
                $("#editProfile").hide()
                $("#profile").show()
                $("#changePass").hide()
            })
            $("#ch-pass-btn").click(function(e){
                e.preventDefault()
                $("#editProfile").hide()
                $("#profile").hide()
                $("#changePass").show()
            })


            // profile update ajax req
            $("#profile-update-form").submit(function(e){
                e.preventDefault()

                $.ajax({
                    url: "assets/php/process.php",
                    method: "post",
                    processData: false,
                    contentType: false,
                    cache:false,
                    data: new FormData(this),
                    success:function(response){
                        location.reload()
                    } 
                })
            })
            // change pass
            $("#changePassBtn").click(function(event){
                event.preventDefault()
                if($("#change-pass-form")[0].checkValidity()){
                    $("#changePassBtn").val("Please Wait...")

                    if($("#newpass").val() != $("#cnewpass").val()){
                        $("#changepassError").text("* Password did not matched!")
                        $("#changePassBtn").val("Change Password") 
                    }else{
                        $.ajax({
                            url: "assets/php/process.php",
                            method: "post",
                            data: $("#change-pass-form").serialize()+"&action=change_pass",
                            success:function(response){
                                $("#changepassAlert").html(response)
                                $("#changePassBtn").val("Change Password")
                                $("#changepassError").text("")
                                $("#change-pass-form")[0].reset()
                            }
                        })
                    }
                }
            })
            // verify email
            $("#verify-email").click(function(e){
                e.preventDefault()
                $(this).text("Please Wait...")
                $.ajax({
                    url: "assets/php/process.php",
                    method: "post",
                    data: { action: "verify_email" },
                    success:function(response){
                        $("#verifyEmailAlert").html(response)
                        $("#verify-email").text("Verify Now")
                    }
                })
            })
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