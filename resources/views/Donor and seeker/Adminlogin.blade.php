<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!--<link rel="stylesheet" type="text/css" href="Admin.css">
	<script type="text/javascript" src="Login.js"></script>-->
   <style type="text/css">
      
.header {
   width: 40%;
   margin: auto;
   color: white;
   margin-top: auto;
   text-align: center;
   padding: 20px;
}
#SETFORM{
   width: 65%;
}
form {
   width: 45%;
   margin: 40px auto;
   margin-top: 0px;
   background-size: cover;
   padding: 20px;
   background:lightblue url(public/images/new.png);

   
   border-radius: 0px 0px 10px 10px;
   border:2.5px solid white;
}
.glyphicon-registration-mark{
   
   color: blue;
}
a{
   color: white;
   text-decoration: underline;
}
.glyphicon{
      float: right;
      font-size: 50px;
}
.inner-addon { 
    position: relative; 
}

.inner-addon .glyphicon {
  position: absolute;
  padding: 35px;
}

.right-addon .glyphicon { 
                         font-size: 20px;
                          right: 0px;
                           position: center;
                           }


#color{
   color: white;
   margin: auto;

}
form:hover {
            background-color: green;
}
body{
   background:lightblue url(public/images/new.png);
   background-size: cover;
   background-position: center;
}
#login{
   letter-spacing: 3px;
}
#email,#password{
   height: 50px;
   padding: auto;
   border-radius: 5px;
   word-spacing: 0px;
}
.btn {
   padding: normal;
   font-size: 15px;
   margin: 10px;
}
#abc{
   margin-bottom: 20px;
   color: white;
}

/*New Account     */
/* Full-width input fields */
input[type=email], input[type=password] {
  
  padding: 10px;
  width: 100%;
  margin:auto;
}
h1,p{
   color: white;
}
/* Set a style for the submit/register button */
.registerbtn {
  background-color: #4CAF50;
  margin: 10px;
  cursor: pointer;
}

/* Add a blue text color to links */
a [href="AdminLogin.html"] {
  color: dodgerblue;
}

/* Set center the text of the "sign in" section */
.signin {

  text-align: center;
}
.sin{
   color: red;
}

   </style>
</head>
<body>

@if (session('successMsg'))
<div class="alert alert-success" role="alert">
  {{session('successMsg')}}
</div>
@endif
   <div class="header">
      
   	  <h1><span>Admin</span> Login</h1>
        
   </div>
<!--    form-group
   form-control -->
   <form action="#" method="GET" >
      
   	  <div id="abc" class="form-group">
   	  	  <h3>Sign In<span class="glyphicon glyphicon-user"></span></h3>
   	  	  <p>Fill in the Form below to get instant access</p>
   	  </div>
   	  <div class="form-group"id="SETFORM">
   	   <div class="inner-addon right-addon">
   	  	<label for="email"></label>
	    <i class="glyphicon glyphicon-user"></i>
	    <input type="email" id="email" class="form-control" placeholder="User Name" required>
	   </div>
	    <div class="inner-addon right-addon">
	    	<label for="password"></label>
	     <i class="glyphicon glyphicon-lock"></i>
	     <input id="password" type="password" class="form-control" placeholder="Password" minlength="8" required >
	    </div></div>
  	    <button class="btn btn-danger btn-lg"onclick="validate()">Submit</button><br>
<!--    	  <p id="check">Email is :aliakbarlundbaloch@gmail.com</p>
   	  <p id="check">PassWord is :Aliakbar</p> -->
   	  <a href="reset.html">Click Here To Reset Your Password</a><br>
   	  <a href="newAccount.html">Click Here To Create a New Admin Account</a>
   </form>
</body>
</html>
