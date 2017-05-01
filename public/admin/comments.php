<?php require_once("../../includes/initialize.php"); ?>

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

 <!--<div class="top-content">-->

		 <div class="top-content">

   <div class="col-sm-10 col-sm-offset-2 text">
   <ul class="breadcrumb">
       <li><a href="../login.php"> Admin</a></li>
       <li><a href="index.php">Menu</a></li>
			  <li><a href="delete_comment.php" class="active">Comments</a></li>
       <li><a href="logfile.php" >Logs</a></li>
       <li><a href="list_photo.php">List</a></li>
       <li><a href="photo_upload.php">Upload</a></li>

     </ul>

<h2>Succotash<strong>Lenta</strong> Studio37</h2>

</div>
   </div>

<?php if (!$session->is_logged_in()) { redirect_to("login.php"); } ?>
<?php
	if(empty($_GET['id'])) {
	  $session->message("No photograph ID was provided.");
	  redirect_to('index.php');
	}

  $photo = Photograph::find_by_id($_GET['id']);
  if(!$photo) {
    $session->message("The photo could not be located.");
    redirect_to('index.php');
  }

	$comments = $photo->comments();

?>


<a href="list_photos.php">&laquo; Back</a><br />
<br />

<h2>Comments on <?php echo $photo->filename; ?></h2>

<?php echo output_message($message); ?>
<div id="comments">
  <?php foreach($comments as $comment): ?>
    <div class="comment" style="margin-bottom: 2em;">
	    <div class="author">
	      <?php echo htmlentities($comment->author); ?> wrote:
	    </div>
      <div class="body">
				<?php echo strip_tags($comment->body, '<strong><em><p>'); ?>
			</div>
	    <div class="meta-info" style="font-size: 0.8em;">
	      <?php echo datetime_to_text($comment->created); ?>
	    </div>
			<div class="actions" style="font-size: 0.8em;">
				<a href="delete_comment.php?id=<?php echo $comment->id; ?>">Delete Comment</a>
			</div>
    </div>
  <?php endforeach; ?>
  <?php if(empty($comments)) { echo "No Comments."; } ?>
</div>
</div>
</div>
<?php include_layout_template('footer_admin.php'); ?>
