<?php
require_once('../../includes/initialize.php');
if (!$session->is_logged_in()) { redirect_to("login.php"); }
?>
<?php
	$max_file_size = 1048576;   // expressed in bytes
	                            //     10240 =  10 KB
	                            //    102400 = 100 KB
	                            //   1048576 =   1 MB
	                            //  10485760 =  10 MB

	if(isset($_POST['submit'])) {
		$photo = new Photograph();
		$photo->caption = $_POST['caption'];
		$photo->attach_file($_FILES['file_upload']);
		if($photo->save()) {
			// Success
      $session->message("Photograph uploaded successfully.");
			redirect_to('list_photos.php');
		} else {
			// Failure
      $message = join("<br />", $photo->errors);
		}
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

	 <div class="col-sm-10 col-sm-offset-2 text">
	<ul class="breadcrumb">
			<li><a href="login.php"> Admin</a></li>
			<li><a href="index.php">Menu</a></li>
			<li><a href="photo_upload.php" class="active" >Upload</a></li>
			<li><a href="list_photo.php">List</a></li>
			<li><a href="logfile.php">Logs</a></li>
		</ul>
	</div>
 <!--<div class="inner-bg">-->

 <div class="row">
     <div class="col-sm-8 col-sm-offset-2 text">
         <h2>Succotash<strong>Lenta</strong> Studio37</h2>
         <div class="description">
           <p>

             <strong></strong></a>
           </p>
         </div>
     </div>
 </div>
	<h2>Photo Upload</h2>

	<?php echo output_message($message); ?>
  <form action="photo_upload.php" enctype="multipart/form-data" method="POST">
		<div class="col-sm-2 col-sm-offset-2 text">
    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />
    <p><input type="file" name="file_upload" /></p>
	</div>
		 <div class="col-sm-2 col-sm-offset-1 text">
    <p><input type="text" placeholder="Photo caption.."name="caption" value="" /></p>
</div>


 <div class="col-sm-2 col-sm-offset-1 text">
    <button class="btn btn-group bnt-success buttonload " type="submit" name="submit" value="Upload" ><i class="fa fa-circle-o-notch fa-spin fa fa-upload">U</i></button>
  </form>

</div>

<?php include_layout_template('footer_admin.php'); ?>
