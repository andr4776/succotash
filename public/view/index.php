<?php require_once("../../includes/initialize.php"); ?>
<?php

	// 1. the current page number ($current_page)
	$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

	// 2. records per page ($per_page)
	$per_page = 5;

	// 3. total record count ($total_count)
	$total_count = Photograph::count_all();

    // find
	$pagination = new Pagination($page, $per_page, $total_count);

	//  find the records for this page
	$sql = "SELECT * FROM photographs ";
	$sql .= "LIMIT {$per_page} ";
	$sql .= "OFFSET {$pagination->offset()}";
	$photos = Photograph::find_by_sql($sql);


?>
<?php include_layout_template('header.php'); ?>
<!-- Top content -->
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
									<h2>SuccotashLenta Admin bar</h2>
									<div class="divider-1 wow fadeInUp"><span></span></div>
							</div>
					</div>

					<div class="row">
							<div class="col-sm-6 features-box wow fadeInLeft">
								<div class="row">
									<div class="col-sm-3 features-box-icon">
										<i class="fa fa-eye"></i>
									</div>
									<div class="col-sm-9">
										<h3>Admin</h3>
											<p>
												Login or register for admin access.
									</div>
								</div>
							</div>
							<div class="col-sm-6 features-box wow fadeInLeft">
								<div class="row">
									<div class="col-sm-3 features-box-icon">
										<i class="fa fa-magnet"></i>
									</div>
									<div class="col-sm-9">
										<h3>Public</h3>
											<p>
												Browse and comment on the media.
											</p>
									</div>
								</div>
							</div>
					</div>

					<div class="row">
							<div class="col-sm-6 features-box wow fadeInLeft">
								<div class="row">
									<div class="col-sm-3 features-box-icon">
										<i class="fa fa-archive"></i>
									</div>
									<div class="col-sm-9">
										<h3>Archive</h3>
											<p>
												Browse all the media downloaded.
											</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 features-box wow fadeInLeft">
								<div class="row">
									<div class="col-sm-3 features-box-icon">
										<i class="fa fa-download"></i>
									</div>
									<div class="col-sm-9">
										<h3>Download</h3>
											<p>
												Add and share media.
											</p>
									</div>
								</div>
							</div>
					</div>

			</div>
		</div>

<?php include_layout_template('footer.php'); ?>
