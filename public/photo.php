<?php require_once("../includes/initialize.php"); ?>
<?php include_layout_template('header.php'); ?>

	<ul class="nav navbar-nav navbar-right navbar-menu-items wow fadeIn">
		<li><a href="index.php"> Gallery</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="admin/login.php" > Admin</a></li>
		<li><a href="photo.php?id=5" class ="active"> VBlog</a></li>
		<li><a href="intouch.php">InTouch</a></li>
	</ul>
</div>
</div>
</nav>

<!-- Top content -->

<div class="top-content">
	
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

	if(isset($_POST['submit'])) {
	  $author = trim($_POST['author']);
	  $body = trim($_POST['body']);

	  $new_comment = Comment::make($photo->id, $author, $body);
	  if($new_comment && $new_comment->save()) {
			// comment saved
			// No message needed; seeing the comment is proof enough.

			// Send email
			$new_comment->try_to_send_notification();

	    // if the page is reloaded, the form will try
			// to resubmit the comment. redirect
	    redirect_to("photo.php?id={$photo->id}");

		} else {
			// Failed
	    $message = "There was an error that prevented the comment from being saved.";
		}
	} else {
		$author = "";
		$body = "";
	}
	$comments = $photo->comments();
?>

    <a href="index.php">&laquo; Back</a><br />
<br />

<div style="margin-left: 20px;">
  <img src="<?php echo $photo->image_path(); ?>" />
  <p><?php echo $photo->caption; ?></p>
</div>


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
    </div>

  <?php endforeach; ?>
  <?php if(empty($comments)) { echo "No Comments."; } ?>
</div>
<i class="mega-octicon octicon-sign-in"></i>


<div id="comment-form">
  <h3>New Comment</h3>
	<!-- Trigger/Open The Modal -->


</div>
  <?php echo output_message($message); ?>


  <form action="photo.php?id=<?php echo $photo->id; ?>" method="post">
    <table>
      <tr>
        <td>Your name:</td>
				<div class="col-sm-4 col-sm-offset-6 text">
        <td><input type="text" placeholder="Your name"name="author" value="<?php echo $author; ?>" /></td>
      </tr>
      <tr>
        <td>Your comment:</td>
        <td><textarea name="body" placeholder="Your comment" cols="40" rows="8"><?php echo $body; ?></textarea></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit"name="submit" value="Submit Comment" /></td>
      </tr>
    </table>
  </form>
</div>
</div>

</div>


<?php include_layout_template('footer.php'); ?>
