<?php
$insert = false;
$server="localhost";
  $username="root";
  $password="";
  $database="courses";
  $con=mysqli_connect($server,$username,$password,$database);
if(isset($_POST['name'])){
  
  $username=$_POST['name'];
  $e_mailid=$_POST['e_mail'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];
  $subscribe="No";
  if(filter_has_var(INPUT_POST,'checkbox')) {
	$subscribe="Yes";
	}
  $sql="INSERT INTO `contact_user`(`name`, `email`, `subject`,`message`, `subscribe`) VALUES ('$username', '$e_mailid', '$subject', '$message', '$subscribe')";
  if($con->query($sql) == true){
    // echo "Successfully inserted";
    header("location:TIE.php");
    // Flag for successful insertion
    //$insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

// Close the database connection
$con->close();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us | My Online Courses</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>COURSEZZ</h1>
		<nav>
			<ul>
				<li><a href="TIE.php">Home</a></li>
				<li><a href="course.php">Courses</a></li>
				<li><a href="about.php">About</a></li>
				<li class="active"><a href="#">Contact</a></li>
				
			</ul>
		</nav>
	</header>

	<main>
		<section>
			<center><h1>Contact Us</h1>
			<form action="contact.php" method="post">
				<p><label for="name">Full Name</label>
				<input type="text" id="name" name="name" required></p>

				<p></p><label for="email">Email</label>
				<input type="email" id="email" name="e_mail" required></p>

				<p></p><label for="subject">Subject</label>
				<input type="text" id="subject" name="subject" required></p>

				<p></p><label for="message">Message</label>
				<textarea id="message" name="message" rows="5" required></textarea></p>

				<p><input type="checkbox" name="checkbox">Subscribe for newsletter</input></p>

				<button type="submit">Submit</button>
			</form>
            </center>
		</section>
	</main>

	<footer>
		<p>&copy; 2023 My Online Courses. All rights reserved.</p>
	</footer>
</body>
</html>
