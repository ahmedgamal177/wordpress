
<html>
<h1><?php echo get_the_title()?></h1>
<h3>Our Location</h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.2264000390874!2d31.338475964594693!3d30.08770172348391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e1d6d0ca4e7%3A0xcb1b8ac787df06b9!2sMitchDesigns!5e0!3m2!1sen!2seg!4v1572208652348!5m2!1sen!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
<h3>How Can We Help You</h3>
<div>
	<form action="" method="post">
		<label for="fname">First Name</label>
		<br>
		<input type="text" id="fname" name="firstname" placeholder="Your name..">
		<br>
		<label for="lname">Last Name</label>
		<br>
		<input type="text" id="lname" name="lastname" placeholder="Your last name..">
		<br>
		<label for="country">Country</label>
		<br>
		<select id="country" name="country">
			<option value="San Diego">San Diego</option>
			<option value="Cairo">Cairo</option>
		</select>
		<br>
		<label for="email">Email</label>
		<br>
		<input type="text" id="email" name="emaill" placeholder="Your Email..">
		<br>
		<label for="subject">Subject</label>
		<br>
		<textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
		<br>
		<input type="submit" name="submit" value="Submit">
		<br>
	</form>
</div>
<h3>Our Contact Info</h3>
<h5>Address</h5>
<label for="address">MitchDesigns
	22 El-Horeya, Almazah, Heliopolis, Cairo Governorate</label>
<br>
<h5>Email</h5>
<label for="email">ahmed@mitchdesigns.com</label>
<br>
<h5>Phone Number</h5>
<label for="phone"> +20224188410</label>

</html>
<?php
if(isset($_POST['submit']))
{
	$mysqli_host = "localhost";
	$mysql_username = "root";
	$mysql_password = "";
	$site_db = "mitch";
	$con=mysqli_connect($mysqli_host,$mysql_username,$mysql_password,$site_db);


	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$email = $_POST['emaill'];
	$subject = $_POST['subject'];
	$country = $_POST['country'];
	$sql =mysqli_query($con, "INSERT INTO contacts (`first`, `last`, `email`,`subject`,`country` )
VALUES ('$fname', '$lname', '$email','$subject','$country');");


}
?>