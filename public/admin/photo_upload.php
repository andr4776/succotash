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
   <li><a href="../index.php">Home</a></li>
   <li><a href="logout.php" class="active">Logout</a></li>

<?php echo output_message($message);?>


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

             <strong></strong></a>
           </p>
         </div>
     </div>
 </div>
	<h2>Photo Upload</h2>

	<?php echo output_message($message); ?>
  <form action="photo_upload.php" enctype="multipart/form-data" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />
    <p><input type="file" name="file_upload" /></p>
    <p>Photo caption: <input type="text" name="caption" value="" /></p>
<button class="buttonload">




    <button  type="submit" name="submit" value="Upload" />	<i class="fa fa-circle-o-notch fa-spin"></i>
	</button>
		</button>
  </form>

<li><a href="logout.php">Logout</a></li>

<?php include_layout_template('footer_admin.php'); ?>
