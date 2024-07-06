<?php
	session_start();
	
	if(isset($_SESSION['username'])) {
		header("location:index.php");	
	}

$servername ="localhost";
$username ="root";
$password ="";
$dbname ="hotel";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
	die("Connection Error");
}

if(isset($_POST['submit'])) {
	
	
	
	//retreving values from form
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM user WHERE user_name='$username'";
	
	
	$result = mysqli_query($conn, $sql);
	
	
	if($result) {
		while($row=mysqli_fetch_row($result)){

			$ver=password_verify($password,$row[4]);
			
			
			if($ver) {
				$_SESSION['username'] = $username;
				header("location:index.php");
			} else{
	
				echo "You have an issue with your password or username";
			}
		}
	} 
	


	
	
}


?>


<!DOCTYPE html>
<html>
	<head>
	<title>Hotel Transylvania</title>
		
	<meta name="viewport" content="width=device-width,initial-scale=1,0"> 
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link href="css/new.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

	<link href="css/style.css" rel="stylesheet">
	</head>
  
	<body style="background-image:url('images/banner1.jpg')">
		<header> <!--Header of the web page -->
			<div>
				<h1>Hotel Transylvania</h1>
				
				<nav><!--Navigation bar-->
					<ul class="nav">
								<li><a href="index.php" target="_self" title="Home">Home</a></li>
								<li><a href="contact.php" target="_self" title="Contacts">Contact Us</a></li>
								<li><a href="blog.php"target="_self" title="Blog">Blog</a></li>
								<li><?php if(isset($_SESSION['username'])) { ?>
										<a href="logout.php">Log out</a>
									<?php } else { ?>
										<a href="login.php" class="active">Log In</a>
									<?php } ?>
								</li>
					</ul>
				</nav>
			</div>

		</header>
		<div style="background-image:url('images/white.jpg')" class="loginimg">
			<div class="row">
				<div class="col-md-3"></div>		
				<div class="col-md-6" >
				<div class="box">
					<form method="post" name="register_form" action="" onsubmit="validateForm();"> <!--Login form -->
					<h2>Already Registered? .... Log in</h2></br></br>
							<div id="response"></div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" id="username" placeholder="Enter Username" required>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" id="password" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
							</div>
							<button type="submit" name="submit" class="registerbtn">Log In</button>
							<a id="signup" href="register.php" class="btn btn-default" style="color:white;">Do not have an account? Click here Register!</a>
					</form>			
				</div>
				</div>
				<div class="col-md-3"><a href="adminlogin.php" class="addpost_btn">Admin Login</a></div>
			</div>
		</div>

		<div class="footer" >
		<footer class="footer">
  <div class="footer__addr">
    <p class="footer__logo newh1">Hotel Transylvania</p>
        
    <h2>Contact</h2>
    
    <address>
      5534 Somewhere In. The World 22193-10212<br>
          
      <a class="footer__btn" href="mailto:area51@gmail.com">Email</a>
    </address>
  </div>
  
 
  
  <div class="legal">
    <p>&copy; 2023 Janaka. All rights reserved.</p>
    

  </div>
</div>
</footer>
  
		  <script>
		function validateForm() {
			var password = document.getElementById('password').value;
		
			
			var re = new RegExp(/^(?:\+\d{2})?\d{10}(?:,(?:\+\d{2})?\d{10})*$/);
			
			//lowercase
			 if (!password.value.match(/[a-z]/)) {
            alert("Password must contain at least one lower case letter.");
            password.focus();
            return false;
        }
        
			//Validating length
			if ((password.value).length < 8) {
				alert("Your password has less than 8 characters.");
				password.focus();
				return false;
			}
			
		   //check for upper 
			if (!passwordt.value.match(/[A-Z]/)) {
				alert("Password must contain at least one upper case letter.");
				password.focus();
				return false;
			}
			
			   //check for number
			if (!password.value.match(/\d+/g)) {
				alert("Password must contain at least one number.");
				password.focus();
				return false;
			}
			
			
			
		}
		//input field
		var input = document.getElementById("password");
		

		// Caps Lock on text
		var text = document.getElementById("text");


		// Function runs ,when the user presses any key on the keyboard
		input.addEventListener("keyup", function(event) {

		  // If "caps lock" is pressed, display the warning text
		  if (event.getModifierState("CapsLock")) {
			text.style.display = "block";
		  } else {
			text.style.display = "none"
		  }
		});

	  </script>			

		
	</body>
</html>