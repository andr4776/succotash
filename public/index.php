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

	//  find the records for this page
	$sql = "SELECT * FROM photographs ";
	$sql .= "LIMIT {$per_page} ";
	$sql .= "OFFSET {$pagination->offset()}";
	$photos = Photograph::find_by_sql($sql);


?>
<?php include_layout_template('header.php'); ?>


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
      <form role="form" name="form1" action="" method="post" class="login-form" onsubmit="required()">

         <div class="form-group">
         <label class="sr-only" for="form-userName"></label>
           <input type="text" name="formUserName" placeholder="User Name" class="form-userName form-control"  id="form-userName" required="">
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
          <button type="submit" class="btn btn-block btn-success"  onsubmit=" ">Login </button>
      </form>
    </div>
    </div>
</div>

<?php include_layout_template('footer.php'); ?>
