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
  $password=$_POST['password'];
  $sql="INSERT INTO `user_details`(`name`, `e_mail`, `password`) VALUES ('$username', '$e_mailid', '$password')";
  if($con->query($sql) == true){
    // echo "Successfully inserted";
    header("location:index.php");
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
	<title>Signup | My Online Courses</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    body {
    font-family: Arial, Helvetica, sans-serif;
    background-size:cover;
    background-attachment: fixed;
    }
    fieldset{
        border-radius: 5px;
        border-width: 4px;
        border-style: solid black;
        border-color: black;
		margin-left: 35%;
    	margin-right: 38%;
    }
    a{
      color:#fff;

    }
    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }
    button:hover {
      opacity: 0.8;
    }
    .container1{
        float:left;
        width: 400px;        
    }
</style>
<body>
	<header>
		<h1>COURSEZZ</h1>
	</header>	

	<main>
    <fieldset>
    <legend><h1>Signup</h1></legend>
    <form action="signup.php" method="post">    
    <div class="container1">
        <div>
            <label for="name"><b>Username</b></label>
            <input type="text" placeholder="Enter Full name" name="name" required>

            <label for="username"><b>E-Mail</b></label>
            <input type="text" placeholder="Enter E-Mail" name="e_mail" required>
    
            <label for="passsword"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            
            <button type="submit" name>Signup</button><br>
            
        </div>
    </div>
   
    </form>
    </fieldset>
	</main>

	<footer>
		<p>&copy; 2023 My Online Courses. All rights reserved.</p>
	</footer>
</body>
</html>
