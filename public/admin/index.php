<?php
require_once('../../includes/initialize.php');
if (!$session->is_logged_in()) { redirect_to("login.php"); }
?>

<?php include_layout_template('header_admin.php'); ?>
<ul class="nav navbar-nav navbar-right navbar-menu-items wow fadeIn">
  <li><a href="../index.php">Home</a></li>

  <li><a href="index.php" class="active">Logged in </a></li>


</ul>
</div>
</div>
</nav>

<div class="top-content">

<div class="inner-bg">

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

</div>
<?php include_layout_template('footer_admin.php'); ?>
