<?php
session_start();

?>



<html>
<head >
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/topuhit/Font-Bangla@1.0.3/1.0.0/font-bangla.css"> 
	
	    <title>Online Electricity Bill Payment | User Login</title>
</head>
<style>
    


input[type="email"], [type="password"]{
	
	
    border-radius:20px;
    padding: 10px 15px;
    margin: 8px 0;
	line-height: 2.5;
    
	
}

</style>

<body class="bd">

 
<div  class="title"> 
    <h1><a href="index.php"><center>Online Electricity Bill Payment </center></a> </h1>
	</div>
 <div class="col_12 ">       
	
	
<a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a><
<a href="registration.php"><i class="glyphicon glyphicon-registration-mark"></i> Register</a>
<a href="login.php"><i class="glyphicon glyphicon-log-in"></i> Login</a>
<a href="payment.php"><i class="fa fa-credit-card"></i> Payment</a>
<a href="admin_login.php"><i class="glyphicon glyphicon-user"></i> Admin</a>
	
 
</div>


<div class="acon">
   
                 <center>
    <div class="ti">
        <h2 class="atitle">Sign In</h2>
            </div>
            <div class="model">
            <form role="form" class="md any" method="post" action="login.php">        
            <div class="form-group"  >
            <input class="form-control" placeholder="E-mail" name="email" type="email" required>
            </div>
            <div class="form-group">
            <input class="form-control" placeholder="Password" name="pass" type="password" required>
            </div>
            <label>
             <input type="checkbox" checked="checked" name="remember"> Remember me
             </label>                
             <input class="btn" type="submit" value="login" name="login" >
			 
			 <div class="">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="registration.php" class="">
							Register now
						</a>
					</div>
             </form>                                 
			 </div>
			  </center>
                          
                                     
</div>           
</body>           
</html>

<?php

include("database/db_conection.php");

if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];

    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('welcome.php','_self')</script>";

        $_SESSION['email']=$user_email;

    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>