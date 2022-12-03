<?php
session_start();
include "Adaptor/_db-connect.php";
include "Adaptor/mysql_crud.php";


if(isset($_POST['submit']))
{
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $username=($_POST['username']);
	 
$length = strlen ($username);  
  
if ( $length < 12 && $length > 12) {  
    $ErrMsg = "Mobile must have 10 digits.";  
            echo $ErrMsg;  
} 

    $password=$_POST['Password'];
    $email=$_POST['email'];
    $sex=$_POST['sex'];
    $address=$_POST['address'];
    $dob=$_POST['DOB'];
    $phone=$_POST['phone'];
	$blood_group=$_POST['blood_group'];
    $allergies=$_POST['allergies'];
    $illness=$_POST['illness'];
    $on_med=$_POST['on_med'];
    $med=$_POST['med'];
	$Destination = 'userfiles/premr';
    if(!isset($_FILES['PDFFile']) || !is_uploaded_file($_FILES['PDFFile']['tmp_name'])){
        $filename= 'default.pdf';
        move_uploaded_file($_FILES['PDFFile']['tmp_name'], "$Destination/$filename");
    }
    else{
        $RandomNum = rand(0, 999999999);
        $FileName = str_replace(' ','-',strtolower($_FILES['PDFFile']['name']));
        $FileType = $_FILES['PDFFile']['type'];
        $FileExt = substr($FileName, strrpos($FileName, '.'));
        $FileExt = str_replace('.','',$FileExt);
        $FileName = preg_replace("/\.[^.\s]{3,4}$/", "", $FileName);
        $filename = $FileName.'-'.$RandomNum.'.'.$FileExt;
        move_uploaded_file($_FILES['PDFFile']['tmp_name'], "$Destination/$filename");
    }
	
	$Destinationi = 'userfiles/avatars';
	$Destination_m = 'Doctor/img';

    if(!isset($_FILES['ImageFile']) || !is_uploaded_file($_FILES['ImageFile']['tmp_name'])){
        $user_image= 'userfiles/avatars/default.jpg';
        $final_dis = $Destinationi . '/' . $user_image ;
        $final_dist = $Destination_m  . '/' . $user_image;
        move_uploaded_file($_FILES['ImageFile']['tmp_name'], $final_dis);
        copy($final_dis, $final_dist);
    }
    else{
        $RandomNum = rand(0, 999999999);
        $ImageName = str_replace(' ','-',strtolower($_FILES['ImageFile']['name']));
        $ImageType = $_FILES['ImageFile']['type'];
        $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt = str_replace('.','',$ImageExt);
        $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        $user_image = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
        $final_dis = $Destinationi . '/' . $user_image ;
        $final_dist = $Destination_m  . '/' . $user_image;
        move_uploaded_file($_FILES['ImageFile']['tmp_name'], $final_dis);
        copy($final_dis, $final_dist);

    }
    $token = md5($_POST['email']).rand(10,9999);
    $db=Database::getInstance();
    $db->connect();
    $db->insert('patient',array('first_name'=>$first_name,'last_name'=>$last_name,'username'=>$username,'Password'=>$password,'email'=>$email,'sex'=>$sex,'address'=>$address,'DOB'=>$dob,'phone'=>$phone,'allergies'=>$allergies,'illness'=>$illness ,'on_med'=>$on_med,'med'=>$med, 'blood_group'=>$blood_group,'filename'=>$filename, 'user_image'=>$user_image,'email_verification_link'=>$token));
	$sql = "INSERT INTO `users` (`id`, `name`, `email`, `password`, `profile_img`, `dt` , `label` , `first_name`, `last_name` ) VALUES ($username, '$username', '$email', '$password', 'img/$user_image', current_timestamp(), 'p', '$first_name', '$last_name');";
    $result = mysqli_query($conn, $sql);
$link = "<a href='localhost/pms/verify-email.php?key=".$_POST['email']."&token=".$token."'>Click and Verify Email</a>";
$output='<p>Dear user,</p>';
$output.='<p>Please click on the following link to verify your account.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>PMS Verify Account '.$link.'</p>';		
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Please be sure to copy the entire link into your browser.</p>';
$output.='<p>Thanks,</p>';


$body = $output;
$subject = "Account	Activation - PMS";

$email_to = $email;
$fromserver = "pms_pp@outlook.com"; 
require("PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "smtp-relay.sendinblue.com"; // Enter your host here
$mail->SMTPAuth = true;
$mail->Username = "pms_pp@outlook.com"; // Enter your email here
$mail->Password = "gGwjYshDNPKE2n4Q"; //Enter your passwrod here
$mail->Port = 587;
$mail->IsHTML(true);
$mail->From = "pms_pp@outlook.com";
$mail->FromName = "pms";
$mail->Sender = $fromserver; // indicates ReturnPath header
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($email_to);
$mail->Send()
    ?>

    <div class="alert alert-success" id="alert"><strong><?php echo "Submitted succesfully, Please Check Your Email for Account Verification"; ?></strong></div>
    <?php

}


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
    <?php include  "Admin/validation.php"; ?>

    <link href="round.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>

	<!-- Document Title
	============================================= -->
	<title>Registration</title>

	<script>
function myFunction() {
  document.getElementById("submit").disabled = true;
}
</script>	

	<script>
        function confirmPass() {

            if ($("#password").val() != $("#confirm_password").val()) {
                $('#password2_name_status').html("Passwords do not match.");
                return false
            }
            else {
                return true;
            }

        }
    </script>
    

</head>

<body class="stretched" data-loader-html="<div id='css3-spinner-svg-pulse-wrapper'><svg id='css3-spinner-svg-pulse' version='1.2' height='210' width='550' xmlns='https://www.w3.org/2000/svg' viewport='0 0 60 60' xmlns:xlink='https://www.w3.org/1999/xlink'><path id='css3-spinner-pulse' stroke='#DE6262' fill='none' stroke-width='2' stroke-linejoin='round' d='M0,90L250,90Q257,60 262,87T267,95 270,88 273,92t6,35 7,-60T290,127 297,107s2,-11 10,-10 1,1 8,-10T319,95c6,4 8,-6 10,-17s2,10 9,11h210' /></svg></div>">

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
							<a href="index.html" class="standard-logo"><img src="pms/images/logo-medical.png" alt="Canvas Logo"></a>
							<a href="index.html" class="retina-logo"><img src="pms/images/logo-medical@2x.png" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu style-3 menu-spacing-margin">

							<ul class="menu-container">
								<li class="menu-item"><a class="menu-link" href="index.php"><div>Home</div></a></li>
								<li class="menu-item"><a class="menu-link" href="index.php"><div>About Us</div></a></li>
								<li class="menu-item"><a class="menu-link" href="index.php"><div>Appointment</div></a></li>
								<li class="menu-item"><a class="menu-link" href="index.php"><div>Doctors</div></a></li>
								<li class="menu-item"><a class="menu-link" data-toggle="modal" href="#myModal"><div>Login</div></a></li>
								<li class="menu-item current"><a class="menu-link" href="signup.php"><div>Sign-Up</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax" style="background-image: url('pms/images/appointment/page-title-bg.jpg'); background-position: bottom center; background-size: cover; padding: 80px 0;">

			<div class="container clearfix">
				<h1>Registration Form</h1>
				<span>Sign-Up To Book An Appointment</span>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
				<div class="section mb-0 parallax" style="background: url('pms/images/appointment/bg.jpg') top center no-repeat / cover;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px 200px;">
					<div class="container">
						<div class="row">
							<div class="col-lg-5">
								<div class="d-none d-lg-block" style="position: relative;" data-height-xl="413" >
									<img src="pms/images/appointment/doctor1.png" alt="Image" style="position bottom: -20px;">
								</div>
							</div>

							<div class="form-widget col-lg-7">
								<div class="form-result"></div>

								<form class="row mb-0" id="form1" name="form1" onsubmit="return validateForm(this);" method="post" enctype="multipart/form-data">
									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>
									<div class="col-md-4 form-group">
										<label for="template-medical-name">First Name:</label>
										<input type="text" id="first_name" name="first_name" class="form-control not-dark required" required >
									</div>
									<div class="col-md-4 form-group">
										<label for="template-medical-phone">Last Name:</label>
										<input type="text" id="last_name" name="last_name" class="form-control not-dark required" required >
									</div>
									<div class="col-md-4 form-group">
										<label for="template-medical-dob">Date of Birth:</label>
										<input type="date" id="DOB" name="DOB" class="form-control datepicker not-dark required"  placeholder="MM/DD/YYYY" required>
									</div>
									<div class="w-100"></div>
									<div class="col-md-8 form-group">
										<label for="template-medical-email">Email Address:</label>
										<input type="email" id="email" name="email" onblur="return checkemail(this.value);" onkeyup= "return ValidateEmail(this.value);" class="form-control not-dark required" required >
										<span id="email-status"> </span>

									</div>
									<div class="col-md-4 form-group">
										<label for="template-medical-name">Username:</label>
										<input type="text" id="username" name="username" onkeyup="return checkUsername(this.value);" onblur="return checkname(this.value);" class="form-control not-dark required" placeholder="Enter IC/Passport No"required>
									    <span id="user-availability-status1"></span>

									</div>
									
									<div class="col-md-4 form-group">
										<label for="template-medical-name">Password</label>
										<input type="password" id="Password" name="Password" onkeyup="return checkPassword(this.value,8,15);" class="form-control not-dark required" required >

									</div>
									
									<div class="col-md-4 form-group">
										<label for="template-medical-name"> Confirm Password</label>
										<input type="password" id="confirm_password" name="confirm_password" onkeyup="return confirmpassword();" class="form-control not-dark required" required >
									</div>
									
									<div class="col-md-4 form-group">
										<label for="template-medical-name">Gender:</label>
										<p> <select id="sex" name="sex" class="form-select not-dark required"  required>
                        <option  value='Male'>Male</option>
                        <option value="Female">Female</option>
                    </select></p>
									</div>
									
									<div class="col-md-4 form-group">
										<label for="template-medical-name">Phone Number:</label>
										<input type="text" id="phone" name="phone" class="form-control not-dark required" required >
									</div>
									
									<div class="col-md-4 form-group">
										<label for="template-medical-name">Allergies, If any:</label>
										<input placeholder="No" type="text" id="allergies" name="allergies" class="form-control not-dark">
									</div>
									
									<div class="col-md-4 form-group">
										<label for="template-medical-name">Illness, If any:</label>
										<input placeholder="No" type="text" id="illness" name="illness" class="form-control not-dark">
									</div>
									
									
									<div class="w-100"></div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-12 form-group">
												<label for="template-medical-second-booking">Are You on Medication?</label><br>
												<label class="rightmargin-sm">
													<input type="radio" id="on_med" name="on_med" value="Yes">
													Yes
												</label>
												<label>
													<input type="radio" name="on_med" value="No" checked>
													No
												</label>
											</div>
										</div>
									</div>
									<div class="col-md-7 form-group">
										<label for="template-medical-message">If Yes, Please List them:</label>
										<textarea id="med" name="med" class="form-control not-dark" cols="30" rows="1"></textarea>
									</div>
									
									<div class="w-100"></div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-12 form-group">
												<label for="template-medical-name">Blood Group:</label>
										<p> <select id="blood_group" name="blood_group" class="form-select custom-select not-dark required" >
                        <option  value='A+'>A+</option>
                        <option value="A-">A-</option>
						<option  value='B+'>B+</option>
                        <option value="B-">B-</option>
						<option  value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
						<option  value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select></p>
											</div>
										</div>
									</div>
									<div class="col-md-7 form-group">
										<label for="template-medical-message">Address:</label>
										<textarea id="address" name="address" class="form-control not-dark required" cols="30" rows="1" required></textarea>
									</div>
									
									<div class="w-100"></div>
									<div class="col-md-12 form-group">
									<label for="template-medical-message">Upload Previous Medical Reports, if You have:</label>
										<input type="file" name="PDFFile" class="form-control not-dark" />
									</div>
									
									<div class="w-100"></div>
									<div class="col-md-12 form-group">
									<label for="template-medical-message">Upload Profile Picture </label>
										<input type="file" name="ImageFile" class="form-control not-dark" required />
									</div>
									
									<div class="w-100"></div>
									<div class="col-12 form-group d-none">
										<input type="text" name="template-medical-botcheck" value="" />
									</div>
									<div class="col-12 form-group text-end">
										<button class="button button-rounded m-0" id="submit" type="submit" name="submit">Complete Registration</button>


									</div>
								</form>
								<p>
  		                       Already a member? <a data-toggle="modal" href="#myModal">Sign in</</p>

							</div>
						</div>
					</div>
				</div>


				<div class="promo promo-dark promo-full promo-uppercase bg-color footer-stick p-5">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-12 col-lg">
								<h3 style="letter-spacing: 2px;">BOOK AN APPOINTMENT</h3>
								<span class="nott">Book an appointment for fast service </span>
							</div>
							<div class="col-12 col-lg-auto mt-4 mt-lg-0">
								<a href="#" class="button button-large button-border button-rounded button-light button-white m-0">Book an APPOINTMENT</a>
							</div>
						</div>
					</div>
				</div>

		</section><!-- #content end -->

		
					<footer>
			<!-- Copyrights
			============================================= -->
			<span> aa</span>
			<div id="copyrights" class="bg-transparent">
				<div class="container clearfix">

					<div class="row col-mb-30">
						

						<div class="col-md-6 text-center text-md-end">
							<div class="copyrights-menu copyright-links clearfix">
								<a href="index.php">Home</a>/<a href="index.php">About Us</a>/<a href="index.php">Doctors</a>/<a href="index.php">Contact</a>
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
				<a href="#">Forgot Password?</a>
			</div>
		</div>
	</div>
</div><!-- #wrapper end -->
	<!-- #wrapper end --><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>
	
	<script>
    function validateForm() {
        console.log("im in");
        var passid = document.forms["form1"]["Password"].value;
        alert(passid);

        if (passid_validation(passid, 7, 12)) {
            return false;
        }


        function passid_validation(passid, mx, my) {
            var passid_len = passid.value.length;
            if (passid_len == 0 || passid_len >= my || passid_len < mx) {
                alert("Password should not be empty / length be between " + mx + " to " + my);
                passid.focus();
                return false;
            }
            return true;
        }

        
 }
</script>



<script>
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

// <script>
    // function readURL(input) {

        // if (input.files && input.files[0]) {
            // var reader = new FileReader();

            // reader.onload = function (e) {
                // $('#blah').attr('src', e.target.result);
            // }

            // reader.readAsDataURL(input.files[0]);
        // }
    // }

    // $("#ImageFile").change(function () {
        // readURL(this);
    // });
// </script>


<script >
        function checkname(val){

            var name=val;

            if(name)
            {
                $.ajax({
                    type: 'POST',
                    url: 'checkUserName.php?type=patient',
                    data: {
                        user_name:name,
                    },
                    success: function (response) {
                        $( '#user-availability-status1' ).html(response);
                        if(response=="OK")
                        {
                            return true;
                            document.getElementById("submit").disabled = true;

                        }
                        else
                        {
                            return false;
                            document.getElementById("submit").disabled = true;


                        }
                    }
                });
            }
            else
            {
                $( '#user-availability-status1' ).html("");
                return false;
                document.getElementById("submit").disabled = true;

            }
        }</script>
    <script>function checkemail(va)
        {
            var email=va;

            if(email)
            {
                $.ajax({
                    type: 'post',
                    url: 'checkEmail.php?type=patient',
                    data: {
                        user_email:email,
                    },
                    success: function (response) {
                        $( '#email-status' ).html(response).focus();
                        if(response=="OK")
                        {
                            return true;
                           document.getElementById("submit").disabled = true;

                        }
                        else
                        {
                            return false;
                           document.getElementById("submit").disabled = true;

                        }
                    }
                });
            }
            else
            {
                $( '#email-status' ).html("");
                return false;
                document.getElementById("submit").disabled = true;

            }
        }</script>

<?php include 'controllers/base/AfterBodyJS.php' ?>

</body>
</html>