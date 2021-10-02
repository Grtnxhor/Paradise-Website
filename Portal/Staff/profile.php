<?php include("functions/init.php"); ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Paradise | Staff</title>
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
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
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

<?php include("includes/staff.php") ?>  


       
           
            <!-- Header top area end-->
            <!-- Breadcome start-->
 <?php include("includes/breadcrumb.php") ?>           
            <!-- Breadcome End-->
            <!-- Mobile Menu start -->
  <?php include("includes/mobile_menu.php") ?>           
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
   <?php include("includes/breadcome.php") ?>              
            <!-- Breadcome End-->
            <div class="user-profile-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="user-profile-wrap shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="user-profile-img">
                                                    <img src="img/notification/5.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="user-profile-content">
                                                    <h2><?php welcome() ?></h2>
                                                    <p  class="profile-founder">Employee ID.:<b><span style="color: yellow;"> PMS/ Staff/ <?php emp(); ?></span></b></strong>
                                                    </p>
                                                    
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
            <div class="user-prfile-activity-area mg-b-40 mg-t-30">
                <div class="container-fluid">
                   
                       
                         <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>My Profile</h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                           
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        
                                        <table id="table" data-toggle="table" >
                                            <thead>
                                                <tr>
                                                    <th data-field="state" data-checkbox="true"></th>
                                                    <th data-field="id">Employee ID</th>
                                                    <th data-field="name" data-editable="true">First Name</th>
                                                    <th data-field="email" data-editable="true">Last Name</th>
                                                    <th data-field="phone" data-editable="true">Level</th>
                                                    <th data-field="company" data-editable="true">Subject Taught</th>
                                                    <th data-field="complete">Date Employed</th>
                                                    <th data-field="task" data-editable="true">Class Supervised</th>
                                                    <th data-field="date" data-editable="true">Telephone</th>
                                                    <th data-field="action">Activated</th>
                                                </tr>
                                            </thead>
                                            <?php
 $sql="SELECT * FROM staff_login WHERE `Employee_ID` = '".$_SESSION["Employee_ID"]."'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>
                                            
                                                <tr>
                                                    <td></td>
                                                    <td><?php echo $row['Employee_ID'] ?></td>
                                                    <td><?php echo $row['First Name'] ?></td>
                                                    <td><?php echo $row['Last Name'] ?></td>
                                                    <td><?php echo $row['Level'] ?></td>
                                                    <td><?php echo $row['Subject Taught'] ?></td>
                                                    <td><?php echo $row['Date Employed'] ?></td>
                                                    <td><?php echo $row['Class Supervised'] ?></td>
                                                    <td><?php echo $row['Tel'] ?></td>
                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                    </td>
                                                </tr>
                                                 
                                                 <?php
 }
 ?>
                                              
                                              
                                           
                                        </table>
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
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <!-- rounded-counter JS
		============================================ -->
    <script src="js/rounded-counter/jquery.countdown.min.js"></script>
    <script src="js/rounded-counter/jquery.knob.js"></script>
    <script src="js/rounded-counter/jquery.appear.js"></script>
    <script src="js/rounded-counter/knob-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/widget-flot-chart-active.js"></script>
    <!-- map JS
		============================================ -->
    <script src="js/map/raphael.min.js"></script>
    <script src="js/map/jquery.mapael.js"></script>
    <script src="js/map/france_departments.js"></script>
    <script src="js/map/world_countries.js"></script>
    <script src="js/map/usa_states.js"></script>
    <script src="js/map/map-active.js"></script>
    <!--  editable JS
        		============================================ -->
    <script src="js/jquery.mockjax.js"></script>
    <script src="js/mock-active.js"></script>
    <script src="js/select2.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
    <script src="js/bootstrap-editable.js"></script>
    <script src="js/xediable-active.js"></script>
     <!-- data table JS
        ============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>