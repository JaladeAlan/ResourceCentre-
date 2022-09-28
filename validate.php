<?php
		
      if (isset($_POST['register-btn'])) {
          $username     = $_POST['username'];
          $email    = $_POST['email'];
          $password = $_POST['password'];
          $password = md5($password); 
              
          $name_result = mysqli_query($mysqli, "SELECT 'username' FROM users WHERE username='$username' AND password='$password'");
          $user_matched = mysqli_num_rows($name_result);

          if ($user_matched > 0) {
              echo "<br/><br/><strong>Error: </strong> User already exists with the username id '$username'.";
          } else {
              $result   = mysqli_query($mysqli, "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')");

              if ($result) {
                  echo "<br/>User registered successfully. Please log in";
                  echo '<meta http-equiv="refresh" content="3; url=login.php">';
              } else {
                  echo "Registration error. Please try again." . mysqli_error($mysqli);
              }
          }
      }
	
        if (isset($_POST['login-btn'])) {
            $username    = $_POST['username'];
            $password = $_POST['password'];
            $password = md5($password);

            $result = mysqli_query($mysqli, "SELECT * FROM users  WHERE username='$username' AND password='$password'");

            $row= mysqli_fetch_assoc($result);
             $matched = mysqli_num_rows($result);
         
            if ($matched==1) {

                $_SESSION['users']=array(
                  'username'=>$row['username'],
                  'password'=>$row['password'],
                  'role'=>$row['role']
                );
                $role=$_SESSION['users']['role'];
                switch ($role) {
                   case 'user':
                     echo "<br/>User logged in successfully";
                     echo '<meta http-equiv="refresh" content="3; url=index.php">';
                     break;
                   case 'admin':
                     echo "<br/>Admin user logged in successfully";
                     echo '<meta http-equiv="refresh" content="3; url=admin.php">';
                     break;
                 } 
                }else {
                echo "Username or password is not matched <br/><br/>";
            }
        }
        