<?php          //Load login functions and controls
          //var_dump($_POST);
          $username = '';
          $password = '';
          $fuseaction = '';
          // READ VALUES - NOTE THESE VALUES ARE NOT SCRUBBED
          $username = $_POST['uid'];
          $password = $_POST['upass'];
          $fuseaction = $_POST['fuseaction'];

          // BEGIN MANUAL FUNCTION
          if ($fuseaction == "manual") {
               if ($username == "123" || $password == "123"){
                      echo '<div class="alert alert-success">Congrats! You can now log in using your username and password. <a href="index.php">Logout</a></div>';
                 } else { 
                      echo '<div class="alert alert-danger">Sorry, it looks like that username/password combination does not exist. <a href="index.php">Try Again</a></div>';
               }  

          }
 ?>