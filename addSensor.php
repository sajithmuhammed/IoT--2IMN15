<?php
$sensorId = strval($_POST['sensorId']);
$sensorLocationX = strval($_POST['sensorLocationX']);
$sensorLocationY = strval($_POST['sensorLocationY']);
$sensorGroupNum = strval($_POST['sensorGroupNum']);
$sensorRoomId = strval($_POST['sensorRoomId']);

include ("db_connect.php");

$sql="INSERT INTO SensorProfileObject (SensorId, LocationX, LocationY, GroupNo, RoomID) VALUES ('$sensorId', '$sensorLocationX', '$sensorLocationY', '$sensorGroupNum', '$sensorRoomId')";
//$sql="INSERT INTO 'values' ('username', 'password') VALUES ('$userName', '$userPassword')";
//echo  $sql;
mysqli_query($link,$sql);

$clientIP = $_SERVER['REMOTE_ADDR'];
header("Location:http://192.168.0.100/Identity_and_Binding.html");

mysqli_close($link);
?>