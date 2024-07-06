<?php

// php code to Insert data into mysql database from form
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="hotel";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
	die("Connection Error");
}

session_start();

if(!isset($_SESSION['username'])) {
	header("location: adminlogin.php");
} else {
	
	if(isset($_POST['update'])) {
		
		$blog_id= $_POST['blog_id'];
		$title=$_POST['title'];
		$content = $_POST['content'];
		$image = $_POST['image'];
		
		$query = "UPDATE post SET title='$title', content='$content' , image='$image' WHERE  blog_id='$blog_id'";
		
		if ($conn->query($query)===TRUE)  { 
		  echo "Post Updated!";
		} else  {
			 echo "Error!";
		}
	
}

	
		
	}





?>
<!DOCTYPE html>

<html>
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1,0"> 
		<title>Hotel Transylvania</title>
		
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
		<link href="css/style.css" rel="stylesheet">

	</head>
	
	<body style="background-image:url('images/banner1.jpg')">
		<header> <!--Header of the web page -->
			<div class="container2" >
				<h1>Hotel Transylvania</h1>
				
				<nav><!--Navigation bar-->
					<ul class="nav">
								<li><a href="index.php" target="_self" title="Home">Home</a></li>
								<li><a href="contact.php" target="_self" title="Contacts">Contact Us</a></li>
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

		</header>

    <div class="box">

		<h2> Edit post</h2>
		<form method="post"  name="editpost" action="" onsubmit="validateForm();"> 
			<div>
				<label for = "title">Title: </label>
				<input type = "text" id ="title" name="title">
			</div>
			<div>
				<label for = "addimage">Add image: </label>
				<input type="file" name="image" value="image" id="image"> 
			</div>
			<div>
				<label for = "content">Content: </label>
				<textarea type="text" name= "content" id="content"  rows="6" cols="50"> </textarea>
			</div>
			<button class="btn-sub" type ="submit" name="update">Edit Post</button>
		</form>

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