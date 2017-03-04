<html>
<head>
    <link rel="stylesheet" href="../assets/css/loggedin.css" type="text/css" />
</head>
<?php include('../sites/header.php');?>
<body>
<?php
include('connect.php');
$sql = "SELECT * FROM login";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="box">';
            echo '<table cellpadding="2px" cellspacing="5px" align="left">';
            echo "<tr><td>    Name :</td><td>" . $row['name']. "</td></tr><tr><td>Mobile No :</td><td>" . $row['number']. "</td></tr><tr><td>     Email  :</td><td>" . $row['email']."</td></tr><br>";
            echo '</table></div>';
    }
}
    else {
    echo "0 results";
}
$conn->close();
?>
</body>
<!--<?php include('../sites/footer.php');?>-->
<html>