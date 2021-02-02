<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from demosly.com/xicia/bloodbank/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 17:28:36 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<!--just for some help-->
<link rel="shortcut icon" href="public/images/assets/dist/img/ico/favicon.png" type="image/x-icon">
      <!-- Start Global Mandatory Style
         =====================================================================-->
      <!-- jquery-ui css -->
      <link href="public/images/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap -->
      <link href="public/images/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap rtl -->
      <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
      <!-- Lobipanel css -->
      <link href="public/images/assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pace css -->
      <link href="public/images/assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
      <!-- Font Awesome -->
      <link href="public/images/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pe-icon -->
      <link href="public/images/assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
      <!-- Themify icons -->
      <link href="public/images/assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
      <!-- dataTables css -->
      <link href="public/images/assets/plugins/datatables/dataTables.min.css" rel="stylesheet" type="text/css"/>
      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link href="public/images/assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
      <!-- Theme style rtl -->
      <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
      <!-- End Theme Layout Style
         =====================================================================-->

	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

	<meta name="description" content="BloodBank - Blood Bank and Donor Management CMS"><meta name="keywords" content="blood, blood bank, blood donor, hospital, directory, blood bank directory, donor directory, patient, blood management, blood group, blood group listing, blood listing, donor listing"><title>BloodBank - Blood Bank and Donor Management CMS</title>
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


	
	<script type="text/javascript" src="../../../platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons"></script>
	<style type="text/css">
		#uper-color{
			color: white;
		}

	</style>

</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "../../../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=323620764400430";
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
												</a><ul><li><a href="{{route('abo')}}">About Us</a></li><li><a href="{{route('test')}}">Testimonial</a></li><li><a href="{{route('fa')}}">FAQ</a></li></ul></li><li>
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

	<!--Slider-Area Start-->
	<div class="slider-area">
		<div class="slider-item" style="background-image: url(public/images/bloodbank/assets/uploads/adult-art-background-673862.jpg)">
			<div class="bg-3" style="opacity:0.6;"></div>
			<div class="container">
				<div class="row">
					<div class="slider-text">
						<h1>Search a Donor in your Area</h1>
					</div>
					<div class="searchbox">
						
						<form action="https://demosly.com/xicia/bloodbank/search" method="post">
						
							<div class="col-md-3 col-sm-6">
								<input autocomplete="off" type="text" name="country" class="form-control" placeholder="Country Name">
							</div>

							<div class="col-md-3 col-sm-6">
								<input autocomplete="off" type="text" name="city" class="form-control" placeholder="City Name">
							</div>

							<div class="col-md-3 col-sm-6">
								
								<select data-placeholder="Choose Blood Group" class="chosen-select form-control" name="blood_group_id">	
																			<option></option>
										<option value="1">A+</option>
																				<option></option>
										<option value="2">A-</option>
																				<option></option>
										<option value="3">B+</option>
																				<option></option>
										<option value="4">B-</option>
																				<option></option>
										<option value="5">AB+</option>
																				<option></option>
										<option value="6">AB-</option>
																				<option></option>
										<option value="7">O+</option>
																				<option></option>
										<option value="8">O-</option>
																		</select>
							</div>
							
							<div class="col-md-3 col-sm-6">
								<input type="submit" value="Search Donor" name="form_search">
							</div>

						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Slider-Area End-->
	
	
	<div class="blood-gallery bg-gray">
		<div class="container">
			<div class="row">
				<div class="headline">
					<h2>Blood Groups</h2>
					<div class="headline-icon" style="background-image: url(public/images/bloodbank/img/blood.png)"></div>
				</div>
									<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="blood-item">
							<a href="{{route('b_1')}}">A+</a>
						</div>
					</div>
										<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="blood-item">
							<a href="{{route('b_2')}}">A-</a>
						</div>
					</div>
										<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="blood-item">
							<a href="{{route('b_3')}}">B+</a>
						</div>
					</div>
										<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="blood-item">
							<a href="{{route('b_4')}}">B-</a>
						</div>
					</div>
										<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="blood-item">
							<a href="{{route('b_5')}}">AB+</a>
						</div>
					</div>
										<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="blood-item">
							<a href="{{route('b_6')}}">AB-</a>
						</div>
					</div>
										<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="blood-item">
							<a href="{{route('b_7')}}">O+</a>
						</div>
					</div>
										<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="blood-item">
							<a href="{{route('b_8')}}">O-</a>
						</div>
					</div>
								</div>
		</div>
	</div>


	<div class="donner-list-area">
		<div class="container">
			<div class="row">
				<div class="headline">
					<h2>Recent Donors</h2>
					<div class="headline-icon" style="background-image: url(public/images/bloodbank/img/blood.png)"></div>
				</div>
				<div class="donner-gallery owl-carousel">


											<div class="donner-item">
							<div class="donner-list">
								<div class="donner-photo" style="background-image: url(public/images/bloodbank/assets/uploads/donors/6.jpg)"></div>
								<div class="donner-info">
									<h2><a href="{{route('d_6')}}">James B. Day</a></h2>
									<h4>Blood Group: <span>A-</span> </h4>
									<div class="donner-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li><li><a href="#"><i class="fa fa-pinterest"></i></a></li>										</ul>
									</div>
									<div class="donner-link">
										<a href="{{route('d_6')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
																		<div class="donner-item">
							<div class="donner-list">
								<div class="donner-photo" style="background-image: url(public/images/bloodbank/assets/uploads/donors/5.jpg)"></div>
								<div class="donner-info">
									<h2><a href="{{route('d_5')}}">Kenneth C. Beck</a></h2>
									<h4>Blood Group: <span>B+</span> </h4>
									<div class="donner-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li><li><a href="#"><i class="fa fa-pinterest"></i></a></li>										</ul>
									</div>
									<div class="donner-link">
										<a href="{{route('d_5')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
																		<div class="donner-item">
							<div class="donner-list">
								<div class="donner-photo" style="background-image: url(public/images/bloodbank/assets/uploads/donors/4.jpg)"></div>
								<div class="donner-info">
									<h2><a href="{{route('d_4')}}">Bobby S. Sargent</a></h2>
									<h4>Blood Group: <span>A+</span> </h4>
									<div class="donner-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li><li><a href="#"><i class="fa fa-pinterest"></i></a></li>										</ul>
									</div>
									<div class="donner-link">
										<a href="{{route('d_4')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
																		<div class="donner-item">
							<div class="donner-list">
								<div class="donner-photo" style="background-image: url(public/images/bloodbank/assets/uploads/donors/3.jpg)"></div>
								<div class="donner-info">
									<h2><a href="{{route('d_3')}}">Mark L. Ison</a></h2>
									<h4>Blood Group: <span>A+</span> </h4>
									<div class="donner-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li><li><a href="#"><i class="fa fa-pinterest"></i></a></li>										</ul>
									</div>
									<div class="donner-link">
										<a href="{{route('d_3')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
																</div>
			</div>
		</div>
	</div>



	<div class="donner-list-area bg-gray">
		<div class="container">
			<div class="row">
				<div class="headline">
					<h2>Recent Agents</h2>
					<div class="headline-icon" style="background-image: url(public/images/bloodbank/img/blood.png)"></div>
				</div>
				<div class="donner-gallery owl-carousel">


																	<div class="donner-item">
							<div class="donner-list">
																	<div class="donner-photo" style="background-image: url(public/images/bloodbank/assets/uploads/agents/13.jpg)"></div>
																<div class="donner-info">
									<h2><a href="{{route('a_13')}}">Travis G. Wolf</a></h2>
									<h4>
										Designation: Telemarketer<br>
										Organization: Linens And Things									</h4>
									<div class="donner-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li><li><a href="#"><i class="fa fa-pinterest"></i></a></li>										</ul>
									</div>
									<div class="donner-link">
										<a href="{{route('a_13')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
																		<div class="donner-item">
							<div class="donner-list">
																	<div class="donner-photo" style="background-image: url(public/images/bloodbank/assets/uploads/agents/12.jpg)"></div>
																<div class="donner-info">
									<h2><a href="{{route('a_12')}}">James V. Green</a></h2>
									<h4>
										Designation: Mail Process Operator<br>
										Organization: The Fox and Hound									</h4>
									<div class="donner-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li><li><a href="#"><i class="fa fa-pinterest"></i></a></li>										</ul>
									</div>
									<div class="donner-link">
										<a href="{{route('a_12')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
																		<div class="donner-item">
							<div class="donner-list">
																	<div class="donner-photo" style="background-image: url(public/images/bloodbank/assets/uploads/agents/11.jpg)"></div>
																<div class="donner-info">
									<h2><a href="{{route('a_11')}}">Thomas W. Spencer</a></h2>
									<h4>
										Designation: System Engineer<br>
										Organization: Afforda									</h4>
									<div class="donner-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li><li><a href="#"><i class="fa fa-pinterest"></i></a></li>										</ul>
									</div>
									<div class="donner-link">
										<a href="{{route('a_11')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
																		<div class="donner-item">
							<div class="donner-list">
																	<div class="donner-photo" style="background-image: url(public/images/bloodbank/assets/uploads/agents/10.jpg)"></div>
																<div class="donner-info">
									<h2><a href="{{route('a_10')}}">Charles Saddler</a></h2>
									<h4>
										Designation: Sales Officer<br>
										Organization: BB Hospital									</h4>
									<div class="donner-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li><li><a href="#"><i class="fa fa-pinterest"></i></a></li>										</ul>
									</div>
									<div class="donner-link">
										<a href="{{route('a_10')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
																		<div class="donner-item">
							<div class="donner-list">
																	<div class="donner-photo" style="background-image: url(public/images/bloodbank/assets/uploads/agents/6.jpg)"></div>
																<div class="donner-info">
									<h2><a href="{{route('a_6')}}">Patrick Smith</a></h2>
									<h4>
										Designation: Marketing Officer<br>
										Organization: AA Hospital									</h4>
									<div class="donner-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li><li><a href="#"><i class="fa fa-pinterest"></i></a></li>										</ul>
									</div>
									<div class="donner-link">
										<a href="{{route('a_6')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
																</div>
			</div>
		</div>
	</div>
	


	<!--Testimonial Area Start-->
	<div class="testimonial-area" style="background-image: url(public/images/bloodbank/assets/uploads/testimonial.jpg)">
		<div class="bg-2" style="background-color: #333;"></div>
		<div class="container">
			<div class="row">
				<div class="headline headline-white">
					<h2>Happy Customers</h2>
					<div class="headline-icon" style="background-image: url(public/images/bloodbank/img/blood-white.png)"></div>
				</div>
				<div class="testimonial-gallery owl-carousel">
											<div class="testimonial-item">
							<div class="testimonial-photo" style="background-image: url(public/images/bloodbank/assets/uploads/testimonial-1.jpg)"></div>
							<div class="testimonial-text">
								<h2>John Doe</h2>
								<h3>Managing Director(ABC Inc.)</h3>
								<div class="testimonial-pra">
									<p>
										A Managing Director is is responsible for giving strategic guidance and direction to the board to ensure that the Company achieves its financial vision, mission and long term goals.									</p>
								</div>
							</div>
						</div>
												<div class="testimonial-item">
							<div class="testimonial-photo" style="background-image: url(public/images/bloodbank/assets/uploads/testimonial-2.jpg)"></div>
							<div class="testimonial-text">
								<h2>Dadiv Smith</h2>
								<h3>CEO(SS Multimedia)</h3>
								<div class="testimonial-pra">
									<p>
										Kwasi is the visionary, founder and Chief Executive Officer of Multimedia.									</p>
								</div>
							</div>
						</div>
												<div class="testimonial-item">
							<div class="testimonial-photo" style="background-image: url(public/images/bloodbank/assets/uploads/testimonial-3.jpg)"></div>
							<div class="testimonial-text">
								<h2>Stefen Carman</h2>
								<h3>Chairman(GH Group)</h3>
								<div class="testimonial-pra">
									<p>
										The chairman's primary role is to ensure that the board is effective in its task of setting and implementing the company's direction and strategy. The chairman is appointed by the board and the position may be full-time or part-time.									</p>
								</div>
							</div>
						</div>
												<div class="testimonial-item">
							<div class="testimonial-photo" style="background-image: url(public/images/bloodbank/assets/uploads/testimonial-4.jpg)"></div>
							<div class="testimonial-text">
								<h2>Gary Brent</h2>
								<h3>CFO(XYZ It Solution)</h3>
								<div class="testimonial-pra">
									<p>
										A chief financial officer (CFO) is the senior executive responsible for managing the financial actions of a company. The CFO's duties include tracking cash flow and financial planning as well as analyzing the company's financial strengths and weaknesses and proposing corrective actions..									</p>
								</div>
							</div>
						</div>
										</div>
			</div>
		</div>
	</div>
	<!--Testimonial Area End-->

	<!--Latest News Start-->
	<div class="latest-news">
		<div class="container">
			<div class="row">
				<div class="headline">
					<h2><span>Test</span> Names</h2>
					<div class="headline-icon" style="background-image: url(public/images/bloodbank/img/blood.png)"></div>
				</div>
				<div class="latest-gallery owl-carousel">
											<div class="latest-item">
							<div class="latest-photo" style="background-image: url(public/images/bloodbank/assets/uploads/news-11.jpg)"></div>
							<div class="latest-text">
								<h2>ABO incompatibility</h2>
								<ul>
									<li>Information type: <a href="https://hospitals.aku.edu/pakistan/medical-and-diagnostics/clinical-labs/laboratory-manual/Documents/ABO%20Incompatibility%20Titre.pdf">Commercial</a></li>
									<li>Date: 05-06-2019</li>
								</ul>
								<div class="latest-pra">
									<p>
										<p>A, B, AB, and O are the 4 major blood types...									</p>
									<a href="{{route('ab')}}">Read more</a>
								</div>
							</div>
						</div>
												<div class="latest-item">
							<div class="latest-photo" style="background-image: url(public/images/bloodbank/assets/uploads/news-10.jpg)"></div>
							<div class="latest-text">
								<h2>ABO Typing</h2>
								<ul>
									<li>Information type: <a href="https://hospitals.aku.edu/pakistan/medical-and-diagnostics/clinical-labs/laboratory-manual/Documents/ABO%20Typing.pdf">Commercial</a></li>
									<li>Date: 05-09-2017</li>
								</ul>
								<div class="latest-pra">
									<p>
										<p>ABO grouping is a test performed to determine an individual's blood type ...									</p>
									<a href="{{route('an')}}">Read more</a>
								</div>
							</div>
						</div>
												<div class="latest-item">
							<div class="latest-photo" style="background-image: url(public/images/bloodbank/assets/uploads/news-9.jpg)"></div>
							<div class="latest-text">
								<h2>Antibody Identification</h2>
								<ul>
									<li>Information type: <a href="https://hospitals.aku.edu/pakistan/medical-and-diagnostics/clinical-labs/laboratory-manual/Documents/Antibody%20Identification.pdf">Commercial</a></li>
									<li>Date: 05-09-2017</li>
								</ul>
								<div class="latest-pra">
									<p>
										<p>An antibody identification procedure is performed to identify unexpected antibodies detected in the antibody screen. ...									</p>
									<a href="{{route('anb')}}">Read more</a>
								</div>
							</div>
						</div>
												<div class="latest-item">
							<div class="latest-photo" style="background-image: url(public/images/bloodbank/assets/uploads/news-8.jpg)"></div>
							<div class="latest-text">
								<h2>Antibody Titer</h2>
								<ul>
									<li>Information type: <a href="https://hospitals.aku.edu/pakistan/medical-and-diagnostics/clinical-labs/laboratory-manual/Documents/Antibody%20Titer.pdf">Residential</a></li>
									<li>Date: 05-09-2017</li>
								</ul>
								<div class="latest-pra">
									<p>
										<p>The antibody titer is a test that detects the presence and measures the amount of antibodies within a person’s blood...									</p>
									<a href="{{route('atype')}}">Read more</a>
								</div>
							</div>
						</div>
												<div class="latest-item">
							<div class="latest-photo" style="background-image: url(public/images/bloodbank/assets/uploads/news-7.jpg)"></div>
							<div class="latest-text">
								<h2>Coldagglutinin Titer</h2>
								<ul>
									<li>Information type: <a href="https://hospitals.aku.edu/pakistan/medical-and-diagnostics/clinical-labs/laboratory-manual/Documents/Coldagglutinin%20Titer.pdf">Residential</a></li>
									<li>Date: 05-09-2017</li>
								</ul>
								<div class="latest-pra">
									<p>
										<p>The result of a cold agglutinin test is typically reported as a titer, such as 1:64 or 1:512...									</p>
									<a href="{{route('co')}}">Read more</a>
								</div>
							</div>
						</div>
												<div class="latest-item">
							<div class="latest-photo" style="background-image: url(public/images/bloodbank/assets/uploads/news-6.jpg)"></div>
							<div class="latest-text">
								<h2>Paroxysmal Nocturnal Hemoglobinuria</h2>
								<ul>
									<li>Information type: <a href="https://hospitals.aku.edu/pakistan/medical-and-diagnostics/clinical-labs/laboratory-manual/Documents/Paroxysmal%20Nocturnal%20Hemoglobinuria.pdf">Tools and Equipment</a></li>
									<li>Date: 05-09-2017</li>
								</ul>
								<div class="latest-pra">
									<p>
										<p>Paroxysmal nocturnal hemoglobinuria (PNH) is a rare acquired, life-threatening disease of the blood..									</p>
									<a href="{{route('di')}}">Read more</a>
								</div>
							</div>
						</div>
												<div class="latest-item">
							<div class="latest-photo" style="background-image: url(public/images/bloodbank/assets/uploads/news-5.jpg)"></div>
							<div class="latest-text">
								<h2>Direct Coombs Test</h2>
								<ul>
									<li>Information type: <a href="https://hospitals.aku.edu/pakistan/medical-and-diagnostics/clinical-labs/laboratory-manual/Documents/Direct%20Coombs%20Test.pdf">Tools and Equipment</a></li>
									<li>Date: 05-09-2017</li>
								</ul>
								<div class="latest-pra">
									<p>
										<p>Antibodies are a part of your immune system. They fight germs, but sometimes they make a mistake and target your body's healthy cells instead...									</p>
									<a href="pa">Read more</a>
								</div>
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
							Get necessary information regarding blood donation from here.						</p>
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
															<li><a href="https://www.nbcnews.com/health/coronavirus">Top stories on the coronavirus that has killed hundreds of thousands in a global pandemic</a></li>
																<li><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public">Coronavirus disease (COVID-19) advice for the public</a></li>
																
														</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="footer-item footer-service">
						<h2>Popular News</h2>
						<ul class="fmain">
															<li><a href="https://www.who.int/teams/blueprint">Emergency</a></li>
																<li><a href="https://www.newscientist.com/article/2237475-covid-19-news-death-in-severe-cases-are-70-times-higher-in-over-80s/">Covid-19 news</a></li>
																
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
					<p>Copyright © 2019 Siddahant Kumar. All Rights Reserved.</p>
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


<!-- Mirrored from demosly.com/xicia/bloodbank/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 17:29:03 GMT -->
</html>	