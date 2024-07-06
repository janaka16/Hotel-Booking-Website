

<?php
	session_start();

if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo '<div class="alert alert-success">Room booked successfully!</div>';
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Hotel Transylvania</title>
		
	<!-- CSS only -->
<?php require('inc/links.php'); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/new.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://kit.fontawesome.com/629d8810b5.css" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/629d8810b5.js" crossorigin="anonymous"> </script>
<style type="text/css">

	
	.availability-form{
		margin-top: -50px;
		z-index: 2;
		position: relative;
	}

	@media screen and (max-width: 700px) {
	.availability-form{
		margin-top: 45px;
		padding:  50px;
	}

	}
	
</style>
</head>
<body>
<div class="backgroundimg" style="background-image:url('images/bookbackground.jpg')" > 


<header> <!--Header of the web page -->
			<div >
				<h1>Hotel Transylvania </h1>
				
				<nav><!--Navigation bar-->
					<ul class="nav">
								<li><a class="active" href="index.php" target="_self" title="Home">Home</a></li>
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
			<div>
				
			</div>
		</header>

<!-- Swiper Carousal-->
 <div class="container-fluid px-lg-4 mt-4">
 	 
          <img src="images/bookingbanner.png" class="bookhead center" />
        </div>
        


        
    <!--   </div> -->
      
    </div>
 

 <!-- check avilability form-->
 <div class="container availability-form">
 		<form method="post" name="booking_form" action="booking.php" >
 	<div class="row">
 		<div class="col-lg-12 bg-white shadow p-4 rounded">
 			<h5 class="col-lg-3">Check Booking Availability</h5>

 		
 			 <div class="row align-items-end"> 
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Check-in</label>
 						<input type="date" name="checkIn" id="checkIn" class="form-control shadow-none" a href="addbooking.php">
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Check-out</label>
 						<input type="date" name="checkOut" id="checkOut" class="form-control shadow-none" a href="addbooking.php" >
 					</div>
 					<div class="col-lg-2 mb-3">
 						<label class="form-label" style="font-weight: 500;" >Adult</label>
 						<select class="form-select shadow-none" name ="adult" id="adult" a href="addbooking.php">
  					
  						<option value="1">One</option>
  						<option value="2">Two</option>
  						<option  value="3">Three</option>
						</select>
 					</div>
 					<div class="col-lg-2 mb-3">
 						<label class="form-label" style="font-weight: 500;">Children</label>
 						<select class="form-select shadow-none" name ="children" id="children" a href="addbooking.php">
  						
						 <option  value="0">Zero</option  >
  						<option  value="1">One</option>
  						<option  value="2">Two</option>
  						<option  value="3">Three</option>
						</select>
 					</div>
					 <div class="col-lg-2 mb-3">
 						<label class="form-label" style="font-weight: 500;">Room Type</label>
 						<select class="form-select shadow-none" name ="roomType" id="roomType" a href="addbooking.php">
  						
  						<option  value="1">Premier beach view</option>
  						<option  value="2">Premier Balcony</option>
  						<option  value="3">Deluxe beach view</option>
						</select>
 					</div> 
 					<div class="col-lg-1 mb-lg-3 mt-2">
 						<button class="btn text-white shadow-none custom-bg" type="submit" name="submit" onclick="location.href='booking.php';">Submit</button> 
 								</form>
 								


 					</div>
 					

 				</div>
 		
 		</div>
 	</div>
 </div>
 
 <!-- Our Rooms -->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
 <div class="container">
 	<div class="row">

 		<div class="col-lg-4 col-md-6 my-3">
 			<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
			  <img src="images/b1.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Premier beach view</h5>
			    <h6 class="mb-4">75000LKR per night </h6>
			    <div class="features mb-4">
			    	<h6 class="mb-1">Features</h6>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Bathroom
    				</span>

			    </div>
			    <div class="Facilities mb-4">
			    	<h6 class="mb-1">Facilities</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Wifi
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		TV
    				</span>
    			</div>

    			<div class="guests mb-4">
			    	
    			</div>	
    				<div class="rating mb-4">

    					<h6 class="mb-1">Rating</h6>
    					<span class="badge rounded-pill bg-light">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
    					<a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
    					<a href="blog.php" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
    				</div>
			  </div>
			</div>
 		</div>

 		<div class="col-lg-4 col-md-6 my-3">
 			<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
			  <img src="images/b2.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Premier Balcony</h5>
			    <h6 class="mb-4">15000LKR per night </h6>
			    <div class="features mb-4">
			    	<h6 class="mb-1">Features</h6>

    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Bathroom
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Balcony
    				</span>

			    </div>
			    <div class="Facilities mb-4">
			    	<h6 class="mb-1">Facilities</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Wifi
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		TV
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		AC
    				</span>

    				<div class="guests mb-4">
			    	
    				
    				</div>	
    				<div class="rating mb-4">

    					<h6 class="mb-1">Rating</h6>
    					<span class="badge rounded-pill bg-light">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
    					<a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
    					<a href="blog.php" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
    				</div>
			    </div>
			  </div>
			</div>
 		</div>

 		<div class="col-lg-4 col-md-6 my-3">
 			<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
			  <img src="images/b3.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Deluxe beach view</h5>
			    <h6 class="mb-4">25000LKR per night </h6>
			    <div class="features mb-4">
			    	<h6 class="mb-1">Features</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		2 Rooms
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Bathroom
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		2 Sofa
    				</span>
			    </div>
			    <div class="Facilities mb-4">
			    	<h6 class="mb-1">Facilities</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Wifi
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		TV
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		AC
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Mini Bar
    				</span>

    				<div class="guests mb-4">
			    	
    				</div>
    					
    				<div class="rating mb-4">

    					<h6 class="mb-1">Rating</h6>
    					<span class="badge rounded-pill bg-light">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
    					<a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
    					<a href="blog.php" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
    				</div>
			    </div>
			  </div>
			</div>
 		</div>


 		
 	</div>	
 </div>

 <!-- Our Facilities-->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

 <div class="container">
 	<div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/umbrella-beach-solid.svg" width="80px">
 		
 			<h5 class="mt-3">Beach</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/wifi-solid.svg" width="80px">
 			<h5 class="mt-3">Wifi</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/hot-tub-person-solid.svg" width="80px">
 			<h5 class="mt-3">Hot tub</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/spa-solid.svg" width="80px">
 			<h5 class="mt-3">Spa</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/dumbbell-solid.svg" width="80px">
 			<h5 class="mt-3">Gym</h5>
 		</div>
 		
 	</div>
 </div>

 <!-- REach us-->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Location and contacts</h2>

 <div class="container">
 	<div class="row">
 		<div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
			
 		<iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9225.950235814233!2d-120.6904712129877!3d35.159962821385015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80ecf7e73b987a2f%3A0x2937650c15904c6b!2sThe%20Cliffs%20Hotel%20and%20Spa!5e0!3m2!1sen!2slk!4v1675966455723!5m2!1sen!2slk" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	
 		</div>
 		<div class="col-lg-4 col-md-4 ">
 			<div class="bg-white p-4 rounded">
 				<h5>Call us</h5>
 				<a href="tel: 0094112222222" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> 0094112222222</a>
 				<br>
 				<a href="tel: 0094112222223" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> 0094112222223</a>
 			</div>	
 			<div class="bg-white p-4 rounded">
 				<h5>Follow us</h5>
 				<a href="https://twitter.com" class="d-inline-block mb-3">
 					<span class="badge bg-light text-dark fs-6 p-2">
 						<i class="bi bi-twitter me-1"></i>Twitter
 					</span>
 				</a>
 				<br>
 				<a href="https://web.facebook.com" class="d-inline-block mb-3">
 					<span class="badge bg-light text-dark fs-6 p-2">
 						<i class="bi bi-facebook me-1"></i>Facebook
 					</span>
 				</a>
 				<br>
 				<a href="https://www.instagram.com" class="d-inline-block">
 					<span class="badge bg-light text-dark fs-6 p-2">
 						<i class="bi bi-instagram me-1"></i>Instagram
 					</span>
 				</a>
 			</div>
 		</div>
 	</div>
 </div>
<hr>



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