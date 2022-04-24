<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Bootstrap Simple Registration Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

<style>
	body 
    {
		color: #fff;
		background:url('login.png');
		font-family: 'Roboto', sans-serif;
        background-size: 1540px 754px;
        
	}

    .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}

	.form-control:focus{
		border-color:#F38BA0;
	}

    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
       
	}
	.signup-form h2{
		color: #636363;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}	
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
 
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
        
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color:#F38BA0;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}  
</style>
</head>
<body>
<div class="signup-form">
    <form id ="sign_up" action="<?php $_PHP_SELF ?>" method="post">
		<h2>Sign Up</h2>  
		<p class="hint-text">Create your account</p>
        <div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" ></div>
				<div class="col-xs-6"><input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" id="pass" name="password" placeholder="Password">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" id="re_pass" name="confirm_password" placeholder="Confirm Password">
        </div>
              <div class="form-group">
        	<input type="Phone number" id="phone_number" class="form-control" name="number" placeholder="Phone number">
        </div>
		<label id="date_of_birth">Date of Birth:<br />
			<select class="first" name="date_of_birth:day" tabindex="7">
				<option value="">
				<!-- -->
				</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
	
			</select>
		</label><br>
		    <br>    
			<input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female
<br><br>
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" > I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <input type="submit" name="submit" class="btn btn-success btn-lg btn-block">Register Now
</div>
</form>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
if ($_REQUEST["first_name"] || $_REQUEST["last_name"] || $_REQUEST["email"] || $_REQUEST["password"]|| $_REQUEST["confirm_password"]||  $_REQUEST["number"]) {
if (preg_match("/[^A-Za-z'-]/", $_REQUEST['first_name'])) {
	echo '<script>alert("invalid name!!name should be in Alphabet(s)")</script>';
}

if($_REQUEST['password']!=$_REQUEST["confirm_password"]&&$_REQUEST['password']!="" && $_REQUEST["confirm_password"]!="" ){
	echo '<script>alert("Password not matching!")</script>';
}
if($_REQUEST['first_name']=="")
echo '<script>alert("Enter first name!")</script>';
}
if($_REQUEST['last_name']==""){
echo '<script>alert("Enter last name!")</script>';
}
if (preg_match("/[^0-9'-]/", $_REQUEST['number'])){
	echo '<script>alert("invalid number!!")</script>';
}
exit();
}
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<script src="sign_up.js"></script>
</body>
</html>