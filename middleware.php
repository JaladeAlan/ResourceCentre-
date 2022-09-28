<?php
	

if (empty($_SESSION['users'])) {
    echo '<br><h2><p class="text-center"> You do not have access</p></h2>';
    echo '<meta http-equiv="refresh" content="3; url=index.php">';
   die();
   }

   if ($_SESSION['users']['role']=='user') {
    echo '<br><h2><p class="text-center"> You do not have access</p></h2>';
    echo '<meta http-equiv="refresh" content="3; url=index.php">';
    die();
    }