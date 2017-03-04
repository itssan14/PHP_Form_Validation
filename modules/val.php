<head>
  <link rel="stylesheet " href="text/css" type="text/css" />
</head>
<?php
   include("connect.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['pwd']);

      $sql = "SELECT * FROM login WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) {
        include ('loggedin.php');
      }else {
        echo '<span class="target">Login Failed</span>';
      }
   }
?>