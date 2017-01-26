<?php
$localIP = strval($_POST['localIP']);
include ("db_connect.php");

$sql= "UPDATE Rooms SET BrokerIP='$localIP' WHERE RoomID='Cloud' ";
//$sql="INSERT INTO 'values' ('username', 'password') VALUES ('$userName', '$userPassword')";

mysqli_query($link,$sql);
//echo("Location:http://$localIP/System_Execution.html");

header("Location:http://$localIP/System_Execution.html");

mysqli_close($link);
?>



