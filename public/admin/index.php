<!DOCTYPE html>
<?php
require_once("../../includes/initialize.php");

if (!$session->is_logged_in()) { redirect_to("login.php");}
 ?>
 <?php include_layout_template('header_admin.php'); ?>


    <body>


  <?php include_layout_template('footer_admin.php'); ?>
  </body>


  <!-- Javascript -->
  <script src="../assets/js/jquery-1.11.1.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/js/jquery.backstretch.min.js"></script>
  <script src="../assets/js/scripts.js"></script>

  <!--[if lt IE 10]>
      <script src="assets/js/placeholder.js"></script>
  <![endif]-->
</html>
