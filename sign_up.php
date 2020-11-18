<!DOCTYPE html>
<html lang="zxx" class="no-js">

<?php
if (isset($_REQUEST['error'])) {
	echo "<script>window.alert('Email already Exists !!')</script>";
}
?>

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Sign Up</title>

	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/signup_validation.js" type="text/javascript"></script>

</head>

<body>

    <?php include 'header.php'; ?>
	<!-- End Header Area -->

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div style="padding-top: 0px" class="login_form_inner">
						<h3>Create New Account</h3>
						<form class="row login_form" action="sign_up_post.php" method="post" id="contactForm" enctype="multipart/form-data">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="fname" name="firstname" placeholder="First Name" 
								onblur="checkFname()" required>
                            </div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="lname" name="lastname" placeholder="Last Name"
								onblur="checkLname()" required>
                            </div>
                            <div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email" onblur="EmailValidate()" required>
                            </div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="phone" name="phone" placeholder="Contact No." onblur="phoneValidation()" required>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control password" id="password" name="crtpassword" placeholder="Create Password" required>
                            </div>
                            <div class="col-md-12 form-group">
								<input type="password" class="form-control password" id="cpassword" name="confpassword" placeholder="Confirm Password" 
								onblur="passValidate()" required>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" required>
                            </div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="city" name="city" placeholder="Enter your City" onblur="cityValidate()" required>
                            </div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter Pincode" onblur="pincodeValidate()" required>
                            </div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="security1" name="que1" placeholder="Security Que. 1: What's your pet name?" required>
                            </div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="security2" name="que2" placeholder="Security Que. 2: What's your college name?" required>
							</div>
							<div class="col-md-12 form-group">
								<p>Upload ur Profile Pic: </p>
								<input type=file class="form-control" id="profileimg" name="file" 
								required>
							</div>
							<div class="col-md-12 form-group">
								<!-- <div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div> -->
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" name="submit" class="primary-btn">Sign up</button>
								<!-- <a href="#">Forgot Password?</a> -->
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->

	<!-- start footer Area -->
	<?php include "footer.php" ?>
	<!-- End footer Area -->


	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>