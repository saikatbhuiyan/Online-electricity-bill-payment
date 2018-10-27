
<html>
<head>
<title> Online Electricity Bill Payment | Add Data</title>
</head>
<style>

body{
     height: float;
     width: float;
     width: float;
     background: url('.jpg');
     background-repeat:no-repeat;
     background-color:#63ed63;
	 background-size:cover;
  
	}	</style>

<body class ="php">


<?php

include("database/db_conection.php");

if(isset($_POST['Submit'])) {
    
    $user_name=$_POST['name'];
	$user_email=$_POST['email'];
	$meter_no= $_POST['meter'];
    $nid_no= $_POST["nid_no"];
    $user_pass=$_POST['user_pass'];
	

    $check_name_query="select * from users WHERE user_name='$user_name'";
    $check_email_query="select * from users WHERE user_email='$user_email'";
	$check_meter_no_query="select * from users WHERE meter_no='$meter_no'";
	$check_nid_no_query="select * from users WHERE nid_no='$nid_no'";
	
	
	$run_query=mysqli_query($dbcon, $check_name_query);
	
    $run_query2=mysqli_query($dbcon, $check_email_query);
	$run_query3=mysqli_query($dbcon, $check_meter_no_query);
	$run_query4=mysqli_query($dbcon, $check_nid_no_query);
	
	 if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Name $user_name is already exist in  database, Please try another one!')</script>";
exit();
    }

    if(mysqli_num_rows($run_query2)>0)
    {
echo "<script>alert('Email $user_email is already exist in  database, Please try another one!')</script>";
exit();
    }
	
	 if(mysqli_num_rows($run_query3)>0)
    {
echo "<script>alert('Meter No $meter_no is already exist in our database, Please try another one!')</script>";
exit();
    }
	
	 if(mysqli_num_rows($run_query4)>0)
    {
echo "<script>alert('NID No $nid_no is already exist in our database, Please try another one!')</script>";
exit();
    }
	
	echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
  
$result = mysqli_query($dbcon, "INSERT INTO users(user_name, user_email, user_pass, meter_no, nid_no) VALUE ('$user_name','$user_email',  '$user_pass', '$meter_no', '$nid_no')");

echo "<font color='green'>Data added successfully.";
echo "<br/><a href='view_users.php'>View Result</a>";

}

?>
</body>
</html>