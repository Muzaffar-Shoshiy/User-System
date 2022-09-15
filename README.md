<section id="">
        <div class="">
            <div class="">
                <div class="">
                    <!-- profile tab content start -->
                    <div class="">
                        <ul class="">
                            <li class="nav-item">
                                <a href="#profile" class="nav-link-white font-weight-bold" data-toggle="tab">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a href="#editProfile" class="nav-link-white font-weight-bold" data-toggle="tab">Edit Profile</a>
                            </li>
                            <li class="nav-item">
                                <a href="#changePass" class="nav-link-white font-weight-bold" data-toggle="tab">Change Password</a>
                            </li>
                        </ul>
                    </div>
                    <div class="" id="profile">
                        <div id="verifyEmailAlert"></div>
                        <div class="profile-header">
                            <div class="container">
                                <div class="">
                                    User ID : <?=$cid;?>
                                </div>
                                <div class="img-shed">
                                    <div class="img">
                                        <?php if(!$cphoto): ?>
                                            <img src="assets/img/default-user-icon.jpg" class="img-thumbnail img-fluid" width="408px" alt="">
                                        <?php else: ?>
                                            <img src="<?= 'assets/php/'.$cphoto; ?>" class="img-thumbnail img-fluid" width="408px" alt="">
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="">
                                    <p class="card-text p-2 m-1 rounded">
                                        <b>Name : </b><?=$cname;?>
                                    </p>
                                    <p class="card-text p-2 m-1 rounded">
                                        <b>E-Mail : </b><?=$cemail;?>
                                    </p>
                                    <p class="card-text p-2 m-1 rounded">
                                        <b>Gender : </b><?=$cgender;?>
                                    </p>
                                    <p class="card-text p-2 m-1 rounded">
                                        <b>Date of birth : </b><?=$cdob;?>
                                    </p>
                                    <p class="card-text p-2 m-1 rounded">
                                        <b>Phone : </b><?=$cphone;?>
                                    </p>
                                    <p class="card-text p-2 m-1 rounded">
                                        <b>Registered On : </b><?=$reg_on;?>
                                    </p>
                                    <p class="card-text p-2 m-1 rounded">
                                        <b>E-Mail Verified : </b><?=$verified;?>
                                        <?php if($verified == "Not Verified!"): ?>
                                            <a href="#" id="verify-email" class="float-right">Verify Now</a>
                                        <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- profile tab content end -->

                    <!-- edit profile tab content start -->
                    <div id="editProfile">
                        <div class="card-deck">
                            <div class="card border-danger align-self-center">
                                <?php if(!$cphoto): ?>
                                    <img src="assets/img/avatar.png" class="img-thumbnail img-fluid" width="408px" alt="">
                                <?php else: ?>
                                    <img src="<?= 'assets/php/'.$cphoto; ?>" class="img-thumbnail img-fluid" width="408px" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="card border-danger">
                                <form action="" method="post" class="px-3 mt-2" enctype="multipart/form-data" id="profile-update-form">
                                    <input type="hidden" name="oldimage" value="<?=$cphoto;?>">
                                    <div class="form-group m-0">
                                        <label for="profilePhoto" class="m-1">Upload Profile Image</label>
                                        <input type="file" name="image" id="profilePhoto">
                                    </div>
                                    <div class="form-group m-0">
                                        <label for="name" class="m-1">Name</label>
                                        <input type="text" name="name" id="name" class="form-control" value="<?= $cname; ?>">
                                    </div>
                                    <div class="form-group m-0">
                                        <label for="gender" class="m-1">Gender</label>
                                        <select class="form-control" name="gender" id="gender">
                                            <option value="" disabled <?php if($cgender == null){echo "selected";} ?> >Select</option>
                                            <option value="Male" <?php if($cgender == "Male"){echo "selected";} ?> >Male</option>
                                            <option value="Female" <?php if($cgender == "Female"){echo "selected";} ?> >Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group m-0">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" id="dob" name="dob" value="<?= $cdob; ?>" class="form-control">
                                    </div>
                                    <div class="form-group m-0">
                                        <label for="phone">Phone</label>
                                        <input type="tel" id="phone" name="phone" value="<?= $cphone; ?>" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="form-group mt-2">
                                        <input type="submit" name="profile_update" value="Update Profile" class="btn btn-danger btn-block" id="profileUpdateBtn">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- edit profile tab content end -->

                    <!-- change password tab content start -->
                    <div class="tab-pane container fade" id="changePass">
                        <div id="changepassAlert"></div>
                        <div class="card-deck">
                            <div class="card border-success">
                                <div class="card-header bg-success text-white text-center lead">
                                    Change Password
                                </div>
                                <form action="#" method="post" class="px-3 mt-2" id="change-pass-form">
                                    <div class="form-group">
                                        <label for="curpass">Enter Your Current Password</label>
                                        <input type="password" name="curpass" placeholder="Current Password" class="form-control form-control-lg" id="curpass" required minlength="5">
                                    </div>

                                    <div class="form-group">
                                        <label for="newpass">Enter New Password</label>
                                        <input type="password" name="newpass" placeholder="New Password" class="form-control form-control-lg" id="newpass" required minlength="5">
                                    </div>

                                    <div class="form-group">
                                        <label for="cnewpass">Confirm New Password</label>
                                        <input type="password" name="cnewpass" placeholder="Confirm New Password" class="form-control form-control-lg" id="cnewpass" required minlength="5">
                                    </div>

                                    <div class="form-group">
                                        <p id="changepassError" class="text-danger"></p>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" name="changepass" value="Change Password" class="btn btn-success btn-block btn-lg" id="changePassBtn">
                                    </div>
                                </form>
                            </div>
                            <div class="card border-success align-self-center">
                                <img src="assets/img/coding.jpg" class="img-thumbnail img-fluid" width="408px" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- change password tab content end -->
                </div>
            </div>
        </div>
    </section>