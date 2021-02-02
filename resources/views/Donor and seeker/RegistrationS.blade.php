
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create New Account!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Create_Account_Style_Sheet.css">
    <style>
        input[type=text]{
	width:60%;
	border-style:solid;
	border-color:white;
	border-radius:4px;
	margin:8px;
	padding:8px;
	box-sizing:border-box;
	width:300px;
	}
	.Box{
	color:white;
	position:absolute;
	top:60%;
	left:50%;
	width:330px;
	height:386px;
	transform:translate(-50%,-50%);
    background-image:url(public/images/new.png);
	border-style:ridge;
	border-color:white;
	padding-left:12px;
	padding-bottom:280px;
	border-radius:15px;
	font-size:16px;
	box-sizing-left:200px;
	}
	body{
	background-image:url("public/images/new.png");
	background-size:cover;
	}
	.cust{
	position:absolute;
	color:black;
	margin-left:280px;
	margin-top:10px;
	}
	.cust1{
	position:absolute;
	color:black;
	margin-left:270px;
	margin-top:10px;
	}
		a:link{
    color:blue;
    }
    a:visited{
    color:white;
    }
    a:hover{
    color:red;
    }

        </style>
    </head>
    <body>
    @if($errors->any()) <!--this is what we define for error if our input field contain any error-->
    @foreach($errors->all() as $error)

    <div class="alert alert-danger" role="alert">
    {{ $error}}
    </div>
    @endforeach
    @endif

    <!-- wesay to yhe page sahi perform kr rha hai if we remove box from below and then registartion not perform properly -->
<form class="text-center border border-light p-5" action="{{ route('storeS') }}" method="POST">
    {{ csrf_field()}}

    <div  class="Box">
	<h1>Register Your Account</h1>
    <p>Create an account to register in our site.</p><br>
    
	<i class="fa fa-user fa-2x cust"></i>
	<input type="text" id="username" placeholder="User Name" name="user_name" ><br>
	<i class="fa fa-lock fa-2x cust"></i>
	<input type="text" id="address" placeholder="Address" name="address" ><br>
	<i class="fa fa-lock fa-2x cust"></i>
	<input type="text" id="number" placeholder="Mobile Number" name="phone" ><br>
	<i class="fa fa-envelope fa-2x cust1"></i>
	<input type="text" id="email" placeholder="Email" name="email" ><br>
	<i class="fa fa-lock fa-2x cust"></i>
    <input type="text" id="createpassword" placeholder="Create a password" name="password" ><br>
	<i class="fa fa-lock fa-2x cust"></i>
	<input type="text" id="confirmepassword" placeholder="Confirm your password" name="newpassword" ><br><br>
    <fieldset style="width:285px; color:white; border-color:white;"> 
	<legend style="text-align:center; color:white; border-color:white; border-style:groove;">Related Information</legend><br>
	<input type="date" name="day">
	<input type="radio" name="choose" value="">Male
	<input type="radio" name="choose" value="">Female<br><br>
	<form action="" method="">
     <select>
	<option  name = " blood" value="bloodgroup">Blood Group</option>
	<option  value="A+">A+</option>
	<option  value="A-">A-</option>
	<option  value="B+">B+</option>
	<option  value="B-">B-</option>
	<option  value="AB+">AB+</option>
	<option  value="AB-">AB-</option>
	<option  value="O+">O+</option>
	<option  value="O-">O-</option>
	</select>  
	&nbsp &nbsp Age:&nbsp <input type="number" name="age" min="20" max="45">
	</fieldset>
	<br><input type="checkbox">&nbsp I Agree To The Terms Of Use.<br><br>
	<input type="submit" value="Submit"><br><br>
	
	</div>
	<script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</form>
    </body>
    </html>