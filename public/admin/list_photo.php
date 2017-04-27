<?php require_once("../../includes/initialize.php"); ?>
<?php if (!$session->is_logged_in()) { redirect_to("login.php"); } ?>
<?php
  // Find all the photos
  $photos = Photograph::find_all();
?>
<?php include_layout_template('header_admin.php'); ?>

<ul class="nav navbar-nav navbar-right navbar-menu-items wow fadeIn">
            <li><a href="../index.php">Home</a></li>
            <li><a href="list_photo.php" class="active">Logged in</a></li>
            <li><a href="logout.php">Logout</a></li>


          </ul>
        </div>
      </div>
    </nav>
      <!-- Top content -->
      <div class="top-content">

                     <h1>Succotash<strong>Lenta</strong> Studio37</h1>
                     <div class="description">
                       <p>
                         Photographs' List
                       </p>
                     </div>

<div class="col-sm-8 col-sm-offset-2 text">

  <div class="col-sm-6 features-box wow fadeInLeft">
    <p>
      <h1>Photographs</h1>
    </p>
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
<!--<div class="col-sm-8 col-sm-offset-2 text">-->

<?php echo output_message($message); ?>

<table  id ="myTable" class="bordered">
  <tr class="header">
    <th style="20%">Image</th>
    <th style="20%">Filename</th>
    <th style="20%">Caption</th>
    <th style="20%">Size</th>
    <th style="20%">Type</th>
		<th style="20%">Comments</th>
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
		<td><a href="delete_photo.php?id=<?php echo $photo->id; ?>">Delete.. <i class="fa fa-eraser"></a></td>
  </tr>

<?php endforeach; ?>
</table>
</div>

<?php include_layout_template('footer_admin.php'); ?>
