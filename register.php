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
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	// $password =$_POST['password'];   //Password encription method
	$password = password_hash($_POST['password'],PASSWORD_DEFAULT);   //Password encription method
		
	
	$sql = "INSERT INTO user(user_name, firstname , lastname , email , password )
			VALUES('$username', '$firstname', '$lastname','$email','$password')";

			// echo $password;
			
	if(mysqli_query($conn,$sql)===TRUE) {
		$_SESSION['username'] = $username;
		echo "User Registered Successfully!";
	} else {
		echo mysqli_error($conn);
	}
	
}


?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1,0"> 
		<title>Hotel Transylvania</title>
		
		
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
		<style>
			#text {display:none;color:red}	
		</style>
	</head>
	
	<body style="background-image:url('images/banner1.jpg')">
		<header> <!--Header of the web page -->
			<div>
				<h1>Hotel Transylvania</h1>
				
				<nav><!--Navigation bar-->
					<ul class="nav">
								<li><a href="index.php" target="_self" title="Home">Home</a></li>
								<li><a  href="contact.php" target="_self" title="Contacts">Contact Us</a></li>
								<li><a href="blog.php"target="_self" title="Blog">Blog</a></li>
								<li><?php if(isset($_SESSION['username'])) { ?>
										<a href="logout.php"><span class="fa fa-lock">Log out</a>
									<?php } else { ?>
										<a href="login.php"><span class="fa fa-lock">Log In</a>
									<?php } ?>
								</li>
					</ul>
				</nav>
			</div>

		</header>
		<div class="row backgroundimg" style="background-image:url('images/white.jpg')" >
			<div class="col-md-6">

			<form method="post" name="register_form" action="" onsubmit="validateForm();">
			<div class="box">
				<h2>Register</h2>

				<p>Please fill in this form to create an account.</p>
				
				<label for="email"><b>Username</b></label></br>
				<input type="text" placeholder="Enter Username" name="username" id="username" required></br>
				
				<label for="email"><b>First Name</b></label></br>
				<input type="text" placeholder="Enter First Name" name="firstname" id="firstname" required></br>
				
				<label for="email"><b>Last Name</b></label></br>
				<input type="text" placeholder="Enter Last Name" name="lastname" id="lastname" required></br>

				<label for="email"><b>Email</b></label></br>
				<input type="text" placeholder="Enter Email" name="email" id="email" required></br>

				<label for="psw"><b>Password</b></label></br>
				<input type="password" placeholder="Enter Password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required></br>
				<p id="text">Caps lock is ON!</p> <!--Shows a warning to aware users that the caps lock key is on -->
				<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

				<button type="submit" name="submit" class="registerbtn">Register</button>
			</form>
			
			</div>
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