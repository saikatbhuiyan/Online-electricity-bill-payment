<?php

include("database/db_conection.php");
$user_id = $_GET['id'];
//deleting the row from table
$result = mysqli_query($dbcon, "DELETE FROM users WHERE id=$user_id");
//redirecting to the display page (index.php in our case)
header("Location: view_users.php");

?>