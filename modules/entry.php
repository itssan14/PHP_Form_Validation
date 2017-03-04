<?php
    session_start();
?>
<html>
  <head>
    <link rel="stylesheet" href="../assets/css/target.css">
   </head>
    <?php

    include 'connect.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $pwd=rand(500000,800000);
    $sql = "INSERT INTO login (name, number, email,password) VALUES ('$name','$number', '$email','$pwd')";

    if ($conn->query($sql) === TRUE) {
        echo '<span class="target">Succesfully Created</span>','<br>';
        echo '<span class="response">Please check your inbox for an validation email</span>';
        include 'email.php';
    } else {
        echo '<span class="target">Data Entry Failed</span>','<br>';
        echo '<span class="response">Error: ' . $conn->error.'</span>';
    }
    $SESSION['email']=$email;
    $conn->close();

    ?>
</html>
