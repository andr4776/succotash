<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Succotash Home Page</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,500,500i">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">


        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>
    <body onload="document.form1.text1.focus()">

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
					<a class="navbar-brand" href="index.html">Succotash home page</a>
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
						<li><a href="index.php">Home</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a class="active" ahref="profile.php">MyProfile</a></li>
						<li><a href="vblog.php">VBlog</a></li>
						<li><a href="intouch.php">InTouch</a></li>
					</ul>
				</div>
			</div>
		</nav>

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
	                    <h2>Profile</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                </div>
	            </div>



	            <div class="row">
	                <div class="col-sm-6 features-box wow fadeInLeft">
	                	<div class="row">
                      <h3>Contact Me</h3>
              <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor.</p>
              <ul class="menu">
                <li><a href="#">Dribbble</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Yo</a></li>
              </ul>
	                	</div>
	                </div>
	                <div class="col-sm-6 features-box wow fadeInLeft">

                    <form name="form1" role="form" action="#" method="post" class="inputEmail" onsubmit=" return(formValidate()) " novalidate=" ">

                      <div class="form-group">
                        <label class="sr-only" for="inputEmail">E-mail</label>
                          <input type="text" name="inputEmail" placeholder="Enter Your e-mail address.."  class="form-email form-control" id="form-username" required >
                        </div>
                        <div class="form-group">
                          <label class="sr-only" for="inputQuery">Message</label>
                          <textarea name="inputMessage" required placeholder="Enter Your Message..." class="form-inquery form-control" ></textarea>
                        </div>

                        <button type="submit" class="btn" onclick="ValidateEmail(document.form1.inputEmail)"></button>
                        <button type="submit" class="btn" onclick="ValidateEmail(document.form1.inputEmail)"></button>
                    </form>

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
