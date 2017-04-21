<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Succotash Home Page</title>

        <!-- core CSS  -->
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,500,500i">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">



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
					<a class="navbar-brand" href="index.html">Succotash home </a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right navbar-search-button">
						<li><a class="search-button" href="index.php"><i class="fa fa-search"></i></a></li>
					</ul>
					<form class="navbar-form navbar-search-form disabled wow fadeInLeft" role="form" action="" method="post">
						<div class="form-group">
							<input type="text" name="search" placeholder="Search..." class="search form-control">
						</div>
					</form>
					<ul class="nav navbar-nav navbar-right navbar-menu-items wow fadeIn">
						<li><a href="index.php" class="active">Home</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="profile.php">MyProfile</a></li>
						<li><a href="vblog.php">VBlog</a></li>
						<li><a href="intouch.php">InTouch</a></li>
					</ul>
				</div>
			</div>
		</nav>
    <?php
    require_once("../includes/database.php");
    require_once("../includes/user.php");
    echo "Is this working?";
    echo "<br />";
    if(isset($database)){ echo "true";} else { echo "false";} // check if connection works

    $user = User::find_by_id(1);
    echo $user->full_name();

    echo "<hr />";

    $users = User::find_all();
    foreach($users as $user) {
      echo "User: ". $user->username ."<br />";
      echo "Name: ". $user->full_name() ."<br /><br />";
    }

    ?>
        <!-- Top content -->
        <div class="top-content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 text wow fadeInLeft">
                        <h1>Succotash<strong>Lenta</strong> Studio37</h1>
                        <div class="description">
                        	<p class="medium-paragraph">

                        	</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Features -->
        <div class="features-container section-container">
	        <div class="container">

	            <div class="row">
	                <div class="col-sm-12 features section-description wow fadeIn">
	                    <h2>SuccotashLenta  bar</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                </div>
	            </div>

	            <div class="row">
	                <div class="col-sm-6 features-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-sm-3 features-box-icon">
	                			<i class="fa fa-cloud"></i>
	                		</div>
	                		<div class="col-sm-9">
	                			<h3>Upload</h3>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	                <div class="col-sm-6 features-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-sm-3 features-box-icon">
	                			<i class="fa fa-instagram"></i>
	                		</div>
	                		<div class="col-sm-9">
	                			<h3>Publish</h3>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	            </div>

	            <div class="row">
	                <div class="col-sm-6 features-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-sm-3 features-box-icon">
	                			<i class="fa fa-paperclip"></i>
	                		</div>
	                		<div class="col-sm-9">
	                			<h3>Attach</h3>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	                <div class="col-sm-6 features-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-sm-3 features-box-icon">
	                			<i class="fa fa-twitter"></i>
	                		</div>
	                		<div class="col-sm-9">
	                			<h3>Social</h3>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	            </div>

	        </div>
        </div>

        <!-- Footer -->
        <footer>
	        <div class="container">
	        	<div class="row">
	        		<div class="col-sm-12 footer-copyright">
                    	&copy; Powered by <a href="Succotash">SUCCOTASH</a>
                    </div>
                </div>
	        </div>
        </footer>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
