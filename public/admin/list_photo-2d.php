<?php require_once("../../includes/initialize.php"); ?>
<?php if (!$session->is_logged_in()) { redirect_to("login.php"); } ?>
<?php
  // Find all the photos
  $photos = Photograph::find_all();
?>
<?php include_layout_template('header_admin.php'); ?>

<ul class="nav navbar-nav navbar-right navbar-menu-items wow fadeIn">
            <li><a href="../index.php">Home</a></li>
            <li><a href="list_photo.php" class="active">Logined in</a></li>
            <li><a href="logout.php">Logout</a></li>


          </ul>
        </div>
      </div>
    </nav>
      <!-- Top content -->
      <div class="top-content">

          <div class="inner-bg">






<h2>Succotash Lenta </h2>
<a href="photo_upload.php">Upload a new photograph</a>
<?php echo output_message($message); ?>
<table class="bordered">
  <tr>
    <th>Image</th>
    <th>Filename</th>
    <th>Caption</th>
    <th>Size</th>
    <th>Type</th>
		<th>Comments</th>
		<th>&nbsp;</th>
  </tr>
<?php foreach($photos as $photo): ?>
  <tr>
    <td><img src="../<?php echo $photo->image_path(); ?>" width="100" /></td>
    <td><?php echo $photo->filename; ?></td>
    <td><?php echo $photo->caption; ?></td>
    <td><?php echo $photo->size_as_text(); ?></td>
    <td><?php echo $photo->type; ?></td>
		<td>
			<a href="comments.php?id=<?php echo $photo->id; ?>">
				<?php echo count($photo->comments()); ?>
			</a>
		</td>
		<td><a href="delete_photo.php?id=<?php echo $photo->id; ?>">Delete</a></td>
  </tr>
<?php endforeach; ?>
</table>
<br />


</div>
</div>

<?php include_layout_template('footer_admin.php'); ?>
