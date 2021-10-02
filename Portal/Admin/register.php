<?php include("functions/init.php"); ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Paradise | Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- modals CSS
		============================================ -->
    <link rel="stylesheet" href="css/modals.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- forms CSS
		============================================ -->
      <link rel="stylesheet" href="css/modals.css">
    <!-- duallistbox CSS
        ============================================ -->
    <link rel="stylesheet" href="css/duallistbox/bootstrap-duallistbox.min.css">
    <!-- cropper CSS
    ============================================= ----->   
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="darklayout">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->

       
                      
        <?php include("includes/Admin.php"); ?>
            <!-- Header top area end-->
            <!-- Header top area start-->
        <div class="content-inner-all">
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                            <h2>Welcome Sir!</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="index.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Register a Student</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- Mobile Menu start -->
            <?php include("includes/mobile.php"); ?>
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 des-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <h2>Welcome Sir !</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Register</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- Basic Form Start -->
            <div class="basic-form-area mg-b-15">
                <div class="container-fluid">
                
                   <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset mg-t-10">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>Register Student</h1>
                                       
                                    </div>
                                </div>
                                <?php validate_user_registration(); ?>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner">
                                                    <form   method="post" enctype="multipart/form-data">
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro" name="Fname">First Name</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" name="Fname" class="form-control" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro" name="Mname">Middle Name</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" name="Mname"  class="form-control"required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro" name="Lname">Last Name</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" name="Lname"  class="form-control" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro" name="Pword">Password</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="password"  name="Pword" class="form-control" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro" name="Paword">Confirm-Password</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="password" name="Paword" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro" name="Dateofbirth">Date Of Birth</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="date" name="Dateofbirth"  class="form-control" placeholder="Placeholder" />
                                                                </div>
                                                            </div>
                                                             <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro" name="Email">Email</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="email" name="Email" class="form-control"  />
                                                                </div>
                                                            </div>
                                                             <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro" name="Add1">Address Line 1</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" name="Add1" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                        <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro" name="Add2">Address Line 2</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" name="Add2" class="form-control" />
                                                                </div>
                                                            </div> 
                                                       <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro" name="Tel">Telephone Number</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="tel" name="Tel" class="form-control" required />
                                                                </div>
                                                            </div>          
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro" name="Gender">Gender</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <div class="form-select-list">
                                                                        <select class="form-control custom-select-value" name="Gender">
                                                                            <option name="Gender">Male</option>
                                                                            <option name="Gender">Female</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro" name="Gen">Department</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <div class="form-select-list">
                                                                        <select class="form-control custom-select-value" name="Gen">
                                                                            <option name="Gen">Science</option>
                                                                            <option name="Gen">Humanities</option>
                                                                            <option name="Gen">Commercial</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro" name="Class">Class</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <div class="form-select-list">
                                                                        <select class="form-control custom-select-value" name="Class">
                                                                            <option name="Class">SSS 1</option>
                                                                            <option name="Class">SSS 2</option>
                                                                             <option name="Class">SSS 3</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro" name="Addate">Admission Date</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="date"  name="Addate" class="form-control" placeholder=" input here..." />
                                                                </div>
                                                            </div>
                                                        </div>
                                                     <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro" name="classAd">Class Admitted</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text"  name="classAd" class="form-control" " />
                                                                </div>
                                                            </div>
                                                        </div>   

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                    <label class="login2 pull-right pull-right-pro"> Upload Paasport</label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                                        <div class="input append-big-btn">
                                                                            <label class="icon-left" for="append-big-btn">
                                                                                <i class="fa fa-download"></i>
                                                                            </label>
                                                                            <div class="file-button">
                                                                                Browse
                                                                                <input name="file" type="file" onchange="document.getElementById('append-big-btn').value = this.value;">
                                                                            </div>
                                                                            <input type="text" id="append-big-btn" placeholder="no file selected">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                   
                                                         <div class="form-group-inner">
                                                            <div class="login-btn-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-3"></div>
                                                                    <div class="col-lg-9">
                                                                        <div class="login-horizental cancel-wp pull-left">
                                                                            <button class="btn btn-white" type="submit">Cancel</button>
                                                                            <button class="btn btn-sm btn-primary login-submit-cs" type="submit" name="btn-upload">Register</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Form End-->

    <!-- Footer Start-->
  <?php include("includes/footer.php"); ?>
    <!-- Footer End-->
   
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <!-- cropper JS
        ============================================ -->    
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <!-- modal JS
		============================================ -->
    <script src="js/modal-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>