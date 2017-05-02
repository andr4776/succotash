<?php
require_once('../../includes/initialize.php');
if (!$session->is_logged_in()) { redirect_to("login.php"); }
?>

<?php include_layout_template('header_admin.php'); ?>

<ul class="nav navbar-nav navbar-right navbar-menu-items wow fadeIn">
		<li><a href="../index.php"> Gallery</a></li>
		<li><a href="../about.php">About</a></li>
        <li><a href="admin/login.php" class="active"> Admin</a></li>
		<li><a href="../photo.php?id=4"> VBlog</a></li>
		<li><a href="../intouch.php">InTouch</a></li>
	</ul>
</div>
</div>
</nav>

<div class="top-content">
	<div class="col-sm-8 col-sm-offset-4 text">
	<div class="chip">
	 <!--<img src="../assets/img/logo-4.jpg" alt="admin user" width="93"height="93">-->
	 <?php if ($session) {
	 $user = User::find_by_id(1);
	 echo "&nbsp;"."&nbsp;"."Logged in as: ". $user->first_name; }
	 ?>
	</div>
	</div>

	<div class="col-sm-10 col-sm-offset-2 text">
	<ul class="breadcrumb">
			<li><a href="logout.php"> Admin</a></li>
			<li><a href="index.php" class="active">Menu</a></li>
			<li><a href="list_photo.php">List</a></li>
			<li><a href="logfile.php">Logs</a></li>
			<li><a href="photo_upload.php" >Upload</a></li>
		</ul>
	</div>
<!--<div class="inner-bg">-->

<div class="row">
    <div class="col-sm-8 col-sm-offset-2 text">
        <h1>Succotash<strong>Lenta</strong> Studio37</h1>
        <div class="description">
          <p>

            <strong></strong>
          </p>
        </div>
    </div>
</div>
	<h2>Admin assistant</h2>

	<?php echo output_message($message); ?>

  <div class="btn-group open">


    <a class="btn btn-block dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-user"></i> <h3>Access</h3></a>
      <span class="icon-caret-down"></span>

	<ul class="dropdown-menu">
		<li><a href="list_photo.php"><i class ="icon-fixed-width icon-arhcive"</i>List Photos</a></li>
    <li><a href="logfile.php"><i class ="icon-fixed-width icon-book"</i>View Log files</a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right navbar-menu-items wow fadeIn"

    <li><a href="logout.php"><i class ="icon-fixed-width icon-lock"</i>Logout</a></li>

 </ul>
</div>

<!--</div>-->
<?php include_layout_template('footer_admin.php'); ?>
