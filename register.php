<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SuccotashLenta Login</title>

        <!-- core CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		    <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- custom styles for the form -->
        <link href="" ref =""

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

      <!-- Top menu -->
      <nav class="navbar navbar-inverse" role="navigation">
  			<div class="container">
  				<div class="navbar-header wow fadeIn">
  					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
  						<span class="sr-only">Toggle navigation</span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  					</button>
  					<a class="navbar-brand" href=""></a>
  				</div>
  				<!-- Collect the nav links, forms, and other content for toggling -->
  				<div class="collapse navbar-collapse" id="top-navbar-1">
  					<ul class="nav navbar-nav navbar-right navbar-search-button">
  						<li><a class="search-button" href=""><i class="fa fa-search"></i></a></li>
  					</ul>
  					<form class="navbar-form navbar-search-form disabled wow fadeInLeft" role="form" action="" method="post">
  						<div class="form-group">
  							<input type="text" name="search" placeholder="Search..." class="search form-control">
  						</div>
  					</form>
  					<ul class="nav navbar-nav navbar-right navbar-menu-items wow fadeIn">
  						<li><a href="index.php">Home</a></li>
  						<li><a href="login.php" class="active">Login</a></li>
  						<li><a href="profile.php">MyProfile</a></li>
  						<li><a href="vblog.php" >VBlog</a></li>
  						<li><a href="intouch.php">InTouch</a></li>
  					</ul>
  				</div>
  			</div>
  		</nav>
        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">

                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>New edge<strong></strong> for the hedge</h1>
                            <div class="description">
                            	<p>

	                            	<strong>DG</strong></a>
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Hedgehog's </h3>
                            		<p>Join the hedging fund </p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                              <br>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" name="form1" action="" method="post" class="login-form" onsubmit="required()">
			                    	  <div class="form-group">
			                    		<label class="sr-only" for="form-firstName"></label>
			                        	<input type="text" name="formEmail" placeholder="First Name" class="form-control"  id="form-firstName" required autofocus>
			                        </div>
                              <div class="form-group">
                             <label class="sr-only" for="form-lastName"></label>
                               <input type="text" name="formLastName" placeholder="Last Name" class="form-lastName form-control"  id="form-lastName" required="">
                             </div>
                             <div class="form-group">
                             <label class="sr-only" for="form-userName"></label>
                               <input type="text" name="formUserName" placeholder="User Name" class="form-userName form-control"  id="form-userName" required="">
                             </div>
                             <div class="form-group">
                             <label class="sr-only" for="form-email"></label>
                               <input type="text" name="formEmail" placeholder="Email" class="form-email form-control"  id="form-email" onmouseover  oninvalid="red">
                             </div>

                             <p> </p>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="form-password" placeholder="Password ..." class="form-password form-control" id="form-password">
			                        </div>
                              <div class = "form-group">
                                <div class = "col-sm-6 col-sm-offset-3 form-box">
                                  <div class = "checkbox">
                                    <label><input type = "checkbox"> Remember me</label>
                                  </div>
                                </div>
                              </div>

                              <br>
			                        <button type="submit" class="btn btn-block btn-success"  onsubmit=" ">get me registered! </button>
			                    </form>
		                    </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>...or login with:</h3>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-twitter"></i> Twitter
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-google-plus"></i> Google Plus
	                        	</a>
                        	</div>
                        </div>
                    </div>

            </div>

        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
