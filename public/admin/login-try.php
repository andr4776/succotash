<?php
require_once("../../includes/initialize.php");


if($session->is_logged_in()) {
  redirect_to("index.php");
}


if (isset($_POST['submit'])) { // Form has been submitted.

  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  // Check database to see if username/password exist.
	$found_user = User::authenticate($username, $password);

  if ($found_user) {
    $session->login($found_user);
    redirect_to("index.php");
  } else {
    // username/password combo was not found in the database
    $message = "Username/password combination incorrect.";
  }

} else { // Form has not been submitted.
  $username = "";
  $password = "";
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


<!--<?php echo output_message($message);?>-->


 </nav>
 <div class="top-content">
 <div class="container">




<!--<div clas="row">
  <span ><a href="register.php" class="active">Register</a></span>
  <span class="show-forms-divider">/</span>
  <span><a href="login.php" >Login</a></span>
</div>
     </br>
     <div class="divider-1 wow fadeInUp"><span></span></div>-->
 <h2>Admin Area Access</h2>

         <div class="form-top-right">
           <i class="fa fa-lock"></i>
         </div>

<div class="col-sm-6 col-sm-offset-3 text">
 <form role="form" action="" method="post" class="r-form">
       <div class="form-group">
         <label class="sr-only" for="r-form-first-name">First name</label>
         <input type="text" name="r-form-first-name" placeholder="First name..." class="r-form-first-name form-control" id="r-form-first-name">
          </div>

         <div class="form-group">
            <label class="sr-only" for="r-form-last-name">Last name</label>
            <input type="text" name="r-form-last-name" placeholder="Last name..." class="r-form-last-name form-control" id="r-form-last-name">
          </div>

        <div class="form-group">
          <label class="sr-only" for="r-form-email">Email</label>
          <input type="text" name="r-form-email" placeholder="Email..." class="r-form-email form-control" id="r-form-email">
           </div>

           <div class="form-group">
           <label class="sr-only" for="r-form-userName"></label>
             <input type="text" name="username" placeholder="User Name" class="form-userName form-control"  maxlength="30" value="<?php echo htmlentities($username); ?>">
           </div>
           <div class="form-group">
             <label class="sr-only" for="r-form-password">Password</label>
             <input type="password" name="password" placeholder="Password ..." class="form-password form-control"  maxlength="30" value="<?php echo htmlentities($password); ?>">
           </div>

    <button onclick="myToast()" type="submit" class="btn btn-block btn-success"  name="submit" value="submit">Sing me up! </button>
  </form>
</div>
<div class="row">
<div class="col-sm-8 col-sm-offset-2 text">
    <h1>Succotash<strong>Lenta</strong> Studio37</h1>
    <div class="description">
      <p>
          <div class="divider-1 wow fadeInUp"><span></span></div>
        <strong></strong></a>
      </p>
    </div>
</div>
</div>

<?php include_layout_template('footer_admin.php'); ?>
