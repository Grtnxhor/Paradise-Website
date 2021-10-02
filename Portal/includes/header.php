    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
<?php                    
$sql="SELECT * FROM students WHERE `Admission No.` = '".$_SESSION["Admission No."]."'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>                    
                    <img src="Admin/uploads/passport/<?php echo $row[''] ?>" alt="" />
<?php
}
?>                    

 
                    <h3><?php logged_in2() ?></h3>
                    <p><?php logged_in() ?></p>
                    
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="index.php"  role="button" aria-expanded="false" class="nav-link "><i class="fa big-icon fa-home"></i> <span class="mini-dn">DashBoard</span></a>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-edit"></i> <span class="mini-dn">Profile</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="profile.php" class="dropdown-item">My Profile</a>
                                <a href="error.php" class="dropdown-item">Change Password</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-flask"></i> <span class="mini-dn">Check Result</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="pdf-viewer.php" class="dropdown-item">1st Term Result</a>
                                <a href="note.php" class="dropdown-item">2nd Term Result </a>
                                <a href="note.php" class="dropdown-item">3rd Term Result</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Dowloads</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="#" class="dropdown-item">Admission Letter</a>
                                <a href="#" class="dropdown-item">List Of Book</a>
                                <a href="#" class="dropdown-item">School Bill</a>
                                <a href="calendar.php" class="dropdown-item">School Calendar</a>
                                <a href="newsletter2.php" class="dropdown-item">Newsletter</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-bar-chart-o"></i> <span class="mini-dn">Marksheet</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown chart-left-menu-std animated flipInX">
                               <a href="studentsheet.php" class="dropdown-item">1st Term</a>
                                <a href="note.php" class="dropdown-item">2nd Term </a>
                                <a href="note.php" class="dropdown-item">3rd Term</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-table"></i> <span class="mini-dn">Fees</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="error.php" class="dropdown-item">View Payments</a>
                                <a href="error.php" class="dropdown-item">Get Receipt</a>
                                <a href="error.php" class="dropdown-item">Pay Fee</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-desktop"></i> <span class="mini-dn">Account</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown form-left-menu-std animated flipInX">
                                <a href="lock.php" class="dropdown-item">Lock</a>
                                <a href="captcha.php" class="dropdown-item">Activate</a>
                                <a href="logout.php" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                       
                    </ul>
                </div>
            </nav>
        </div>

         <!-- Header top area start-->
        <div class="content-inner-all">