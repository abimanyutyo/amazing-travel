
	<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>Green Wheels a Travel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Green Wheels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
	<link href='<?php echo base_url(); ?>assets/css/font1.css' rel='stylesheet' type='text/css'>
	<link href='<?php echo base_url(); ?>assets/css/font2.css' rel='stylesheet' type='text/css'>
	<link href='<?php echo base_url(); ?>assets/css/font3.css' rel='stylesheet' type='text/css'>
	<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">

	<!-- Custom Theme files -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.12.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

	<!--animate-->
	<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!--//end-animate-->
</head>
<body>
	<div class="col-sm-4 col-sm-offset-8 kotak" style="margin-top:10px">
		<button type="submit" class="btn" style="background-color:#42e200; border-radius: 100px; font-size: 25px;font-family: Arial;font-style: bold; color:#ffffff;    position: absolute;
		right: 18px;bottom: -45px;"><a href="login">Login</a></button>
	</div>
	<!-- top-header -->
<!--
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.html"><i class="fa fa-home"></i></a></li>
			<li class="prnt"><a href="javascript:window.print()">Print/SMS Ticket</a></li>
				
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Toll Number : 123-4568790</li>				
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Sign Up</a></li> 
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >/ Sign In</a></li>
        </ul>
    -->
    <div class="clearfix"></div>
</div>
</div>
<!--- /top-header ---->
<!--- header ---->
<div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="<?php echo base_url(); ?>landing">Amazing <span>Travel</span></a>	
		</div>
		<div class="bus wow fadeInUp animated" data-wow-delay=".5s">
			<a href="index.html" class="buses active">PESAWAT</a>

		</div>
        <!--
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			<li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">SAFE &amp; SECURE<br> ONLINE PAYMENTS</div></li>
			<div class="clearfix"></div>
		-->
	</div>
	<div class="clearfix"></div>
</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
		<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="about.html"></a></li>
							<li><a href="faq.html"></a></li>
							<li><a href="#" data-toggle="modal" data-target="#myModal3"></a>  </li>
							<div class="clearfix"></div>
						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->	
			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
<!--- /footer-btm ---->
<!--- banner ---->
<div class="banner">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Amazing Travel - Best in Class for Travel with Plane</h1>
	</div>
</div>
<div class="contact" id="contact">
	<div class="container">  
		<center><h2>Your Personal Information</h2></center>
		<br>
		<form action="<?php echo base_url(); ?>landing/savecust" method="post">
			<div class="col-md-6">
				<div class="styled-input agile-styled-input-top form-group">

						<input type="hidden" name="idrute" required="" value="<?php echo $idrute;?>">
						<input type="hidden" name="idtrans" required="" value="<?php echo $idtrans;?>">

					<label>Name</label>
					<input type="text" class="form-control" name="name" required="">

					<span></span>
				</div>
				<div class="form-group">
					<label>Address</label>
					<input type="text" class="form-control" name="address" required="">

					<span></span>
				</div>
				<div class="form-group">
					<label>Phone</label>
					<input type="text" class="form-control" name="phone" required="">
					<span></span>
				</div>						
				<div class="form-group">
					<label>Gender</label>
					<select name="gender" class="form-control" >
						<option>Male</option>
						<option>Female</option>
					</select>
					<span></span>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" required=""> 
					<span></span>
				</div> 
				<div class="styled-input">
						<!-- <div class="row" style="background: ;">
						<?php for($i=1; $i<=$seat_qty; $i++){ ?>
						<div class="col-md-2">
							<input type="checkbox" name="seat_code"></input>
							A<?php echo $i; ?>
						</div>
							<?php } ?>
						</div> -->
					</div></div>
					<div class="clearfix"> </div>	
				</div>
			</div>
			<div class="col-sm-4 col-sm-offset-8 kotak" style="margin-top:10px">
				<button type="submit" class="btn" style="background-color:#42e200; border-radius: 100px; font-size: 25px;font-family: Arial;font-style: bold; color:#ffffff;    position: absolute;
				left: 18px;bottom: -45px;">Submit</button>
			</div>
		</form>

		<!---holiday---->

		<!--- /routes ---->
		<!--- footer-top ---->
		<div class="footer-top">
			<div class="container">
				<div class="col-md-6 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
					<h3>Company</h3>
					<ul>
						<li><a href="bus.html">Garuda Indonesia </a></li>
						<li><a href="bus.html">Air Asia</a></li>
						<li><a href="bus.html">Sriwijaya Air</a></li>
						<li><a href="bus.html">Lion Air</a></li>
						<li><a href="bus.html">Orlando Charter</a></li>
						<li><a href="bus.html">New Orleans Charter</a></li>
						<li><a href="bus.html">Houston Charter</a></li>
						<li><a href="bus.html">Nashville Charter</a></li>
						<li><a href="bus.html">Charlotte Charter</a></li>
						<li><a href="bus.html">Toronto Charter</a></li>
						<li><a href="bus.html">Washington Charter</a></li>
						<li><a href="bus.html">Los Angeles Charter</a></li>
						<li><a href="bus.html">Chicago Charter</a></li>
						<li><a href="bus.html">Orlando Charter</a></li>
						<li><a href="bus.html">New Orleans Charter</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="col-md-6 footer-left wow fadeInRight animated" data-wow-delay=".5s">

					<div class="clearfix"></div>
				</div>
			</div>
			<!--- /footer-top ---->
			<!---copy-right ---->
			<div class="copy-right">
				<div class="container">

					<div class="footer-social-icons wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
						<ul>
							<li><a class="facebook" href="#"><span>Facebook</span></a></li>
							<li><a class="twitter" href="#"><span>Twitter</span></a></li>
							<li><a class="flickr" href="#"><span>Flickr</span></a></li>
							<li><a class="googleplus" href="#"><span>Google+</span></a></li>
							<li><a class="dribbble" href="#"><span>Dribbble</span></a></li>
						</ul>
					</div>
					<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">© 2016 Green Wheels . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
				</div>
			</div>

		</body>
		</html>