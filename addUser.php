<?php
$userId = strval($_POST['userId']);
$userName = strval($_POST['userName']);
$userEmail = strval($_POST['userEmail']);
$userPassword = strval($_POST['userPassword']);
$userGroupNum = strval($_POST['userGroupNum']);
$userRoom = strval($_POST['userRoomId']);
include ("db_connect.php");

$sql="INSERT INTO UserAccount (UserID, uname, Email, Password, GroupNo ,RoomID) VALUES ('$userId', '$userName', '$userEmail', '$userPassword', '$userGroupNum','$userRoom')";
//$sql="INSERT INTO 'values' ('username', 'password') VALUES ('$userName', '$userPassword')";
//echo  $sql;
mysqli_query($link,$sql);

//$clientIP = $_SERVER['HTTP_CLIENT_IP'];
$clientIP = $_SERVER['REMOTE_ADDR'];
header("Location:http://192.168.0.100/User_Account.html");

mysqli_close($link);
?>
