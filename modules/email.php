<?php
$subject = "Validation Code";
$url="localhost/PHP/code.php";
$txt = "Your current validation code is " . $pwd."/n ".$url;
$headers = "From: webmaster@sanjay.ga" ;
mail($email,$subject,$txt,$headers);
?>


