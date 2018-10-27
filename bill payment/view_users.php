
<?php

include("database/db_conection.php");

$result = mysqli_query($dbcon, "select * from users");
 
 
?>
<html>
<head>
   
<title>Online Electricity Bill Payment | View Data</title>
</head>
<style>

.view{
		margin-left:110px;
		padding-left:10px;
		padding-right:10px;
        height:float;
        width:80%;
		background-color: ;
		border: 8px solid transparent;
        border-radius: 6px;
	}
	
body{
     height: float;
     width: float;
     width: float;
     background: url('.jpg');
     background-repeat:no-repeat;
     background-color: #33b233;
	 background-size:cover;
  
	}	
	
#bn{    width:60px;
        height:20px;
        background-color:#ffffff;
	    position: absolute;
		left:90%;
		top:30px;
		border:4px solid transparent;
        border-radius:4px;
	}

h1{
	text-align:center;
	color:#000;
	font-size:50px;
}

.sp{
	color:#fff;
}

table, td, th {
    border: 1px solid black;
}

tr{
	background-color:#c2f5cc;
	font-size:20px;
	border: 1px solid black;
    border-collapse: collapse;
}
table{
	width:100%;
	border: 1px solid black;
    border-collapse: collapse;
}

th {
    text-align: left;
}

th, td {
    padding: 5px;
}


	
</style>

<body class ="php">
<div>
        <h1><span class="sp">Admin</span> Panel</h1>
</div>
<div class ="view">
<center>
<h2><a href="add.html">Insert New Data</a><br/><br/><h2>
</center>
<table >
<tr >

            <th>User Id</th>
            <th>User Name</th>
			<th>User Email</th>
			<th>Meter No</th>
			<th>NID No</th>
			<th>User Pass</th>
			<th>Update Delete</th>
			
			
            
</tr>

<?php

while($res = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>".$res['id']."</td>";
echo "<td>".$res['user_name']."</td>";
echo "<td>".$res['user_email']."</td>";
echo "<td>".$res['meter_no']."</td>";
echo "<td>".$res['nid_no']."</td>";
echo "<td>".$res['user_pass']."</td>";

echo "<td><a href=\"update.php?id=$res[id]\">Update</a>
 
<a href=\"delete.php?id=$res[id]\" >Delete</a></td>";
}
?>

</table>
</div>
<p id="bn">
        <a href="logout.php" class="btn ">
		<i class="glyphicon glyphicon-log-out"></i>
          Log out
        </a>
      </p> 

</body>
</html>