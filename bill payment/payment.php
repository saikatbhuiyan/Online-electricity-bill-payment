
<!DOCTYPE html>
<html>
<style>
.bill {
  margin-bottom:20px;
  padding:20px;
  font-size:22px;
}

.pay{
	
	position:fixed;
	background-color:#d8f7de;
	background-size: cover;
}

h2{
	color:#111;
	
}
h3{
	color:#111;
}


#reset{
	font-size:18px;
	width:20%;
	line-height:1.8;
}


</style>

<head>  
    <meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/topuhit/Font-Bangla@1.0.3/1.0.0/font-bangla.css"> 
	
	
	<title> Online Electricity Bill Payment | Bill Payment</title>
	
	
</head>
<body class="bd">
    <div id="contain" class="title"> 
    <h1><a href="index.php"><center>Online Electricity Bill Payment </center></a> </h1>
	</div>
	
	
	
	  
<div class="col_12 ">       
	
	
<a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a><
<a href="registration.php"><i class="glyphicon glyphicon-registration-mark"></i> Register</a>
<a href="login.php"><i class="glyphicon glyphicon-log-in"></i> Login</a>
<a href="payment.php"><i class="fa fa-credit-card"></i> Payment</a>
<a href="admin_login.php"><i class="glyphicon glyphicon-user"></i> Admin</a>
	
 
</div>
 
<div class="pay"> 
<center >

<h2 class="card"> Your electricity bill: </h2>
<form action="" method="post">
 Unit Price  &nbsp <input id="unit" type="number" min="0" max="50" value="0" step="0.1" onchange="computeUnit()"> &#2547 <br/> <br/>
 Total Unit  <input id="totalunit" type="number" min="0" max="100000" value="0" step="0.1" onchange="computeUnit()"> <br/> <br/>
 Late fee &#2547 <input id="latefee" type="number" value="0" step="1" onchange="computeUnit()">&#2547 </br> </br>
<h4> Total Cost &#2547: </h4><h2 id="payment">  </h2>
<script language="javascript" type="text/javascript">
function computeUnit(unit,totalunit,latefee){
var unit=parseFloat(document.getElementById("unit").value);
var totalunit=parseFloat(document.getElementById("totalunit").value);
var latefee=parseFloat(document.getElementById("latefee").value);

document.getElementById("payment").innerHTML = (unit*totalunit+latefee);
}
function visa(){
}
</script>
<button id="reset" onclick="reSet()" >Reset</button>



</center>


<div>
<center class="bill">
<h3 class="card"> Choose a payment method to complete your bill payment..... </h3>
 <a href="credit.php"><i class="fa fa-credit-card" style="color:blue;"></i> Credit card </a>
 <a href="bkash.php"><i class="fb-bkash-icon" style="color:red;"></i>Bkash</a>
 <a href="dbbl.php"><i class=" fb-dbbl" style="color:green;"></i> DBBL</a>
 
 </center>
 </div> 
</div>
</body>
</html>
 