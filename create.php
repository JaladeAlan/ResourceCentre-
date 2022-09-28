<!DOCTYPE html>
<html lang="en">

    <?php include 'add/head.php';  ?>

  <body>

  <?php include 'add/navbar.php';  ?>
 <?php include 'database/middleware.php'; ?>
          	<div class="button-group" style="background-color: blue">
			<a href="create.php" class="btn btn-big" style="color: red">Add Post</a>
			<a href="admin.php" class="btn btn-big" style="color: red; background-color: blue">Manage Posts</a>
		</div>
    <section class="site-section bg-light" >
      <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  			
				<h2 class="page-title bg-light">Add Post</h2>
			</div>
			  <div class="container" >

				<form action="create.php" method="post" enctype="multipart/form-data">
					<div class="col-md-12 form-group">
						Title:<br>
						<input type="text" name="title" class="text-input">
					</div>
				<div class="col-md-12 form-group">
						Body:<br>
						<textarea name="body" id="body" rows="8" cols="40" ></textarea>
					</div>
					
					<div>
						
				</div>
				<div>
					<button type="submit" name= "add-post" class="btn btn-primary" style="">Add Post</button>
				</div>
				<?php
				if (isset($_POST['add-post'])) {
		        $title = $_POST['title'];
		        $body    = $_POST['body'];
		        
		        $post_result = mysqli_query($mysqli, "select 'title' from posts where title='$title' and body='$body'");

		        $post_matched = mysqli_num_rows($post_result);

		        if ($post_matched > 0) {
		            echo "<br/><br/><strong>Error: </strong> Title already exists with the title '$title'.";
		        } else {
		        	unset($_POST['add-post']);
						$_POST['body'] = htmlentities($_POST['body']);
		          
		            $result   = mysqli_query($mysqli, "INSERT INTO posts(title,body) VALUES('$title','$body')");


		            if ($result) {
		                echo "<br/>Post Created Successfully";
		               } else {
		                echo "Post not created" . mysqli_error($mysqli);
		            }
		        }

		        }

        ?>

				</form>
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