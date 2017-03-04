<html>
<head>
  <link rel="stylesheet" href="../assets/css/target.css">
</head>
<?php
  include('connect.php');
  if($_SERVER["REQUEST_METHOD"] == "POST") {
  $myusername = mysqli_real_escape_string($conn,$_POST['email']);
  $valcode = mysqli_real_escape_string($conn,$_POST['code']);
  $mypassword = $_POST['pwd'];
  $sql = "UPDATE login SET password='$mypassword' WHERE email='$myusername' AND password='$valcode' ";
  $result = mysqli_query($conn,$sql);
  if($result == 1) {
      echo '<span class="target">Record updated successfully</span>';
    } else {
      echo '<span class="target">Error updating record: ' . $conn->error.'</span>';
    }
  }


?>

</html>
