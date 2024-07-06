<?php

	session_start();
	


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
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];		
	
	$sql = "INSERT INTO messages(name, email , message )
			VALUES('$name', '$email', '$message')";
			
	if(mysqli_query($conn,$sql)===TRUE) {
		
		echo "Message sent Successfully!";
	} else {
		echo mysqli_error($conn);
	}
	
}


?>

<!DOCTYPE html>

<html>
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1"> 
		<title>Hotel Transylvania</title>
		
		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link href="css/new.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
		
		<link href="css/style.css" rel="stylesheet">
	</head>
	
	<body style="background-image:url('images/banner1.jpg')">
		<header> <!--Header of the web page -->
			<div >
				<h1>Hotel Transylvania</h1>
				
				<nav><!--Navigation bar-->
					<ul class="nav">
								<li><a href="index.php" target="_self" title="Home">Home</a></li>
								<li><a class="active" href="contact.php" target="_self" title="Contacts">Contact Us</a></li>
								<li><a href="blog.php"target="_self" title="Blog">Blog</a></li>
								<li><?php if(isset($_SESSION['username'])) { ?>
										<a href="logout.php">Log out</a>
									<?php } else { ?>
										<a href="login.php">Log In</a>
									<?php } ?>
								</li>
					</ul>
				</nav>		
			</div>
			<div>
				
			</div>
		</header>
		<div style="background-image:url('images/white.jpg')" class="backgroundimg">
	
		<h2 class="center">Feel free to contact us</h2>
			<div class="row center">
				<div class="col-md-6">
					<h3>Our Address</h3>
						<p>5534 Somewhere In. <br>
							 The World,<br>
							22193-10212<br>
						</p>
					<h3>Call Us</h3>
						<p>0094 11 2222222</p>
					<h3>E-mail Us</h3>
						<p>area51@gmail.com</p>

				</div>

				<div class="col-md-6" >
				<form  method="post" name="contact" action="" onsubmit="validateForm();">
					<table border="0" align="left" width="400" height="300">
						<h3>Leave us a message</h3>	
						<tr><th>Name</th>
							<td><input type="text" value="" name="name" id="name" required="required"></td>
						<tr><th>E-mail</th>
							<td><input type="text" value="" name="email2" id="email2" required="required"></td>
						</tr>
						<tr>
							<th>Please enter your Message here</th>
							<td><textarea input type="text" rows="3" cols="20" name="message" id="message" required="required"></textarea></td>
						</tr>
						<tr class="paracenter"><td><button type="submit" class="btn-sub" >Submit</button></td></tr>
						
				
					</table>
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
	</body>
</html>