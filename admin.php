<!DOCTYPE html>
<html lang="en">

    <?php include 'add/head.php';  ?>

  <body>

  <?php include 'add/navbar.php';  ?>
  <?php include 'database/middleware.php'; ?>
  <?php include 'database/function.php';  
    
  $posts = selectAll('posts');
  ?>

  			<div class="button-group" style="background-color: black;">
				<a href="create.php" class="btn btn-big" style="color: white">Add Post</a>
				<a href="index.php" class="btn btn-big" style="color: white">Manage Posts</a>
			</div>
			
		<section class="site-section bg-light" >
		<div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  			
				<h2 class="page-title">Manage Posts</h2>

				<table>
					<thead>
						<th>SN</th>
						<th>Title</th>
						<th>Body</th>
					</thead>
					<tbody>
						<?php foreach ($posts as $post): ?>
						<tr>
							<td><?php echo$post['id']; ?></td>
							<td><?php echo $post['title']; ?></td>
							<td><?php echo (substr($post['body'], 0, 150) . '...'); ?></td>
							</tr>
					<?php endforeach; ?>
						</tbody>
				</table>
			
			</div>
		</div>


<?php include 'add/footer.php'; ?>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>
  
<?php include 'add/scripts.php' ?>
  </body>
</html>