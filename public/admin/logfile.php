<?php require_once("../../includes/initialize.php");
if (!$session->is_logged_in()) { redirect_to("login.php"); }

  $logfile = SITE_ROOT.DS.'logs'.DS.'log.txt';
  $logfile = isset($_GET['logfile']) ? $_GET['logfile'] : '';
  if($_GET['clear'] == 'true') {
		file_put_contents($logfile, '');
	  // Add the first log entry
	  log_action('Logs Cleared', "by User ID {$session->user_id}");
    // redirect to this same page so that the URL won't
    // have "clear=true" anymore
    redirect_to('logfile.php');
  }

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
   <div class="inner-bg">
   <div class="col-sm-10 col-sm-offset-2 text">
   <ul class="breadcrumb">
       <li><a href="../login.php"> Admin</a></li>
       <li><a href="index.php">Menu</a></li>
       <li><a href="logfile.php" class="active">Logs</a></li>
       <li><a href="list_photo.php">List</a></li>
       <li><a href="photo_upload.php">Upload</a></li>
     </ul>
   </div>
<div class="col-sm-6 col-sm-offset-3 text">
<h2>Succotash<strong>Lenta</strong> Studio37</h2>

<h2>Logs</h2>

<button class ="btn bnt-primary"<a href="logfile.php?clear=true">Clear logs</a></button>



<?php

  if( file_exists($logfile) && is_readable($logfile) &&
			$handle = fopen($logfile, 'w')) {  // read
    echo "<ul class=\"log-entries\">";
		while(!feof($handle)) {
			$entry = fgets($handle);
			if(trim($entry) != "") {
				echo "<li>{$entry}</li>";
			}
		}
		echo "</ul>";
    fclose($handle);
  } else {
    echo "Could not read from {$logfile}.";
  }

?>
</div>
<?php include_layout_template('footer_admin.php'); ?>
