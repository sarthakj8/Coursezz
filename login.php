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
	<title>Login | My Online Courses</title>
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
    <legend><h1>Login</h1></legend>
    <form action="login.php" method="post">    
    <div class="container1">
        <div>
            <label for="username"><b>E-Mail</b></label>
            <input type="text" placeholder="Enter E-Mail" name="email" required>
    
            <label for="passsword"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            
            <button type="submit" name>Login</button><br><br>
            <label for="sup"><b>or <a href="signup.php">Create Account</a></b></label><br><br>
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
