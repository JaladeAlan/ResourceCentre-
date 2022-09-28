<!DOCTYPE html>
<html lang="en">

    <?php include 'add/head.php';  ?>

  <body>

  <?php include 'add/navbar.php';  ?>

    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="form-wrap">
              <h2 class="mb-5">Register new account</h2>
              <form action="register.php" method="post">

                      
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="name">Username</label>
                      <input type="text" name="username"  class="form-control py-2" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Email Address</label>
                      <input type="email" name="email"  class="form-control py-2" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Password</label>
                      <input type="password" name="password"  class="form-control py-2 " required>
                    </div>
                  </div>
                  
                  <div class="row">
                    <button type="submit" name="register-btn" value="Register" class="btn btn-primary px-5 py-2">Register</button>
                  </div>
                  <p style="padding-top: 15">or <a href="login.php">Login</a></p>

                  <?php include 'database/validate.php' ?>

                  </form>
              </div>
          </div>
        </div>
      </div>
    </section>  

<?php include 'add/footer.php'; ?>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>
  
<?php include 'add/scripts.php' ?>
  </body>
</html>