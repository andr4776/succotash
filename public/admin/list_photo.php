<?php require_once("../../includes/initialize.php"); ?>
<?php if (!$session->is_logged_in()) { redirect_to("login.php"); } ?>
<?php
  // Find all the photos
  $photos = Photograph::find_all();
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
      <!-- Top content -->

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
            <li><a href="index.php">Menu</a></li>
            <li><a href="list_photo.php" class="active">List</a></li>
            <li><a href="logfile.php">Logs</a></li>
            <li><a href="photo_upload.php">Upload</a></li>
          </ul>
        </div>
                     <h1>Succotash<strong>Lenta</strong> Studio37</h1>

<?php echo output_message($message); ?>

<table  id ="myTable" class="bordered">
  <tr class="header">
    <th style="20%">Caption</th>
    <th style="20%">Image</th>
    <th style="20%">Filename</th>
    <th style="20%">Size</th>
    <th style="20%">Type</th>
		<th style="20%">Comments</th>
		<th>&nbsp;</th>
  </tr>
<?php foreach($photos as $photo): ?>
  <tr>
    <td><?php echo $photo->caption; ?></td>
    <td><img src="../<?php echo $photo->image_path(); ?>" width="100" /></td>
    <td><?php echo $photo->filename; ?></td>
    <td><?php echo $photo->size_as_text(); ?></td>
    <td><?php echo $photo->type; ?></td>
		<td>
			<a href="comments.php?id=<?php echo $photo->id; ?>">
				<?php echo count($photo->comments()); ?>
			</a>
		</td>
		<td><a href="delete_photo.php?id=<?php echo $photo->id; ?>">Delete.. <i class="fa fa-eraser"></a></td>
  </tr>

<?php endforeach; ?>
</table>

<div class="description">
    <a href ="index.php"><h4>Admin Assistant Menu</h4></i></a>
</div>
<div class="col-sm-8 col-sm-offset-2 text">

<div class="col-sm-6 features-box wow fadeInLeft">
<p>
<h1>Photographs</h1>
<div class="row">
<div class="col-sm-3 features-box-icon">
 <a href ="photo_upload.php"><i class="fa fa-upload"></i></a>
</div>
<div class="col-sm-9">
 <a href ="photo_upload.php"><h2>Upload More</h2></a>


</div>
</div>
</div>

</div>
</div>

<?php include_layout_template('footer_admin.php'); ?>
