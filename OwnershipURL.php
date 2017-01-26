<?php

include ('db_connect.php');
$lightID = strval($_POST['lightID']);
$URL = strval($_POST['ownershipURL']);
  

$sql="UPDATE LightProfileObject SET OwnershipPriority='$URL' WHERE LightID='$lightID' "; 

//$sql="SELECT * FROM TEMPLog WHERE min = '".$q."'";
mysqli_query($link,$sql);

$sql="SELECT BrokerIP FROM Rooms WHERE RoomID='Cloud' "; 
$result = mysqli_query($link,$sql);
	while($row = mysqli_fetch_assoc($result))
	{
		header("Location:http://$row[BrokerIP]/Ownership_Priority.html");
	}

//echo $result;
//echo "<p> 11 </p>";
mysqli_close($link);
?>