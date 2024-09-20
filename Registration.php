<?php

// require_once 'dbase/config.php';
// require_once 'dbase/database.php';

$error = false;

?>

<!DOCTYPE html>
<html>

<head>
	
    <meta charset="utf-8">
    <title>Allumini-Registration</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="College of Nursing Sciences" name="keywords">
    <meta content="College of Nursing Sciences" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon"  href="img/logo2.ico" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	
</head>

<body>
<!-- Navbar Start -->
<div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3">
                <a href="index" class="text-decoration-none  navbar-brand m-0">
                    <img src="img/logofront.jpeg" alt="College of Nursing" style="width:100px;" class="rounded-pill"><h1 class="">CONSMBANO</h1> 
                    <!-- <h1 class="m-0"><span class="text-primary">E</span>COURSES</h1> -->
                </a>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <a href="index" class="nav-item nav-link">Home</a>
                            <a href="about" class="nav-item nav-link">About Us</a>
                            <a href="course" class="nav-item nav-link">Programmes</a>
                            <a href="teacher" class="nav-item nav-link">Gallery</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Events</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="currentEvent" class="dropdown-item">current Events</a>
                                    <a href="ListEvent" class="dropdown-item">futures Events</a>
                                </div>
                            </div>
                            <a href="contact" class="nav-item nav-link">Contact Us</a>
                            
                            <!-- <a class="nav-item nav-link" href="Registration">Register</a> -->
                        </div>
                        <!-- <a class="btn btn-primary py-2 px-4 ml-auto  d-lg-block" href="Registration">Register</a> -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
	<div class="clearfix"> </div>

	<div class="container top">
		<div class="row row-register">
			<div class=" col-xs-12 col-sm-6 col-lg-6 offset-lg-3">
				<div class="altec_name text-mute">
					<h2 class="text-center"><img src="" alt="">CONSMBANO</h2>
				</div>
				<h2 class="head">Allumini Registration Portal</h2>
				<p class="snapshot">By creating your own account you become the member of the allumini and prticipate for the scholrshipe award that will be given to each participant </p>

				<span class="text-success">
					<?php if (isset($successmsg1)) {
						echo $successmsg1;
					} ?>
				</span>
				<span class="text-danger">
					<?php if (isset($errormsg1)) {
						echo $errormsg1;
					} ?>
				</span>
				<div class=""></div>

				<form class="form-group" id="ownSignUp" role="login" method="POST"
					action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="Register">

					<div class="form-group">
						<input type="text" name="own_Fname" id="own_Fname" class="form-control input-lg"
							value="<?php if ($error)
								echo $own_Fname ?>" placeholder="First Name" required="required"
								tabindex="1">

							<span class="text-danger">
							<?php if (isset($own_Fname_error))
								echo $Fname_error; ?>
						</span>
					</div>
					<div class="form-group">
						<input type="text" name="own_Lname" id="own_Lname" class="form-control input-lg"
							value="<?php if ($error)
								echo $own_Lname ?>" placeholder="Last Name" required="required"
								tabindex="2">

							<span class="text-danger">
							<?php if (isset($own_Lname_error))
								echo $Lname_error; ?>
						</span>
					</div>

					<div class="form-group">
						<input type="tell" name="own_phone" id="own_phone" class="form-control input-lg"
							value="<?php if ($error)
								echo $own_phone ?>" placeholder="phone number" required="required"
								tabindex="3">

							<span class="text-danger">
							<?php if (isset($own_phone_error))
								echo $own_phone_error; ?>
						</span>
					</div>

					<div class="form-group">
						<input type="text" name="own_schooname" id="own_schooname" class="form-control input-lg"
							value="<?php if ($error)
								echo $own_schooname ?>" placeholder="Your school Name"
								required="required" tabindex="4">

							<span class="text-danger">
							<?php if (isset($own_schooname_error))
								echo $own_schooname_error; ?>
						</span>
					</div>
					<div class="form-group">
						<input type="email" name="own_email" id="own_email" class="form-control input-lg"
							value="<?php if ($error)
								echo $own_email ?>" placeholder="Your E-mail address"
								required="required" tabindex="5">

							<span class="text-danger">
							<?php if (isset($own_email_error))
								echo $own_email_error; ?>
						</span>
					</div>

					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg"
							value="<?php if ($error)
								echo $password ?>" placeholder="password" required="required"
								tabindex="6">

							<span class="text-danger">
							<?php if (isset($password_error))
								echo $password_error; ?>
						</span>
					</div>

					<div class="form-group">
						<input type="password" name="cpassword" id="cpassword" class="form-control input-lg"
							value="<?php if ($error)
								echo $cpassword ?>" placeholder="Confirm password"
								required="required" tabindex="7">

							<span class="text-danger">
							<?php if (isset($cpassword_error))
								echo $cpassword_error; ?>
						</span>
					</div>

					<div class="form-check mb-2 mr-sm-2 mb-sm-0">
						<label class="form-check-label"><input type="checkbox" class="hidden" name="Agree"
								required="required"> I Agree</label>
						<div type="checkbox" name="Agree" id="Agree"
							value="By submitting this form, I certify that I have read the terms and conditions and agree to the terms and conditions contained in this  Form executed by me.">
							By clicking <strong class="label label-primary">Register</strong>, you agree to the <a
								href="terms-and-condtion" data-target="#t_and_c_m">Terms and Conditions</a> set out by
							this site, including our Cookie Use.
						</div>
					</div>

					

					<div class="form-group">
						<button type="submit" name="Register" id="Register"
							class="btn btn-primary btn-block btn-md">Register</button>
					</div>

				</form>

			</div>

		</div>

	</div>
	<div class="clear"></div>

	<br>
	<br>
	<br>


	<div class="copy-right fixed-bottom">
		<div class="container-fluid">
			<div class="d-flex justify-content-center bg-dark text-white copy-rights-main wow zoomIn" data-wow-delay="0.3s">
            <p class="m-0 text-white ">&copy; <script>document.write(new Date().getFullYear());</script> <a class="text-white" href="#">CONSMBANO</a> All Rights Reserved. <a href="https://sawiitechservices.com" class="sawi" style="opacity: 0.3;">Sawiitech Services</a>
                </p>
			</div>
	   	</div>
	</div>


	<script src="js/main.js"></script>
	<script src="js/mainajax.js"></script>


	<!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>