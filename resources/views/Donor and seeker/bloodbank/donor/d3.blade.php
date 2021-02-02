<!DOCTYPE html>
<html class="no-js" lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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


<div class="banner-slider" style="background-image: url(public/images/bloodbank/assets/uploads/banner_donor.jpg);">
	<div class="bg"></div>
	<div class="bannder-table">
		<div class="banner-text">
			<h1>Donor Detail</h1>
		</div>
	</div>
</div>

<div class="donner-profile">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<div class="donner-leftbar">
					<div class="donner-profile-item">
						<div class="donner-image" style="background-image: url(public/images/bloodbank/assets/uploads/donors/3.jpg)"></div>
						<div class="donner-leftbar-info">
							<h2>Mark L. Ison</h2>
							<h4>Blood Group: <span>A+</span> </h4>
							<div class="donner-leftbar-social">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li><li><a href="#"><i class="fa fa-pinterest"></i></a></li>								</ul>
							</div>
						</div>
					</div>
					<div class="donner-contact-form">
					<h3>Message to Donor</h3>
					
												<form action="#" class="myform" method="post">
							<div class="form-row">
							
								<div class="form-group">
									<label for="">Full Name *</label>
									<input type="text" class="form-control" name="visitor_name">
								</div>
							
								<div class="form-group">
									<label for="">Phone Number</label>
									<input type="text" class="form-control" name="visitor_phone">
								</div>
							
								<div class="form-group">
									<label for="">Email Address *</label>
									<input type="text" class="form-control" name="visitor_email">
								</div>

								<div class="form-group">
									<label for="">Message *</label>
									<textarea class="form-control" name="visitor_message"></textarea>
								</div>

								<button type="submit" class="btn btn-primary" name="form1">Submit</button>
								
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-8">
				<div class="donner-description">
					<div class="donner-description-list">
						<h3>Donor Details</h3>
						<table class="table table-bordered">
							<tr>
								<td style="width:200px"><span>Profession: </span></td>
								<td>Teacher</td>
							</tr>
							<tr>
								<td>Education: </td>
								<td>BA at Law</td>
							</tr>
							<tr>
								<td>Gender: </td>
								<td>Male</td>
							</tr>
							<tr>
								<td>Date of Birth: </td>
								<td>1981-01-17</td>
							</tr>
							<tr>
								<td>Age: </td>
								<td>
									39								</td>
							</tr>
							<tr>
								<td>Religion: </td>
								<td>Christian</td>
							</tr>
							<tr>
								<td>Email: </td>
								<td>marklison@rhyta.com</td>
							</tr>
							<tr>
								<td>Phone: </td>
								<td>505-327-2514</td>
							</tr>
							<tr>
								<td>Website: </td>
								<td>
									---								</td>
							</tr>
							<tr>
								<td>Address: </td>
								<td>3988 Reel Avenue,  </td>
							</tr>
							<tr>
								<td>Country: </td>
								<td>USA</td>
							</tr>
							<tr>
								<td>State: </td>
								<td>
									NM								</td>
							</tr>
							<tr>
								<td>City: </td>
								<td>Farmington</td>
							</tr>
							<tr>
								<td>Zip Code: </td>
								<td>87401</td>
							</tr>
							<tr>
								<td>Map: </td>
								<td>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3260.367061859243!2d-80.85350288512898!3d35.19732488031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88569fa1d407d78f%3A0x84d8e8232faad74b!2sBlood+Donation!5e0!3m2!1sen!2sbd!4v1514178603845" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>								</td>
							</tr>
						</table>
						<h3>Description</h3>
						<p class="description">
							Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.<br />
<br />
Detracto contentiones te est, brute ipsum consul an vis. Mea ei regione blandit ullamcorper, definiebas constituam vix ei. At his ludus nonumes gloriatur. Ne vim tamquam nonumes.<br />
<br />
Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.						</p>

						<h3 style="margin-top:30px;">Agent Details (Who Added This Donor)</h3>
						<table class="table table-bordered">
							<tr>
								<td style="width:200px">Agent Name: </td>
								<td>Thomas W. Spencer</td>
							</tr>
							<tr>
								<td>Designation: </td>
								<td>System Engineer</td>
							</tr>
							<tr>
								<td>Organization: </td>
								<td>Afforda</td>
							</tr>
							<tr>
								<td>Email Address: </td>
								<td>muh@gmail.com</td>
							</tr>
							<tr>
								<td>Phone Number: </td>
								<td>207-843-8306</td>
							</tr>
							<tr>
								<td>More about this agent: </td>
								<td>
									<a href="../agent/11.html">Click Here</a>
								</td>
							</tr>
						</table>
					</div>
					
				</div>
			</div>
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



</html>