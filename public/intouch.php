<?php require_once("../includes/initialize.php");?>

<?php include_layout_template('header.php'); ?>

<ul class="nav navbar-nav navbar-right navbar-menu-items wow fadeIn">
		<li><a href="index.php"> Gallery</a></li>
		<li><a href="about.php">About</a></li>
        <li><a href="admin/login.php"> Admin</a></li>
		<li><a href="photo.php?id=4"> VBlog</a></li>
		<li><a href="intouch.php" class="active">InTouch</a></li>
	</ul>
</div>
</div>
</nav>
        <!-- Loader -->
    	<!--<div class="loader">
    		<div class="loader-img"></div>
    	</div>
    -->

        <!-- Top content -->



        	<div class="top-content-gradient gradient">
            <div class="top-content">
                    <div class="row">
                        <div class="col-sm-8 text">
                            <h1 class="wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="1s">
                            	Succotash<strong>Lenta</strong>Intouch
                            </h1>
                            <h2>Coming Soon</h2>
                            <div class="description wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="2s">
                            	<p>
	                            	Working very hard on the new version. It will bring new features.

                            	</p>
                            </div>
                            <div class="timer wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.5s">
                                <div class="days-wrapper">
                                    <span class="days"></span> <span class="t-text">days /</span>
                                </div>
                                <div class="hours-wrapper">
                                    <span class="hours"></span> <span class="t-text">hours /</span>
                                </div>
                                <div class="minutes-wrapper">
                                    <span class="minutes"></span> <span class="t-text">minutes /</span>
                                </div>
                                <div class="seconds-wrapper">
                                    <span class="seconds"></span> <span class="t-text">seconds</span>
                                </div>
                            </div>
                            <div class="subscribe wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="3s">
	                			<form class="form-inline" role="form" action="assets/subscribe.php" method="post">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="subscribe-email">Email address</label>
															<div class="col-sm-4 col-sm-offset-6 text">
			                        	<input type="text" name="email" placeholder="Enter your email..." class="subscribe-email form-control" id="subscribe-email">
															</div>
			                        </div>
															<div class="col-sm-4 col-sm-offset-6 text">
			                        <button type="submit" onsubmit="return(myToast());"class="btn bnt-info" >Subscribe</button>
														</div>

			                    </form>
			                    <div class="success-message"></div>
			                    <div class="error-message"></div>
                            </div>
                        </div>
                    </div>
                  </div>
</div>
          </div>
          </div>
          <div class="features-container section-container">
                <div class="col-sm-2 features-box wow fadeInLeft">
                </div>
                    <div class="col-sm-2 features-box wow fadeInLeft">
                        <div class="col-sm-2 features-box-icon">
                          <a href="admin/login.php"<i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-2 features-box wow fadeInLeft">

                        <div class="col-sm-3 features-box-icon">
                          <a href ="admin/photo_upload.php"<i class="fa fa-upload"></i></a>
                        </div>
                    </div>

                    <div class="col-sm-2 features-box wow fadeInLeft">

                        <div class="col-sm-3 features-box-icon">
                          <a href="admin/comments.php"<i class="fa fa-magnet "></i></a>
                        </div>
                    </div>
                    <div class="col-sm-2 features-box wow fadeInLeft">
                        <div class="col-sm-3 features-box-icon">
                          <a href="admin/list_photo.php"<i class="fa fa-archive"></i></a>
                        </div>
                    </div>

                </div>
								  <div class="divider-1 wow fadeInUp"></div>
          </div>
          <br/>

          <?php include_layout_template('footer.php'); ?>
