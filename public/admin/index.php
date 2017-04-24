
<?php
require_once("../../includes/initialize.php");

if (!$session->is_logged_in()) { redirect_to("login.php");}
 ?>

 <?php include_layout_template('header_admin.php'); ?>

 <ul class="nav navbar-nav navbar-right navbar-menu-items wow fadeIn">
   <li><a href="../index.php">Home</a></li>
   <li><a href="index.php" class="active">Logged in as:</a></li>
   <li><a href="logout.php" class="Log">Logout</a></li>

 </ul>
 </div>
 </div>
 </nav>

 <div class="top-content">

 <div class="inner-bg">

   <ul>
 		<li><a href="list_photos.php">List Photos</a></li>
 		<li><a href="logfile.php">View Log file</a></li>
    
  </ul>
  <?php include_layout_template('footer_admin.php'); ?>
