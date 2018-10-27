
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/topuhit/Font-Bangla@1.0.3/1.0.0/font-bangla.css"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<title>Online Electricity Bill Payment | Register</title>
	
	
	
	
    
</head>
<style>
.rd{
	width:80%;
	padding-top: -10px;
}

input[ type="text"],[type="number"],[type="email"],[type="password"]{
	
    border-radius:20px;
    padding: 10px 15px;
    margin: 8px 0;
	line-height: 2.5;
	
}

.rbtn{
	width:63%;
	margin-top:-55px;
	border-radius:20px;
	padding-top: 0px;
	line-height: 2.5;
	background-color:#339933;
	text-color:#111;
}


.login-panel {
margin-top:170px;
}




</style>
<body  class="bd">

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
<div>
<center>
<div class="con">
    
        
            <div class="login-panel panel panel-success">
                <div class="rheading">
                    <h2 class="rtitle">Registration</h2>
                </div>
                <div class="panel-body">
                    <form role="form"  class="rd" method="post" action="registration.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="name" type="text" required>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="email" type="email" required>
                            </div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Meter No" name="meter" type="number" required>
							
							</div>
							<div class="form-group">
                                <input class="form-control" placeholder="NID No" name="nid" type="number" required>
							
							</div>
							<div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" required>
                            </div>
							
                            </div>
                            


                            <input class="rbtn " type="submit" value="Register" name="register" >

                        </fieldset>
                    
                    <center><b ><font size="4">Already registered ?</font></b> <br></b><a href="login.php"><font size="3">Login here</font></a></center>
					</form>
                </div>
    </div>
</div>
</center>
</div>
</body>

</html>

<?php

include("database/db_conection.php");
if(isset($_POST['register']))
{
    $user_name=$_POST['name'];
	$user_email=$_POST['email'];
	$meter_no= $_POST['meter'];
    $nid_no= $_POST["nid"];
    $user_pass=$_POST['pass'];
	


    $check_email_query="select * from users WHERE user_email='$user_email'";
	$check_meter_no_query="select * from users WHERE meter_no='$meter_no'";
	$check_nid_no_query="select * from users WHERE nid_no='$nid_no'";
	
    $run_query=mysqli_query($dbcon,$check_email_query, $check_meter_no_query, $check_nid_no_quer);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
exit();
    }
	
	 if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Meter No $meter_no is already exist in our database, Please try another one!')</script>";
exit();
    }
	
	 if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('NID No $nid_no is already exist in our database, Please try another one!')</script>";
exit();
    }

    $insert_user="insert into users (user_name, user_email, user_pass, meter_no, nid_no) VALUE ('$user_name','$user_email',  '$user_pass', '$meter_no', '$nid_no' )";
    if(mysqli_query($dbcon,$insert_user))
    {
        echo"<script>window.open('welcome.php','_self')</script>";
    }

}

?>