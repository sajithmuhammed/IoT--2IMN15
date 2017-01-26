<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
	<title>Internet Of Things - Group 12</title>

	<!-- Google Fonts -->
	<!--<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>-->

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	

	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
        <script src="js/login.js"></script>
</head>

<body>
    <div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Internet Of <span></span>Things</span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<label for="username">Username</label>
			<br/>
    <form action="login.php" method="GET">
        
     <input type="text" name="username" value=""/>
     <input type="text" name="password" value=""/>
		<input type="submit" value="Go" />
</form>
</body>

</html>
