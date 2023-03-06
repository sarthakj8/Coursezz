<?php
$server="localhost";
$username="root";
$password="";
$database="courses";

$conn=mysqli_connect($server,$username,$password,$database);
if($conn){
}
else{
    die("Error" . mysqli_connect_error());
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_POST["email"];
    $pwd=$_POST["password"];
    $sql="SELECT * FROM user_details WHERE e_mail='$email' AND password='$pwd'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    
    if($num){
        $login=true;
        session_start();
        header('location:TIE.php');
    }
    else{
        $login=false;
        echo "INVALID CREDENTIAL";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Online Courses</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>COURSEZZ</h1>
		<nav>
			<ul>
				<li class="active"><a href="#">Home</a></li>
				<li><a href="course.php">Courses</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<section class="hero">
			<h1>Welcome to My Online Courses</h1>
			<p>Get ahead in your career with our expert-led online courses.</p>
			<a href="course.php" class="button">Browse Courses</a>
		</section>
		<br><br>

		<section class="features">
			<div>
				<img src="course1.jpg" alt="Icon 1" width="500" height="300"><br>
				<h2>Expert Instructors</h2>
				<p>Learn from top experts in your field of study.</p>
			</div>
			<div>
				<img src="course1.jpg" alt="Icon 2" width="500" height="300"><br>
				<h2>Flexible Learning</h2>
				<p>Study at your own pace, on your own schedule.</p>
			</div>
			<div>
				<img src="course1.jpg" alt="Icon 3" width="500" height="300"><br>
				<h2>Practical Skills</h2>
				<p>Gain practical skills and knowledge that you can apply immediately.</p>
			</div>
		</section>
		<br><br>
		<section class="popular-courses">
			<h2>Our Most Popular Courses</h2>
			<ul>
				<li>
					<img src="course2.jpg" alt="Course 1" width="500" height="300">
					<h3>Introduction to Data Science</h3>
					<p>Learn the fundamentals of data science and how to apply them in real-world settings.</p>
					<a href="payment.php" class="button">Enroll Now</a><br><br><br>
				</li>
				<hr>
				<li>
					<img src="course2.jpg" alt="Course 2" width="500" height="300">
					<h3>Web Development Bootcamp</h3>
					<p>Build modern, responsive websites using HTML, CSS, and JavaScript.</p>
					<a href="payment.php" class="button">Enroll Now</a><br><br><br>
				</li>
				<hr>
				<li>
					<img src="course2.jpg" alt="Course 3" width="500" height="300">
					<h3>Mastering Excel</h3>
					<p>Learn how to use Excel like a pro with our comprehensive course.</p>
					<a href="payment.php" class="button">Enroll Now</a>
				</li>
			</ul>
		</section>
	</main>

	<footer>
		<p>&copy; 2023 My Online Courses. All rights reserved.</p>
	</footer>
</body>
</html>
