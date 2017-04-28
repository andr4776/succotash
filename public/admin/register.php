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
