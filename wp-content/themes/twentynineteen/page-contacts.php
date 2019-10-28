<?php
$mysqli_host = "localhost";
$mysql_username = "root";
$mysql_password = "";
$site_db = "mitch";
$con=mysqli_connect($mysqli_host,$mysql_username,$mysql_password,$site_db);
$sql =mysqli_query($con, "Select * From contacts;");
echo '<h1>'.get_the_title().'</h1>';
while ($row = mysqli_fetch_array($sql)) {
	echo '<h4>First Name</h4>'.$row["first"].'<br>'.'<h4>Last Name</h4>'.$row["last"].'<br>'.'<h4>Country</h4>'.$row["country"].'<br>'.'<h4>Subject</h4>'.$row['subject'].'<br>'.'<h4>Email</h4>'.$row['email'].'<hr>';
}
?>