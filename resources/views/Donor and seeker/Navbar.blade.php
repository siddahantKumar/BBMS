<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="BloodBank.css">
	  
    <style>
        .forms{
	width: 100%;
	margin-top: auto;
	padding: 40px;
	margin-left: 8%;
}
#CountryName,#CityName{
	height: 40px;
	width: 20%;
	margin:5px;
}
.header{
	margin-top: 150px; 
	text-align: center;
	color: white;
	text-align: bold;
}
.groups{
	color:gray;
	height:40px; 
	width:20%;
	margin:5px;
}
 .uper-navbar{
 	background-color:rgb(227,27,35);
 	font-weight: bold;
 	font-size: 1.2em;
 }
.lower-navbar{
	background-color: white;
}
.uper-navbar,.lower-navbar{
	margin: auto;
}
#uper-color{
	color: white;
    
}
#lower-color{
	color: rgb(227,27,35);
	font-size: 1.3em;
	font-weight: bold;
}
#lower-color span{
	font-weight: normal;
}
/*    background-position: right bottom, left top;
      background-repeat: no-repeat, repeat;*/
.container{
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100vh;
	animation: animate 16s ease-in-out infinite;
}

@keyframes animate{
	
	
	50%{
		background-image:url(public/images/a3.jpg); 
	}
	75%{
		background-image:url(public/images/a4.jpg); 
	}
}

.btn-danger{
	font-weight: bold;
	font-size: 100%;
	height: 40px;
	width: 20%;
	margin:5px;
}
    </style>
</head>
<body>
	<nav class="navbar navbar-default uper-navbar" roll="navigation" >
		<div class="container" id="uper-navbar-text">
		<div class="navbar-header">
			<a id="uper-color" href="#" class="navbar-brand"><span class="glyphicon glyphicon-earphone"></span> 03103726561</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a id="uper-color" href="#"><span class="glyphicon glyphicon-envelope"></span> k173871@nu.edu.pk</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<select class="uper-color" required>
                <!--<li><a id="uper-color" href="#"><span class="glyphicon glyphicon-log-in"></span></a></li>-->
	  	<option id="uper-color" >Register</option>
	  	<option href="#">Register As Donor</option>
	  	<option href="#">Register As Seeker</option>
	  </select>
		</ul>
		</div>
	</nav>
   <nav class="navbar navbar-default lower-navbar" roll="navigation">
   	<div class="container">
   	  <div class="navbar-header">
   	  	<a id="lower-color" href="#" class="navbar-brand"><strong>Blood</strong><span>Bank</span></a>
   	  </div>
   	  <ul class="nav navbar-nav navbar-right">
   	  	<li><a id="lower-color" href="#">Home</a></li>
   	  	<li><a id="lower-color" href="#">Donors</a></li>
   	  	<li><a id="lower-color" href="#">Agents</a></li>
   	  	<li><a id="lower-color" href="#">Pricing</a></li>
   	  	<li><a id="lower-color" href="#">Pages</a></li>
   	  	<li><a id="lower-color" href="#">Blog</a></li>
   	  	<li><a id="lower-color" href="#">Contact Us</a></li>
   	  </ul>
   	</div>
   </nav>
   <div class="header">
		<h1>SEARCH A DONOR IN YOUR AREA</h1>
	</div>

   <form action="#" method="GET" class="forms">
   	 
      <label for="CountryName"></label>
      <input id="CountryName" type="text" placeholder=" Country Name" required>
	  <label for="CityName"></label>
	  <input id="CityName" type="text" placeholder=" City Name " required>
	  <select class="groups" required>
	  	<option disabled selected hidden>Choose Blood Group</option>
	  	<option>A+</option>
	  	<option>A-</option>
	  	<option>B+</option>
	  	<option>B-</option>
	  	<option>AB+</option>
	  	<option>AB-</option>
	  	<option>O+</option>
	  	<option>O-</option>
	  </select>
  	  <button class="btn btn-danger btn-sm">Search Donor</button>
  </form>

</body>
</html>