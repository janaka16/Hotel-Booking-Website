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
$sql = "SELECT * FROM blog";  //retreving values from blog tabel and comme table


$query = "SELECT * FROM comments"; 

$blogposts = mysqli_query($conn,$sql);

$comm = mysqli_query($conn,$query);

$users = "SELECT * FROM user";

$users2 = mysqli_query($conn,$users);

if(isset($_POST['submit'])) {
	

	$comment = $_POST['comment'];
	$date_time = date("Y-m-d h:i:sa");
	
	
	$sql = "INSERT INTO comments(date_time, comment)
			VALUES('$date_time','$comment')";
				
	if(mysqli_query($conn,$sql)===TRUE) {
		
		echo "Comment added Successfully!";
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
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link href="css/new.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
		
	
		<link href="css/style.css" rel="stylesheet">
	<link href="css/new.css" rel="stylesheet">
		
	</head>
	
	<body style="background-image:url('images/banner1.jpg')">
		<header> <!--Header of the web page -->
			<div>
				<h1>Hotel Transylvania</h1>
				
				<nav><!--Navigation bar-->
					<ul class="nav">
								<li><a href="index.php" target="_self" title="Home">Home</a></li>
								<li><a href="contact.php" target="_self" title="Contacts">Contact Us</a></li>
								<li><a class="active" href="blog.php"target="_self" title="Blog">Blog</a></li>
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
		<div>
			<h2>Announcements</h2>
			<div class="row">
				<button class="addpost_btn" onclick="location.href ='addpost.php';">Click here to Add a New Post</button> <!--To add a new post -->
			</div>
			
			<div>
				<div class="row">
					<?php while($blog = mysqli_fetch_assoc($blogposts)) { ?> <!--Using while loop to fetch data from the database -->
						<div class ="col-md-2"></div>
						<div class="col-md-8">
						<div class="blogposts paracenter">
							<p><b><?php echo  $blog['title'];?></b></p>
							<img src="<?php echo $blog['image'];?>" class="center"></a> 
							<p><?php echo $blog['content'];?></p>
						</div>
					<div class="row">
						<button a href="editpost.php?blog_id=<?php  $row['blog_id'];?>" class="btn btn-primary" onclick="location.href ='editpost.php';">Click here to Edit the Post</a></button>
						<button a href="deletepost.php?blog_id=<?php  $row['blog_id'];?>" class="btn btn-danger" onclick="location.href ='deletepost.php';">Click here to Delete the Post</a></button>
					</div>
						<div class="comments">
							<?php while($comments = mysqli_fetch_assoc($comm)) { ?> 
							
								<p><b>Comments :</b> <i><?php echo $comments['user_name'];?> says - </i>"<?php echo $comments['comment'];?>"</p>

							<?php } ?>
							
						</div>	
						
						<form action="" method="post" onsubmit="validateForm();">
								<div>
								<textarea  name="comment" id="comment" style="font-size:12px;" rows="6" cols="50">
								Hey... login and say something!
								</textarea>
								</div>
						
							<button type="submit" class="btn-sub" name="submit">Add Comment</button>
						</form>						
					
						</div>
						<div class ="col-md-2"></div>
						<?php } ?>		
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