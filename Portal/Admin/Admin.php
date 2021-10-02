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
    <!-- normalize CSS
		============================================ -->

     <link rel="stylesheet" href="css/normalize.css">
    <!-- modals CSS
        ============================================ -->
    <link rel="stylesheet" href="css/modals.css">
    <!-- tabs CSS   
    ============================================ --> 
        
    <link rel="stylesheet" href="css/normalize.css">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="css/c3.min.css">
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

     <!-- Header top area start-->
        <div class="content-inner-all">

            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                            <h2>Welcome Sir!</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
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
                                            <h2>Welcome </h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
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
           
          
            <div class="widget-chat-area mg-tb-30">
                <div class="container-fluid">
                    <div class="row">
                      
                        <div class="col-lg-4">
                            <div class="widget-flot-bg widget-ov-mg-t-30 widget-ov-mg-t-n-30 widget-ov-mg-t-l-30 shadow-reset nt-mg-b-30">
                                <div class="admin-widget-flot-ch">
                                    <a class="Information Information-color mg-b-10" href="#"  data-toggle="modal" data-target="#InformationproModalftblack" style="color: white">
                                    <h3>1st Term</h3>
                                    <h1>Upload Result</h1>
                                    <p>Click to Upload result</p>
                                </a>
                                </div>
                               
                            </div>
                           
                        </div>
                        

    <div id="InformationproModalftblack" class="modal modal-adminpro-general fullwidth-popup-InformationproModal PrimaryModal-bgcolor fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                        <div class="modal-body">
                                            <span class="adminpro-icon adminpro-information modal-check-pro information-icon-pro"> </span>
                                            <h2>Upload!</h2>
                                            <p>Upload student Report Sheet</p>
                                        </div>
                                        <div class="modal-footer footer-modal-admin">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <a href="upload.php">Continue</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                   

                         <div class="col-lg-4">
                            <div class="widget-flot-bg widget-ov-mg-t-30 widget-ov-mg-t-n-30 widget-ov-mg-t-l-30 shadow-reset nt-mg-b-30">
                                <div class="admin-widget-flot-ch">
                                    <a class="Danger danger-color" href="#" data-toggle="modal" data-target="#DangerModalftblack" style="color: white">
                                    <h3>Enroll</h3>
                                    <h1>New Student</h1>
                                    <p>first Name, Last Name e.t.c</p>
                                </a>
                                </div>
                               
                            </div>
                          
                        </div>
 <div id="DangerModalftblack" class="modal modal-adminpro-general FullColor-popup-DangerModal PrimaryModal-bgcolor fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                        <div class="modal-body">
                                            <span class="adminpro-icon adminpro-danger-error modal-check-pro information-icon-pro"></span>
                                            <h2>Register?</h2>
                                            <p>Get started</p>
                                        </div>
                                        <div class="modal-footer footer-modal-admin">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <a href="register.php">Process</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
 <div class="col-lg-4">
                            <div class="widget-flot-bg widget-ov-mg-t-30 widget-ov-mg-t-n-30 widget-ov-mg-t-l-30 shadow-reset nt-mg-b-30">
                                <div class="admin-widget-flot-ch">
                                    <a  href="regstaff.php" style="color: white">
                                    <h3>Register</h3>
                                    <h1>New Staff</h1>
                                    <p>Click to start</p>
                                </a>
                                </div>
                               
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
            
         
    </div>

        </div>
    </div>
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
    <!-- scrollUp JS
		============================================ -->
    <script src="js/wow/wow.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>