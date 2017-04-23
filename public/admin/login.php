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
     <div class="col-sm-6 col-sm-offset-3 form-box">
       <div class="form-top">
         <div class="form-top-left">
           <h3>Admin assistant</h3>
             <p>Login to proceed </p>
         </div>
         <div class="form-top-right">
           <i class="fa fa-lock"></i>
           <br>
         </div>
         </div>
         <div class="form-bottom">
       <form role="form" name="form1" action="login.php" method="post" class="login-form" onsubmit="required()">

          <div class="form-group">
          <label class="sr-only" for="form-userName"></label>
            <input type="text" name="formUserName" placeholder="User Name" class="form-userName form-control"  id="form-userName" required="" maxlength="30" value="<?php echo htmlentities($username); ?>">
          </div>

          <p> </p>
           <div class="form-group">
             <label class="sr-only" for="form-password">Password</label>
             <input type="password" name="form-password" placeholder="Password ..." class="form-password form-control" id="form-password" maxlength="30" value="<?php echo htmlentities($password); ?>">
           </div>
           <div class = "form-group">
             <div class = "col-sm-6 col-sm-offset-3 form-box">
               <div class = "checkbox">
                 <label><input type = "checkbox"> Remember me</label>
               </div>
             </div>
           </div>

           <br>
           <button type="submit" class="btn btn-block btn-success"  onsubmit=" " name="submit" value="Login">Login </button>
       </form>
     </div>
     </div>
 </div>
<?php include_layout_template('footer.php'); ?>
