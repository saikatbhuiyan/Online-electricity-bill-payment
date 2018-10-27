
<html>
<head lang="en">
    <meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/topuhit/Font-Bangla@1.0.3/1.0.0/font-bangla.css"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
    <title>Online Electricity Bill Payment | Admin Login</title>
</head>
<style>
    

input[ type="text"],[type="password"]{
	
	border-radius:20px;
    padding: 10px 15px;
    margin: 8px 0;
	line-height: 2.5;
   
    
	
}



</style>

<body class="bd">



<div  class="title"> 
    <h1><a href="index.php"><center>Online Electricity Bill Payment </center></a> </h1>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <h2  class="atitle">Sign In</h2>
                </div>
                <div class="model">
                    <form role="form" class="md any" method="post" action="admin_login.php">
                        
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Name" name="admin_name" type="text" >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="admin_pass" type="password" value="">
                            </div>
							
							 <label>
                             <input type="checkbox" checked="checked" name="remember"> Remember me
                              </label>
                           <input class="btn " type="submit" value="login" name="admin_login" >
            </form>
			</center>
			
    </div>
</div>


</body>

</html>

<?php

include("database/db_conection.php");

if(isset($_POST['admin_login']))
{
    $admin_name=$_POST['admin_name'];
    $admin_pass=$_POST['admin_pass'];

    $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";

    $run_query=mysqli_query($dbcon,$admin_query);

    if(mysqli_num_rows($run_query)>0)
    {

        echo "<script>window.open('view_users.php','_self')</script>";
    }
    else {echo"<script>alert('Admin Details are incorrect..!')</script>";}

}

?>