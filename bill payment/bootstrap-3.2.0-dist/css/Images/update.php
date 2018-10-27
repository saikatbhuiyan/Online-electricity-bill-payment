<?php

 include("database/db_conection.php");
 if(isset($_POST['update']))
{
    $user_id = $_POST['id'];
    $user_name=$_POST['name'];
	$user_email=$_POST['email'];
	$meter_no= $_POST('meter');
    $nid_no= $_POST("nid");
    $user_pass=$_POST['pass'];
	
// checking empty fields
if(empty($user_name) || empty($user_email) || empty($meter_no) || empty($nid_no) || empty($user_pass)) {
if(empty($user_name)) {
echo "<font color='red'>Name field is empty.</font><br/>";
}
if(empty($user_email)) {
echo "<font color='red'>Email field is empty.</font><br/>";
}
if(empty($meter_no)) {
echo "<font color='red'>Meter No field is empty.</font><br/>";
}
if(empty($nid_no)) {
echo "<font color='red'>NID field is empty.</font><br/>";
}
if(empty($user_pass)) {
echo "<font color='red'>Password field is empty.</font><br/>";
}
} else {
//updating the table
$result = mysqli_query(mysqli_select_db, "UPDATE users SET user_name='$user_name',
 user_email='$user_email', meter_no='$meter_no', nid_no='$nid_no', user_pass='$user_pass'   WHERE id=$user_id");
//redirectig to the display page. In our case, it is index.php
header("Location: view_users.php");
 }
}
?>

<?php
//getting id from url
$user_id = $_GET['id'];
//selecting data associated with this particular id
$result = mysqli_query(mysqli_select_db, "SELECT * FROM users WHERE id=$user_id");
while($row = mysqli_fetch_array($result))
{
            $user_id=$row[0];
            $user_name=$row[1];
            $user_email=$row[2];
			$meter_no=$row[3];
            $nid_no=$row[4];
            $user_pass=$row[5];
}
?>
<html>
<head>
<title>Edit Data</title>
</head>
<body>
<a href="view_users.php">Home</a>
<br/><br/>
<form name="form1" method="post" action="update.php">
<table border="0">
<tr>
<td>User Name</td>
<td><input type="text" name="user_name" value="<?php echo $user_name;?>"></td>
</tr>
<tr>
<td>User Email</td>
<td><input type="text" name="user_email" value="<?php echo $user_email;?>"
></td>
</tr>
<tr>
<td>Meter No</td>
<td><input type="number" name="meter_no" value="<?php echo $meter_no
;?>"></td>
</tr>
<tr>
<td>NID No</td>
<td><input type="number" name="nid_no" value="<?php echo $nid_no
;?>"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="user_pass" value="<?php echo $user_pass
;?>"></td>
</tr>

<tr>
<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
<td><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>