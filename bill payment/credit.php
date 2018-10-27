<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/topuhit/Font-Bangla@1.0.3/1.0.0/font-bangla.css"> 
	

	<title>Online Electricity Bill Payment | Register</title>
<style>


.pay{
	width:45%;
	height:70%;
	margin-top:170px;
	position:fixed;
	left:10%;
	padding-left:12%;
	background-color: #ccc;
	border: 4px solid transparent;
    border-radius: 8px;
}

input[type="text"], [type="number"] {
  width:45%;
  height:8px;
  margin-bottom:5px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 2px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}


.btn {
  background-color: #4CAF50;
  margin: 10px 0;
  border:none ;
  width:18%;
  border-radius: 3px;
  font-size: 19px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
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
		
</style>
</head>
<body>


<h1><center>Online Electricity Bill Payment </center></h1>   
     
           <form class="pay"> 
          <div  class="col-50">
            <h2>Payment</h2>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
			
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="">
            <label for="ccnum">Credit card number</label>
            <input type="number" id="ccnum" name="cardnumber" placeholder="">
            <label for="expmonth">Exp Month</label>
            <input type="number" id="expmonth" name="expmonth" placeholder="">
            
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="">
              </div>
            </label>
        <input type="submit" value="Submit" class="btn">
		<input type="submit" value="Reset" class="btn">
		</div>
      </form>
     
</body>
</html>
