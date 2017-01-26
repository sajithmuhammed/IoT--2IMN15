<?php

include ('db_connect.php');

//$sql = “SELECT * FROM datas”;
$result = mysqli_query($con,” SELECT * FROM datas ”);

while($row = mysqli_fetch_assoc($result))
	{
		$myArray[] = $row;
	}
	echo json_encode($myArray);





//echo $result;
//echo "<p> 11 </p>";
mysqli_close($con);
?>