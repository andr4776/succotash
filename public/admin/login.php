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
    
    <html lang="en">
    <link href="../stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>

    <!-- core CSS  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,500,500i">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />

    </head>

    <body>

    <!-- Top menu -->
    <nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
    <div class="navbar-header wow fadeIn">
    <a class="navbar-brand" href="index.html">Admin Login </a>
    </div>
    </nav>

    ?>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-box">
          <div class="form-top">
            <div class="form-top-left">
              <h3>Admin Login </h3>
              <?php  echo output_message($message); ?>
                <p>Enter your username and password</p>
            </div>
            <div class="form-top-right">

              <i class="fa fa-lock "></i>
              <br><br>
            </div>
            </div>
            <div class="form-bottom">
          <form  action="login.php" method="post" class="login-form" onsubmit="required()">
            <div class="form-group">
              <label class="sr-only" for="form-userName"></label>
                <input type="text" name="form-userName" placeholder="Username..." class="form-control"  id="form-username" maxlength="30" value="<?php echo htmlentities($username); ?>"/>
              </div>
              <div class="form-group">
                <label class="sr-only" for="form-password">Password</label>
                <input type="password" name="form-password" placeholder="Password..." class="form-control" id="form-password" maxlength="30" value="<?php echo htmlentities($password); ?>"/>
              </div>
              <div class="col-sm-3 col-sm-offset-2 ">
              <button type="submit" name="submit" class="btn btn-lg">Login</button>
              </div>
            </div>
          </form>
        </div>
        </div>
        </div>
</div id="footer" >Copiright <?php echo date( "Y", time()); ?>, Andre Roman </div>
  </body>
  <!-- Javascript -->
  <script src="../assets/js/jquery-1.11.1.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/js/jquery.backstretch.min.js"></script>
  <script src="../assets/js/scripts.js"></script>

  <!--[if lt IE 10]>
      <script src="assets/js/placeholder.js"></script>
  <![endif]-->
</html>
<?php if(isset($database)) { $database->close_connection(); } ?>
