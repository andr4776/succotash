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
   <li><a href="../index.php">Home</a></li>
   <li><a href="login.php" class="active">Login</a></li>
    <li><a href="" >Register</a></li>

<!--<?php echo output_message($message);?>-->
<div id="snackbar"><?php echo output_message($message);?></div>

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
 <div class="row">

   <div class="col-sm-10 col-sm-offset-1 show-forms">
                        <span class="show-register-form active">Register</span>
                        <span class="show-forms-divider">/</span>
                        <span class="show-login-form">Login</span>
                      </div>
     <div class="col-sm-6 col-sm-offset-3 form-box">


           <h3>Admin assistant</h3>

         <div class="form-top-right">
           <i class="fa fa-lock"></i>
           <br/>
           <br/>
         </div>

         <div class="form-bottom">
       <form action="login.php" method="post" class="login-form" >

          <div class="form-group">
          <label class="sr-only" for="form-userName"></label>
            <input type="text" name="username" placeholder="User Name" class="form-userName form-control"  maxlength="30" value="<?php echo htmlentities($username); ?>">
          </div>

          <p> </p>
           <div class="form-group">
             <label class="sr-only" for="form-password">Password</label>
             <input type="password" name="password" placeholder="Password ..." class="form-password form-control"  maxlength="30" value="<?php echo htmlentities($password); ?>">
           </div>
           <div class = "form-group">
             <div class = "col-sm-6 col-sm-offset-3 form-box">
               <div class = "checkbox">
                 <label><input type = "checkbox"> Remember me</label>
               </div>
             </div>
           </div>

           <br>
           <button onclick="myToast()" type="submit" class="btn btn-block btn-success"  name="submit" value="Login">Login </button>
       </form>
     </div>
     </div>
 </div>
<?php include_layout_template('footer_admin.php'); ?>
