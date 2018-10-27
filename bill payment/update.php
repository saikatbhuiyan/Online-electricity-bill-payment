<?php
include("database/db_conection.php");
if(isset($_POST['update']))
{
    $user_id = $_POST['id'];
    $user_name=$_POST['user_name'];
	$user_email=$_POST['user_email'];
	$meter_no= $_POST['meter_no'];
    $nid_no= $_POST["nid_no"];
    $user_pass=$_POST['user_pass'];



$result = mysqli_query($dbcon, "UPDATE users SET user_name='$user_name', user_email='$user_email', nid_no='$nid_no', meter_no='$meter_no', user_pass='$user_pass' WHERE id=$user_id");

header("Location: view_users.php");
}

?>
<?php

$user_id = $_GET['id'];

$result = mysqli_query($dbcon, "SELECT * FROM users WHERE id=$user_id");
while($res = mysqli_fetch_array($result))
{
$user_id = $res['id'];
$user_name = $res['user_name'];
$user_email = $res['user_email'];
$meter_no = $res['meter_no'];
$nid_no = $res['nid_no'];
$user_pass = $res['user_pass'];
}
?>

<html>
<head>
<title>Online Electricity Bill Payment | Update Data</title>
</head>
<style>

.up{
		position:absolute;
		top:10%;
		left:18%;
		padding-left:10%;
		padding-right:;
        height:float;
        width:70%;
		background-color: #;
		border: 8px solid transparent;
        border-radius: 6px;
		font-size:30px;
	}
	
body{
     height: float;
     width: float;
     background: url('.jpg');
     background-color:#d8f7de;
	 background-size:cover;
	 font-size:30px;
	}	
	
input[ type="text"],[type="number"],[type="email"],[type="password"]{
	width:150%;
    border-radius:px;
    padding: 10px 15px;
    margin: 8px 0;
	line-height: 2.0;
	font-size:15px;
}


</style>

<body class="php">
<div class="up">
<a href="view_users.php">Back</a>
<br/><br/>
<form class="upd" name="form1" method="post" action="update.php">
<table >
<tr>
<td>User Name</td>
<td><input type="text" name="user_name" value="<?php echo $user_name; ?>"></td>
</tr>
<tr>
<td>User Email</td>
<td><input type="text" name="user_email" value="<?php echo $user_email; ?>"></td>
</tr>
<tr>
<td>Meter No</td>
<td><input type="number" name="meter_no" value="<?php echo $meter_no; ?>"></td>
</tr>
<tr>
<td>NID No</td>
<td><input type="number" name="nid_no" value="<?php echo $nid_no; ?>"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="user_pass" value="<?php echo $user_pass; ?>"></td>
</tr>

<tr>
<td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
<td><input type="submit" name="update" value="Update Data"></td>
</tr>
</table>
</form>
</div>
</body>
</html>
