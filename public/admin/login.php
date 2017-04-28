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
   <li><a href="login.php" class="active">Admin</a></li>
    <li><a href="" >Register</a></li>

<!--<?php echo output_message($message);?>-->
<div id="snackbar"><?php echo output_message($message);?></div>

 </ul>
 </div>
 </div>
 </nav>
<div class="container">

 <div class="top-content">



 <!--<div class="inner-bg">-->

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
   <span class="show-register-form">Register</span>
   <span class="show-forms-divider">/</span>
   <span class="show-login-form active">Login</span>

 </div>

 <div class="row register-form">
     <div class="col-sm-6 col-sm-offset-3 form-box">
           <h3>Admin assistant</h3>

         <div class="form-top-right">
           <i class="fa fa-lock"></i>
           <br/>
           <br/>
         </div>

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

   </div>


<div class="row login-form">
  <div class="col-sm-6 col-sm-offset-3 form-box">

       <form role="form" action="" method="post" class="l-form">

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

</div>
<?php include_layout_template('footer_admin.php'); ?>
