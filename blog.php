<!DOCTYPE html>
<html lang="en">
 
    <?php include 'add/head.php';  ?>

<head>
  <title>Blog | Resource Centre</title>
</head>
<body>
    <?php include 'add/navbar.php';
    

 if (empty($_SESSION['users']['username'])) {
    echo '<br><h2><p class="text-center"> You need to login to access the blog</p></h2>';
    echo '<meta http-equiv="refresh" content="3; url=login.php">';
    die();
    }
      
      ?>

       <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
         <div class="mb-5 element-animate">
              <h1 class="mb-2"><br>News Centre</h1>
            </div>
          </div>
          <br>     
          <?php include 'database/function.php';  ?>
    

         <?php
            $posts = selectAll('posts');
            ?>
      <div class="col-md-12 col-lg-12 mb-5">
        <div class="post">
          <?php foreach ($posts as $post): ?>
          <h3><?php echo $post['title']; ?></h3>
          <p><?php echo $post['body']; ?></p>
           <p class="bcrumb"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></a></p>
         <?php endforeach; ?>
        </div>
      </div>
 </div>
 </div>               
<?php include 'add/footer.php'; ?>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>
  
<?php include 'add/scripts.php' ?>
  </body>
</html> 