<?php require_once("../includes/initialize.php"); ?>
<?php

	// 1. the current page number ($current_page)
	$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

	// 2. records per page ($per_page)
	$per_page = 5;

	// 3. total record count ($total_count)
	$total_count = Photograph::count_all();

    // find
	$pagination = new Pagination($page, $per_page, $total_count);

	//  find the records for this pa<?php require_once("../includes/initialize.php"); ?>
<?php

	// 1. the current page number ($current_page)
	$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

	// 2. records per page ($per_page)
	$per_page = 3;

	// 3. total record count ($total_count)
	$total_count = Photograph::count_all();

    // find
	$pagination = new Pagination($page, $per_page, $total_count);

	//  find the records for this page
	$sql = "SELECT * FROM photographs ";
	$sql .= "LIMIT {$per_page} ";
	$sql .= "OFFSET {$pagination->offset()}";
	$photos = Photograph::find_by_sql($sql);

	// Need to add ?page=$page to all links we want to
	// maintain the current page (or store $page in $session)

?>



<?php include_layout_template('header.php'); ?>



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
		<li><a href="register.php" class="active">Register</a></li>
		<li><a href="#">About</a></li>
		<li><a href="#" >VBlog</a></li>
		<li><a href="#">InTouch</a></li>
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
												<div id="pagination" style="clear: both;">
												<?php foreach($photos as $photo): ?>
												
														<a href="photo.php?id=<?php echo $photo->id; ?>">
															<img src="<?php echo $photo->image_path(); ?>" width="200" />
														</a>
														<!--<p><?php echo $photo->caption; ?></p>-->

												<?php endforeach; ?>
											</p>
										</div>
										</div>
								</div>

								</div>
								<br/>

								<?php
									if($pagination->total_pages() > 1) {

										if($pagination->has_previous_page()) {
											echo "<a href=\"index.php?page=";
											echo $pagination->previous_page();
											echo "\">&laquo; Previous</a> ";
										}

										for($i=1; $i <= $pagination->total_pages(); $i++) {
											if($i == $page) {
												echo " <span class=\"selected\">{$i}</span> ";
											} else {
												echo " <a href=\"index.php?page={$i}\">{$i}</a> ";
											}
										}

										if($pagination->has_next_page()) {
											echo " <a href=\"index.php?page=";
											echo $pagination->next_page();
											echo "\">Next &raquo;</a> ";
										}

									}

								?>
						</div>

				</div>


		<!-- Features -->
		<div class="features-container section-container">
			<div class="container">

					<div class="row">
							<div class="col-sm-12 features section-description wow fadeIn">
									<h2>SuccotashLenta Admin bar</h2>
									<div class="divider-1 wow fadeInUp"><span></span></div>
							</div>
					</div>

					<div class="row">
							<div class="col-sm-6 features-box wow fadeInLeft">
								<div class="row">
									<div class="col-sm-3 features-box-icon">
										<a href="admin/login.php"<i class="fa fa-eye"></i></a>
									</div>
									<div class="col-sm-9">
										<h3>Admin Login</h3>
											<p>
												Login or register for admin access.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</div>
								</div>
							</div>
							<div class="col-sm-6 features-box wow fadeInLeft">
								<div class="row">
									<div class="col-sm-3 features-box-icon">
										<a href ="admin/photo_upload.php"<i class="fa fa-download"></i></a>
									</div>
									<div class="col-sm-9">
										<h3>Download</h3>
											<p>
												Add and share.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</p>
									</div>
								</div>
							</div>
					</div>

					<div class="row">
							<div class="col-sm-6 features-box wow fadeInLeft">
								<div class="row">
									<div class="col-sm-3 features-box-icon">
										<a href="photo.php"	<i class="fa fa-magnet"></i></a>
									</div>
									<div class="col-sm-9">
										<h3>Public</h3>
											<p>
												Comment on the media.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 features-box wow fadeInLeft">
								<div class="row">
									<div class="col-sm-3 features-box-icon">
										<a href="admin/list_photos.php"<i class="fa fa-archive"></i></a>
									</div>
									<div class="col-sm-9">
										<h3>Archive</h3>
											<p>
												Browse all the media downloaded.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</p>
									</div>
								</div>
							</div>
					</div>

			</div>
		</div>

<?php include_layout_template('footer.php'); ?>
