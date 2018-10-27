<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: login.php");
}
?>

<html>
<head lang="en">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/topuhit/Font-Bangla@1.0.3/1.0.0/font-bangla.css"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	
    <title> Online Electricity Bill Payment | Login</title>
</head>
<style>

.bill {
  margin-bottom:20px;
  padding:20px;
  font-size:22px;
}

body{
	background-color:#d8f7de;
	background-size: cover;
}
h1{
		position:fixed;
		right:.01%;
		top:-1%;
		width:100%;
		height:16%;
		padding-top:30px;
		text-decoration:underline;
		text-decoration-color:#33cc33;
		font-size:40px;
		margin: auto;
		background-color: #99ff99;
		background-size:cover;
		
		}

#reset{
	font-size:18px;
	width:10%;
	line-height:1.8;
}

</style>

<body>

<h1><center>Online Electricity Bill Payment </center></h1>

<div class="pay"> 
<center >
<h2 class="card"> Your electricity bill: </h2>


<form action="" method="post">

 Unit Price  &nbsp <input id="unit" type="number" min="5" max="5" value="5" step="0.1" onchange="computeUnit()"> &#2547 <br/> <br/>
 Total Unit  <input id="totalunit" type="number" min="0" max="10000"   step="0.1" onchange="computeUnit()"> <br/> <br/>
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
</form>
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



<p class="b">
        <a href="logout.php" class="btn1">
          Log out
        </a>
      </p> 
</body>

</html>