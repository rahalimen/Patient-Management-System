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

		<!-- Top Bar
		============================================= -->
		

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
							<a href="index.php" class="retina-logo"><img src="pms/images/logo-medical@2x.png" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu style-3 menu-spacing-margin">

							<ul class="menu-container">
								<li class="menu-item current"><a class="menu-link"  href="index.php"><div>Home</div></a></li>
								
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Slider
		============================================= -->

		<!-- Content
		============================================= -->
		

		

				

			<section id="feedback">


				<div class="section mt-0">
					<div class="container clearfix">

						<div class="row">
    	<div class="card">
    		<div class="card-body">
    			<div class="row">
    				

    				<h2> Reset Password</h2>   

<?php
include('Adaptor/db.php');
if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email) {
  	$error .="<p>Invalid email address please type a valid email address!</p>";
	}else{
	$sel_query = "SELECT * FROM `patient` WHERE email='".$email."'";
	$results = mysqli_query($con,$sel_query);
	$row = mysqli_num_rows($results);
	if ($row==""){
		$error .= "<p>No user is registered with this email address!</p>";
		}
	}
	if($error!=""){
	echo "<div class='error'>".$error."</div>
	<br /><a href='javascript:history.go(-1)'>Go Back</a>";
		}else{
	$expFormat = mktime(date("H"), date("i"), date("s"), date("m")  , date("d")+1, date("Y"));
	$expDate = date("Y-m-d H:i:s",$expFormat);
	$key = md5(2418*2 . $email);
	$addKey = substr(md5(uniqid(rand(),1)),3,10);
	$key = $key . $addKey;
// Insert Temp Table
mysqli_query($con,
"INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`)
VALUES ('".$email."', '".$key."', '".$expDate."');");

$output='<p>Dear user,</p>';
$output.='<p>Please click on the following link to reset your password.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p><a href="localhost/pms/reset-password.php?key='.$key.'&email='.$email.'&action=reset" target="_blank">localhost/pms/reset-password.php?key='.$key.'&email='.$email.'&action=reset</a></p>';		
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Please be sure to copy the entire link into your browser.
The link will expire after 1 day for security reason.</p>';
$output.='<p>If you did not request this forgotten password email, no action 
is needed, your password will not be reset. However, you may want to log into 
your account and change your security password as someone may have guessed it.</p>';   	
$output.='<p>Thanks,</p>';
$body = $output; 
$subject = "Password Recovery - PMS";

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
if(!$mail->Send()){
echo "Mailer Error: " . $mail->ErrorInfo;
}else{
echo "<div class='error'>
<p>An email has been sent to you with instructions on how to reset your password.</p>
</div><br /><br /><br />";
	}

		}	

}else{
?>
<form  method="post" action="" name="reset"><br /><br />
<div class="form-group">
<label><strong>Enter Your Email Address:</strong></label><br /><br />
<input class="form-control" type="email" name="email" placeholder="username@email.com" />
</div>
 <div class="form-group">
<input class="btn btn-primary btn-lg btn-block login-btn" type="submit" value="Reset Password"/>
</div>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php } ?>
    			</div>
    		</div>
    	</div>
    	<div class="mt-5" id="review_content"></div>
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
								<a href="#">Home</a>/<a href="#">About Us</a>/<a href="#">Team</a>/<a href="#">Contact</a>
							</div>
						</div>
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

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

</body>
</html>