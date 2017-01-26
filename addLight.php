<?php
$lightId = strval($_POST['lightId']);
$lightLocationX = strval($_POST['lightLocationX']);
$lightLocationY = strval($_POST['lightLocationY']);
$lightGroupNum = strval($_POST['lightGroupNum']);
$lightRoomId = strval($_POST['lightRoomId']);

include ("db_connect.php");

$sql="INSERT INTO LightProfileObject (LightId, LocationX, LocationY, GroupNo, RoomID) VALUES ('$lightId', '$lightLocationX', '$lightLocationY', '$lightGroupNum', '$lightRoomId')";
//$sql="INSERT INTO 'values' ('username', 'password') VALUES ('$userName', '$userPassword')";
//echo  $sql;
mysqli_query($link,$sql);

//header("Location:Identity_and_Binding.html");
$clientIP = $_SERVER['REMOTE_ADDR'];
header("Location:http://192.168.0.100/Identity_and_Binding.html");

mysqli_close($link);
?>



