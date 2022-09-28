<?php include 'database/connect.php'; ?>
<header role="banner">
     
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">RESOURCE CENTRE</a><div><div style="font-family: monospace; font-style: italic; font-size: 1.2em ">Computer Science Department</div></div>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          
          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">NCE Courses</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="100level.php">100 Level NCE</a>
                  <a class="dropdown-item" href="200level.php">200 Level NCE</a>
                  <a class="dropdown-item" href="300level.php">300 Level NCE</a>
                </div>

              </li>
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Degree Courses</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="degree1.php">100 Level Degree</a>
                  <a class="dropdown-item" href="degree2.php">200 Level Degree</a>
                  <a class="dropdown-item" href="degree3.php">300 Level Degree</a>
                  <a class="dropdown-item" href="degree4.php">400 Level Degree</a>
                </div>

              </li>

                  <?php if(isset($_SESSION['users']['username'])):?>

                <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
              </li> 
            <?php endif; ?>
                <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
            </ul>
            
            <ul class="navbar-nav absolute-right">
              <li>

              <?php if(isset($_SESSION['users']['username'])):?>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="fa fa-user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 1.2em ">
                  <?php echo $_SESSION['users']['username']; ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <?php if($_SESSION['users']['role']=='admin'):?>

                <a class="dropdown-item" href="admin.php">Dashboard</a>
              
            <?php endif; ?>
                  <a class="dropdown-item" href="<?php echo 'logout.php' ?>">Logout</a>
                  </div>
                </li>
              <?php else: ?>
                <li><a href="login.php">Login</a> / <a href="register.php">Register</a></li> 
              <?php endif; ?>
            </ul>

          </div>
        </div>
      </nav>
    </header>