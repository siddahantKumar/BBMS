<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from demosly.com/xicia/bloodbank/blood-groupwise-result/6 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 17:29:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

	
	<!-- Favicon -->
	<link href="public/images/bloodbank/assets/uploads/favicon.png" rel="shortcut icon" type="image/png">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="public/images/bloodbank/css/jquery-ui.css">
	<link rel="stylesheet" href="public/images/bloodbank/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/images/bloodbank/css/lightbox.min.css">
	<link rel="stylesheet" href="public/images/bloodbank/css/owl.carousel.min.css">
	<link rel="stylesheet" href="public/images/bloodbank/css/normalize.css">
	<link rel="stylesheet" href="public/images/bloodbank/css/slicknav.min.css">
	<link rel="stylesheet" href="public/images/bloodbank/css/style.css">
	<link rel="stylesheet" href="public/images/bloodbank/css/responsive.css">
	<link rel="stylesheet" href="public/images/bloodbank/css/chosen.css">
	<link rel="stylesheet" href="public/images/bloodbank/css/datatable.min.css">

	
	<script type="text/javascript" src="../../../../platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons"></script>

</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "../../../../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=323620764400430";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<!--Preloader Start-->
	<div id="preloader">
		<div id="status" style="background-image: url(public/images/bloodbank/img/preloader/preloader.gif)"></div>
	</div>
	<!--Preloader End-->

	<!--Top-Header Start-->
	<div class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="top-header-left">
						<p><i class="fa fa-phone"></i> 123-456-7878</p>
						<p><i class="fa fa-envelope-o"></i> info@yourwebsite.com</p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="top-header-right">
						
												<select data-placeholder="Register As" class="chosen-select form-control" name="blood_group_id" onchange="location = this.value;">	 <!-- Register for donor and seeker -->
										<option></option>
										<option value="{{ route('RegD')}}">Register As Donor</option>
																				<option></option>
										<option value="{{ route('RegS')}}">Register As Seeker</option>
								
</select>													
											</div>	
				</div>
			</div>
		</div>
	</div>

	<!--Menu Start-->
	<div class="menu-area">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="logo">
						<a href="{{ route('in')}}"><img src="public/images/bloodbank/assets/uploads/logo.png" alt=""></a>
					</div>
				</div>
				<div class="col-md-8 col-sm-9">
					<div class="menu">
						<ul id="nav" class="main-menu">
							
							<li><a href="{{ route('in')}}">
												<span class="menu-title">
													Home
												</span>
												</a></li><li></li><li>
											<a href="{{route('don')}}">
												<span class="menu-title">
													Donors
												</span>
											</a>
											</li><li></li><li>
											<a href="{{ route('agen') }}">
												<span class="menu-title">
													Agents
												</span>
											</a>
											</li><li></li><li>
											<a href="
											{{route('pri')}}">
												<span class="menu-title">
													Pricing
												</span>
											</a>
											</li><li><a href="#">
												<span class="menu-title">
													Pages
												</span>
												</a><ul><li><a href="{{route('ab')}}">About Us</a></li><li><a href="{{route('test')}}">Testimonial</a></li><li><a href="{{route('fa')}}">FAQ</a></li></ul></li><li>
											<a href="{{route('blo')}}">
												<span class="menu-title">
													Blog
												</span>
											</a>
											</li><li>
											<a href="{{route('contact')}}">
												<span class="menu-title">
													Contact Us
												</span>
											</a>
											</li>						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="banner-slider" style="background-image: url(public/images/bloodbank/assets/uploads/banner_search.jpg)">
	<div class="bg"></div>
	<div class="bannder-table">
		<div class="banner-text">
			<h1>Search Result</h1>
		</div>
	</div>
</div>


<div class="donner-page-area">
	<div class="container">
		<div class="row">
			
			<div class="col-md-12">
				<h3>All Results for &rarr; Blood Group: AB-</h3>			</div>

			<div class="error" style="font-size:20px;margin-top:20px;padding:0 15px;">Sorry! No Donor is Found.</div>	
			

			
		</div>
	</div>
</div>

	
	<!--Newsletters Start-->
	<div class="newsletter-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="newsletter-headline">
						<h2>Newsletter</h2>
												<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid fugit expedita, iure ullam cum vero ex sint aperiam maxime.						</p>
											</div>
					<div class="newsletter-submit">
												<form action="#" method="post">
							<input type="text" placeholder="Enter Your Email" name="email_subscribe">
							<input type="submit" value="Submit" name="form_subscribe">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Newsletters End-->

	<!--Footer-Area Start-->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3">
					<div class="footer-item footer-service">
						<h2>Latest News</h2>
						<ul class="fmain">
															<li><a href="../news/lorem-ipsum-dolor-sit-amet.html">Lorem ipsum dolor sit amet</a></li>
																<li><a href="../news/an-labores-explicari-qui-eu.html">An labores explicari qui eu</a></li>
																<li><a href="../news/nostrum-copiosae-argumentum-has.html">Nostrum copiosae argumentum has</a></li>
														</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="footer-item footer-service">
						<h2>Popular News</h2>
						<ul class="fmain">
															<li><a href="../news/tollit-cetero-cu-usu-etiam-evertitur.html">Tollit cetero cu usu etiam evertitur</a></li>
																<li><a href="../news/lorem-ipsum-dolor-sit-amet.html">Lorem ipsum dolor sit amet</a></li>
																<li><a href="../news/cu-vel-choro-exerci-pri-et-oratio-iisque.html">Cu vel choro exerci pri et oratio iisque</a></li>
														</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="footer-item footer-service">
						<h2>Contact</h2>
						<ul>
							<li>Address: ABC Steet, NewYork.</li>
							<li>Email: info@yourwebsite.com</li>
							<li>Phone: 123-456-7878</li>
							<li>Fax: 123-456-7890</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="footer-item footer-service">
						<h2>Social Media</h2>
						<div class="footer-social-link">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li><li><a href="#"><i class="fa fa-google-plus"></i></a></li><li><a href="#"><i class="fa fa-pinterest"></i></a></li>							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="copyright">
					<p>Copyright © 2017. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</div>

	<!--Footer-Area End-->


	<!--Scroll-Top-->
	<div class="scroll-top">
		<div class="scroll"></div>
	</div>
	<!--Scroll-Top-->


	

	<!--Js-->
	<script src="public/images/bloodbank/js/jquery-2.2.4.min.js"></script>
	<script src="public/images/bloodbank/js/jquery-ui.js"></script>
	<script src="public/images/bloodbank/js/bootstrap.min.js"></script>
	<script src="public/images/bloodbank/js/chosen.jquery.js"></script>
	<script src="public/images/bloodbank/js/docsupport/init.js"></script>
	<script src="public/images/bloodbank/js/lightbox.min.js"></script>
	<script src="public/images/bloodbank/js/jquery.dataTables.min.js"></script>
	<script src="public/images/bloodbank/js/owl.carousel.min.js"></script>
	<script src="public/images/bloodbank/js/jquery.slicknav.min.js"></script>
	<script src="public/images/bloodbank/js/jquery.filterizr.min.js"></script>
	<script src="public/images/bloodbank/js/jquery.collapse.js"></script>
	<script src="public/images/bloodbank/js/custom.js"></script>

	<script>
		function confirmDelete()
		{
		    return confirm("Do you sure want to delete this data?");
		}

	</script>


	
</body>


<!-- Mirrored from demosly.com/xicia/bloodbank/blood-groupwise-result/6 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 17:29:21 GMT -->
</html>