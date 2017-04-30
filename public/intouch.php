<?php
require_once("../includes/initialize.php");?>

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

        <?php


        // Email address verification

        function isEmail($email) {
            return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i", $email));
        }

        if($_POST) {

            // Enter the email where you want to receive the notification when someone subscribes
            $emailTo = 'contact.andre_roman_@outlook.com.com';

            $subscriber_email = addslashes(trim($_POST['email']));

            if(!isEmail($subscriber_email)) {
                $array = array();
                $array['valid'] = 0;
                $array['message'] = 'Insert a valid email address!';
                echo json_encode($array);
            }
            else {
                $array = array();
                $array['valid'] = 1;
                $array['message'] = 'Thanks for your subscription!';
                echo json_encode($array);

                // Send email
        	    $subject = 'New Subscriber (uizer)!';
        	    $body = "You have a new subscriber!\n\nEmail: " . $subscriber_email;
                // uncomment this to set the From and Reply-To emails, then pass the $headers variable to the "mail" function below
        	    //$headers = "From: ".$subscriber_email." <" . $subscriber_email . ">" . "\r\n" . "Reply-To: " . $subscriber_email;
        	    mail($emailTo, $subject, $body);
            }

        }

        ?>

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
                            <div class="timer wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2.5s">
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
			                        	<input type="text" name="email" placeholder="Enter your email..." class="subscribe-email form-control" id="subscribe-email">
			                        </div>
			                        <button type="submit" class="btn">Subscribe</button>
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
