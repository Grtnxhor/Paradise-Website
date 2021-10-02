<?php include("functions/init.php"); ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Paradise | Portal</title>
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
    <!-- form CSS
		============================================ -->
    <link rel="stylesheet" href="css/form.css">
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

<body class="darklayout" onload="GenerateCaptcha();">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  
        <?php include("includes/header.php"); ?>
            <!-- Header top area end-->
          
           
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <?php include("includes/breadcrumb.php"); ?>
            <!-- Breadcome End-->
            <!-- Mobile Menu start -->
           <?php include("includes/mobile_menu.php"); ?>
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
          <?php include("includes/breadcome.php"); ?>
            <!-- Breadcome End-->
            <!-- Captcha Start-->
            <div class="login-form-area mg-t-30 mg-b-40">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <form id="adminpro-captcha-form" class="adminpro-form" method="post">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="logo">
                                                <a href="#"><img src="img/logo/log.png" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                                <h1>Activate</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Enter the Captcha</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="captcha" id="txtCompare" />
                                                <input type="text" id="txtCaptcha" disabled="disabled" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-button-pro">
                                                <button type="submit" class="login-button login-button-rg">Back</button>
                                                <button type="submit" class="login-button login-button-lg" >Submit</button>
                                                <!------<a class="Warning Warning-color mg-b-10" href="#" data-toggle="modal" data-target="#WarningModalblbgpro">Warning</a>------------->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
            <!-- Captcha End-->
        </div>
    </div>
     <div id="WarningModalblbgpro" class="modal modal-adminpro-general Customwidth-popup-WarningModal PrimaryModal-bgcolor fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                        <div class="modal-body">
                                            <span class="adminpro-icon adminpro-warning-danger modal-check-pro information-icon-pro"></span>
                                            <h2>Warning!</h2>
                                            <p>The Modal plugin is a dialog box/popup window that is displayed on top of the current page</p>
                                        </div>
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <a href="#">Process</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    <!-- Footer Start-->
    <?php include("includes/Footer.php"); ?>
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
    <!-- form validate JS
		============================================ -->

    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- modal JS
        ============================================ --> 
    <script src="js/jquery.form.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/form-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <script type="text/javascript">
        function GenerateCaptcha() {
            var chr1 = Math.ceil(Math.random() * 10) + '';
            var chr2 = Math.ceil(Math.random() * 10) + '';
            var chr3 = Math.ceil(Math.random() * 10) + '';

            var str = new Array(4).join().replace(/(.|$)/g, function() {
                return ((Math.random() * 36) | 0).toString(36)[Math.random() < .5 ? "toString" : "toUpperCase"]();
            });
            var captchaCode = str + chr1 + ' ' + chr2 + ' ' + chr3;
            document.getElementById("txtCaptcha").value = captchaCode
        }

        function ValidCaptcha() {
            var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
            var str2 = removeSpaces(document.getElementById('txtCompare').value);

            if (str1 == str2) return true;
            return false;
        }

        function removeSpaces(string) {
            return string.split(' ').join('');
        }
    </script>
</body>

</html>