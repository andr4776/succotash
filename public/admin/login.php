<?php require_once("../../includes/initialize.php");
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
		<li><a href="intouch.php">InTouch</a></li>
	</ul>
</div>
</div>



 </nav>

 <div class="top-content">
 <div class="container">

<?php echo output_message($message);?>


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
       <form role="form" action="" name="form" method="POST" class="login-form" >

          <div class="form-group">
          <label class="sr-only" for="username"></label>
            <input type="text" name="username"  placeholder="User Name" class="username form-control"  maxlength="30" value="<?php htmlentities($username); ?>">
          </div>

          <p> </p>
           <div class="form-group">
             <label class="sr-only" for="password">Password</label>
             <input type="password" name="password" placeholder="Password ..." class="password form-control"  maxlength="30" value="<?php htmlentities($password); ?>">
           </div>
           <div class = "form-group">
             <div class = "col-sm-6 col-sm-offset-3 form-box">
               <div class = "checkbox">
                 <label><input type = "checkbox"> Remember me</label>
               </div>
             </div>
           </div>
           <button  type="submit" class="btn btn-block btn-success"  name="submit">Login </button>
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
