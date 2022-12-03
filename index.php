<?php
session_start();
require 'connect_db.php';
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Montserrat:400,700|Crete+Round:400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />

	<!-- Medical Demo Specific Stylesheet -->
	<link rel="stylesheet" href="pms/medical.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="pms/css/medical-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="pms/fonts.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="css/colors.php?color=DE6262" type="text/css" />
	<link href="round.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>




	<!-- Document Title
	============================================= -->
	<title>PMS</title>

</head>

<body data-spy="scroll" class="stretched page-transition" data-loader-html="<div id='css3-spinner-svg-pulse-wrapper'><svg id='css3-spinner-svg-pulse' version='1.2' height='210' width='550' xmlns='https://www.w3.org/2000/svg' viewport='0 0 60 60' xmlns:xlink='https://www.w3.org/1999/xlink'><path id='css3-spinner-pulse' stroke='#DE6262' fill='none' stroke-width='2' stroke-linejoin='round' d='M0,90L250,90Q257,60 262,87T267,95 270,88 273,92t6,35 7,-60T290,127 297,107s2,-11 10,-10 1,1 8,-10T319,95c6,4 8,-6 10,-17s2,10 9,11h210' /></svg></div>">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		

		<!-- Header
		============================================= -->
		<header id="header" data-menu-padding="28" data-sticky-menu-padding="8">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="index.php" class="standard-logo"><img src="pms/images/logo-medical.png" alt="Canvas Logo"></a>
							<a href="index.html" class="retina-logo"><img src="pms/images/logo-medical@2x.png" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu style-3 menu-spacing-margin">

							<ul class="menu-container">
								<li class="menu-item current"><a class="menu-link"  href="#"><div>Home</div></a></li>
								<li class="menu-item"><a  class="menu-link" href="#content"><div>About Us</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#appo"><div>Appointment</div></a></li>
								<li class="menu-item"><a  class="menu-link" href="#doctors"><div>Doctors</div></a></li>
								<li class="menu-item"><a  class="menu-link" href="#feedback"><div>Feedback</div></a></li>
								<li class="menu-item"><a class="menu-link" data-toggle="modal" href="#myModal"><div>Login</div></a></li>
								<li class="menu-item"><a  class="menu-link" href="signup.php"><div>Sign-Up</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element swiper_wrapper min-vh-50 min-vh-md-100" data-loop="true" data-autoplay="5000">
			<div class="slider-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="container">
								<div class="slider-caption slider-caption-right" style="max-width: 700px;">
									<div>
										<h2 data-animate="flipInX">Team of Experts<span>.</span></h2>
										<p class="d-none d-sm-block" data-animate="flipInX" data-delay="500">Our Team of Doctors are specialized in Various Disciplines to make sure you get the Best Treatment.</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('pms/images/slider/1.jpg');"></div>
						</div>
						<div class="swiper-slide">
							<div class="container">
								<div class="slider-caption">
									<div>
										<h2 data-animate="zoomIn">Heart<span>Beat</span>.</h2>
										<p class="d-none d-sm-block" data-animate="zoomIn" data-delay="500">Care for your Loved Ones from the Experts in the Medical &amp; Hospitality Industry.</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('pms/images/slider/2.jpg');"></div>
						</div>
					</div>

				</div>

			</div>
		</section><!-- #slider end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row col-mb-50 mb-0">
						<div class="col-sm-6 col-md-4">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn">
									<a href="#"><i class="icon-medical-i-cardiology"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Improve follow up with reminders</h3>
									<p>Send personalized reminders patients, making it easier for them to complete their follow-up care.</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-4">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn" data-delay="200">
									<a href="#"><i class="icon-medical-i-social-services"></i></a>
								</div>
								<div class="fbox-content">
									<h3>efficiency</h3>
									<p>Increased efficiency and better productivity through a well-planned patient management</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-4">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn" data-delay="400">
									<a href="#"><i class="icon-medical-i-neurology"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Medical Records</h3>
									<p>The ability to track, store and access patients’ electronic medical records is vital</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-4">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn">
									<a href="#"><i class="icon-medical-i-dental"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Appointment Scheduling</h3>
									<p>Patients can book their appointments online with 24/7 access to a patient portal with a patient scheduling module.</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-4">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn" data-delay="200">
									<a href="#"><i class="icon-medical-i-imaging-root-category"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Patient's needs</h3>
									<p>An integrated solution that encompasses all your patients’ management needs</p>
								</div>
							</div>
						</div>

						
					</div>

				</div>
			</div>
		</section>

		<section id="appo">

                <div class="section row p-0 align-items-stretch dark topmargin-sm">
                    <div class="col-lg-5" style="background: url('pms/images/section-bg.jpg') center center no-repeat; background-size: cover; min-height: 250px;">
                        <div>&nbsp;</div>
                    </div>
                    <div id="booking-appointment-form" class="col-lg-7 p-0">
                        <div class="bg-color form-widget col-padding" >
                            <h2>Book an Appointment.</h2>
                            <div class="form-result"></div>
                            <form class="row mb-0"  id="form1" name="form1" method="post" onsubmit="showAlert()">
                               
                                <div class="col-md-4 form-group">
                                    <label>Doctor Specialization:</label>
                                    <p> <select name="Doctorspecialization" class="form-control not-dark required" onChange="getdoctor(this.value);">
                            <option value="">Select Specialization</option>

                            <option>CARDIAC SURGEON</option>
                        <option  value='CARDIOTHORACIC SURGEON'>CARDIOTHORACIC SURGEON</option>
                        <option value="Dental Surgeon">Dental Surgeon</option>
                        <option value="Ent-Surgeon">Ent-Surgeon</option>
                        <option value="NEUROLOGIST">NEUROLOGIST</option>
                        <option value="PHYSICIAN">PHYSICIAN</option>
                        <option value="PLASTIC SURGEON">PLASTIC SURGEON</option>
                        <option value="CONSULTANT SURGEON">CONSULTANT SURGEON</option>
                        <option value="NEPHOLODIST">NEPHOLODIST</option>
                        <option value="CANCER SURGEON">CANCER SURGEON</option>
                        <option value="PSYCHIATRIST">PSYCHIATRIST</option>
                    </select></p>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Doctors</label>
                                    <p><select name="doctor" class="form-control not-dark required" id="doctor" onChange="getfee(this.value);gettime(this.value);" >
                        <option>Select Doctor</option>
                    </select></p>
                                </div>

                                <div class="col-md-4 form-group">
                                    <label >Date:</label>
                                    <input class="form-control datepicker not-dark required" name="date"  type="date" >
                    </div>


                                <div class="w-100"></div>
                                <div class="col-md-4 form-group">
                                    <label >Timeslot:</label>
                                    <p><select name="timeslot" class="form-control not-dark required" id="timeslot" >
                                <option value="">Select Time</option>
                            </select></p>
                                </div>
                                 <div class="col-md-4 form-group"> </div>

                                <div class="col-md-4 form-group">
                                            <label >Booked with us Before?</label><br>
                                            <label class="rightmargin-sm">
                                                <input type="radio" id="vt" name="vt" value="Follow-Up">
                                                Yes
                                            </label>
                                            <label>
                                                <input type="radio" name="vt" value="First Visit" checked>
                                                No
                                            </label>
                                        </div>
                                <div class="w-100"></div>
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <label >Symptoms:</label>
                                            <textarea id="symptoms" name="symptoms" class="form-control not-dark required" cols="30" rows="5"></textarea>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-7 form-group">
                                    <label>Purpose:</label>
                                    <textarea id="purpose" name="purpose" class="form-control not-dark required" cols="30" rows="5"></textarea>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-12 form-group d-none">
                                    <input type="text" name="template-medical-botcheck" value="" />
                                </div>
                                <div class="col-12 form-group text-end">
                                    <button class="button button-rounded m-0" type="submit" name="submit">Complete Booking</button>
                                    </div>
                                </div>
                                <input type="hidden" name="prefix" value="template-medical-">
                            </form>

                        </div>
                    </div>
                </div>
            </section>

				<section id="info">


				<div class="section mt-0">
					<div class="container clearfix">

						<div class="row">
							<div class="col-lg-3 col-md-6">
								<div class="feature-box fbox-outline fbox-dark fbox-effect clearfix">
									<div class="fbox-icon">
										<a href="#"><i class="icon-stack i-alt"></i></a>
									</div>
									<div class="fbox-content">
										<div class="counter counter-small"><span data-from="100" data-to="887" data-refresh-interval="200" data-speed="2500"></span>+</div>
										<h5 class="m-0 color">Clients Served</h5>
										<div class="d-block d-md-block d-lg-none bottommargin"></div>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="feature-box fbox-outline fbox-dark fbox-effect clearfix">
									<div class="fbox-icon">
										<a href="#"><i class="icon-tint i-alt"></i></a>
									</div>
									<div class="fbox-content">
										<div class="counter counter-small"><span data-from="100" data-to="900" data-refresh-interval="250" data-speed="2000"></span>+</div>
										<h5 class="m-0 color">Lab Results</h5>
										<div class="d-block d-md-block d-lg-none bottommargin"></div>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="feature-box fbox-outline fbox-dark fbox-effect clearfix">
									<div class="fbox-icon">
										<a href="#"><i class="icon-tint i-alt"></i></a>
									</div>
									<div class="fbox-content">
										<div class="counter counter-small"><span data-from="1" data-to="50" data-refresh-interval="50" data-speed="3000"></span>+</div>
										<h5 class="m-0 color">Staff</h5>
										<div class="d-block d-md-none bottommargin"></div>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="feature-box fbox-outline fbox-dark fbox-effect clearfix">
									<div class="fbox-icon">
										<a href="#"><i class="icon-text-width i-alt"></i></a>
									</div>
									<div class="fbox-content">
										<div class="counter counter-small"><span data-from="100" data-to="200" data-refresh-interval="110" data-speed="3500"></span>+</div>
										<h5 class="m-0 color">Lives Saved</h5>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

			<section id="feedback">


				<div class="section mt-0">
					<div class="container clearfix">

						<div class="row">
    	<div class="card">
    		<div class="card-body">
    			<div class="row">
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						<i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review">0</span> Review</h3>
    				</div>
    				<div class="col-sm-4">
    					<p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
    				</div>
    				<div class="col-sm-4 text-center">
    					<h3 class="mt-4 mb-3">Write Review Here</h3>
    					<button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="mt-5" id="review_content"></div>
						</div>

					</div>
				</div>
			</section>

					<section id="doctors">


				<div class="container clearfix">
					<div class="heading-block center border-bottom-0">
						<h3>Meet our Team of Specialists<span>.</span></h3>
						<span>We make sure that your Life are in Good Hands.</span>
					</div>

					<div id="oc-team" class="owl-carousel team-carousel carousel-widget" data-margin="30" data-nav="true" data-pagi="true" data-items-xs="1" data-items-sm="2" data-items-lg="3" data-items-xl="4">

						<div class="team">
							<div class="team-image">
								<img src="pms/images/doctors/1.jpg" alt="Dr. Tomas">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>Dr. Tomas</h4><span>Cardiologist</span></div>
							</div>
						</div>

						<div class="team">
							<div class="team-image">
								<img src="pms/images/doctors/2.png" alt="Dr. John Doe">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>DR HEMA DEVA KRISHNAN</h4><span>Medical Doctor</span></div>
							</div>
						</div>

						<div class="team">
							<div class="team-image">
								<img src="pms/images/doctors/3.png" alt="Dr. John Doe">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>DR NAGAJOHTI KARLIPERUMAL</h4><span>Neurologist</span></div>
							</div>
						</div>

						<div class="team">
							<div class="team-image">
								<img src="pms/images/doctors/4.png" alt="Dr. John Doe">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>DR SANKARANARAYANAN RAMACHANTHIRAN</h4><span>Dentist</span></div>
							</div>
						</div>

						<div class="team">
							<div class="team-image">
								<img src="pms/images/doctors/6.png" alt="Dr. John Doe">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>DR SATYA KUMAR MUNIANDY</h4><span>Cardiologist</span></div>
							</div>
						</div>

						<div class="team">
							<div class="team-image">
								<img src="pms/images/doctors/7.jpg" alt="Dr. John Doe">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>Dr. Erika Todd</h4><span>Neurologist</span></div>
							</div>
						</div>

						<div class="team">
							<div class="team-image">
								<img src="pms/images/doctors/8.jpg" alt="Dr. John Doe">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>Dr. Randy Adams</h4><span>Dentist</span></div>
							</div>
						</div>

						<div class="team">
							<div class="team-image">
								<img src="pms/images/doctors/9.jpg" alt="Dr. John Doe">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>Dr. Alan Freeman</h4><span>Eye Specialist</span></div>
							</div>
						</div>

					</div>

				</div>
			</div>
</section>

		<footer>
			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="bg-transparent">
				<div class="container clearfix">

					<div class="row col-mb-30">
						<div class="col-md-6 text-center text-md-start">
							<br>
							<div class="copyright-links"><a href="#"></a>  <a href="#"></a></div>
						</div>

						<div class="col-md-6 text-center text-md-end">
							<div class="copyrights-menu copyright-links clearfix">
								<a href="index.php">Home</a>/<a href="#content">About Us</a>/<a href="#doctors">Doctor</a>/<a href="#appo">appoinment</a>
							</div>
						</div>
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div>
	<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="pms/images/avatar.png" alt="Avatar">
				</div>				
				<h4 class="modal-title">Member Login</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="components/user-p.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
					</div> 
					
					<div class="form-group">
						<p><label>Select User Type </label>
                <select class="form-select" name="postition" required="required">
                    <option>Admin</option>
                    <option>Patient</option>
                    <option>Doctor</option>
                    <option>Staff</option>
                </select></p>
					</div>        
					
					
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn" name="login">Login</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<a href="forget_password.php">Forgot Password?</a>
			</div>
		</div>
	</div>
</div><!-- #wrapper end -->

<div id="forget" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="pms/images/avatar.png" alt="Avatar">
				</div>				
				<h4 class="modal-title">Patient Password Recovery</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="send_link.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="email" placeholder="Email Address" required="required">		
					</div>

					
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-lg btn-block login-btn" name="submit_email"></input>
					</div>
				</form>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div><!-- #wrapper end -->


<div id="review_modal" class="modal fade" >
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<div class="form-group">
	        		<input type="text" name="pusername" id="pusername" class="form-control" placeholder="Enter Your Name" />
	        	</div>

	        	

	        	<div class="form-group">
	        		<textarea name="comment" id="comment" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up rounded-circle"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="jss/jquery.js"></script>
	<script src="jss/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="jss/functions.js"></script>
	<script src="jss/smoothscroll.js"></script>
	<script src="jss/custom.js"></script>

	<style>
.progress-label-left
{
    float: left;
    margin-right: 0.5em;
    line-height: 1em;
}
.progress-label-right
{
    float: right;
    margin-left: 0.3em;
    line-height: 1em;
}
.star-light
{
	color:#e9ecef;
}
</style>

<script>
    function getdoctor(val) {
        $.ajax({
            type: "POST",
            url: "Patient/get_doctor.php",
            data:'field='+val,
            success: function(data){
                $("#doctor").html(data);
            }
        });
    }
</script>


<script>
    function getfee(val) {
        $.ajax({
            type: "POST",
            url: "Patient/get_doctor.php",
            data:'doctor='+val,
            success: function(data){
                $("#fees").html(data);
            }
        });
    }
</script>

<script>
    function gettime(val) {
        $.ajax({
            type: "POST",
            url: "Patient/gettime.php",
            data:'doctor='+val,
            success: function(data){
                $("#timeslot").html(data);
            }
        });
    }
</script>

	<script>
  function showAlert() {
    var myText = "You must Sign-Up to book an Appointment";
    alert (myText);
  }
  </script>

  <script>

$(document).ready(function(){

	var rating_data = 0;

    $('#add_review').click(function(){

        $('#review_modal').modal('show');

    });

    $(document).on('mouseenter', '.submit_star', function(){

        var rating = $(this).data('rating');

        reset_background();

        for(var count = 1; count <= rating; count++)
        {

            $('#submit_star_'+count).addClass('text-warning');

        }

    });

    function reset_background()
    {
        for(var count = 1; count <= 5; count++)
        {

            $('#submit_star_'+count).addClass('star-light');

            $('#submit_star_'+count).removeClass('text-warning');

        }
    }

    $(document).on('mouseleave', '.submit_star', function(){

        reset_background();

        for(var count = 1; count <= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light');

            $('#submit_star_'+count).addClass('text-warning');
        }

    });

    $(document).on('click', '.submit_star', function(){

        rating_data = $(this).data('rating');

    });

    $('#save_review').click(function(){

        var pusername = $('#pusername').val();

        var comment = $('#comment').val();

        if(pusername == '' || comment == '')
        {
            alert("Please Fill Both Field");
            return false;
        }
        else
        {
            $.ajax({
                success:function(data)
                {
                    $('#review_modal').modal('hide');

                    load_rating_data();

                    alert("Please sign-in before you can submit your review");
                }
            })
        }

    });

    load_rating_data();

    function load_rating_data()
    {
        $.ajax({
            url:"submit_rating.php",
            method:"POST",
            data:{action:'load_data'},
            dataType:"JSON",
            success:function(data)
            {
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) >= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);

                $('#total_four_star_review').text(data.four_star_review);

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)
                {
                    var html = '';

                    for(var count = 0; count < data.review_data.length; count++)
                    {
                        html += '<div class="row mb-3">';

                        html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].first_name.charAt(0)+'</h3></div></div>';

                        html += '<div class="col-sm-11">';

                        html += '<div class="card">';
                        html += '<div class="card-header"><b>'+data.review_data[count].first_name+'</b></div>';


                        html += '<div class="card-body">';

                        for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';

                            if(data.review_data[count].rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                        }

                        html += '<br />';

                        html += data.review_data[count].comment;

                        html += '</div>';

                        html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                        html += '</div>';

                        html += '</div>';

                        html += '</div>';
                    }

                    $('#review_content').html(html);
                }
            }
        })
    }

});

</script>


</body>
</html>