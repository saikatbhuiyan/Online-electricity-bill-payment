# PHP
Online electricity bill payment method 

See the code and create database table for register and admin.


include("database/db_conection.php");
if(isset($_POST['register']))
{
    $user_name=$_POST['name'];
	$user_email=$_POST['email'];
	$meter_no= $_POST['meter'];
    $nid_no= $_POST["nid"];
    $user_pass=$_POST['pass'];
	
}
