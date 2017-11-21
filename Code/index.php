<!DOCTYPE html>
<html>
<head>
	<title>Php Login / Register System Using Oops</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <center><h1>Login and Registration System usign Oops</h1></center> 
	<div id="login_container">
		<br>
		<center><h2>Login System</h2></center>
		<center><?php if(isset($_GET['err'])){ echo "Email or Password May be Wrong"; } ?></center>
		<br>
        <center>
        <form action="login.php" method="post">
		<input type="email" name="e" placeholder="Enter Email Id"><br><br>
		<input type="password" name="p" placeholder="Enter Password"><br><br>
		<input type="submit" name="login" value="Submit"><br><br>
	    </form>
	    </center>
	</div>
    <div id="register_container">
    	<br>
		<center><h2>Register System</h2></center>
		<form method="post" enctype="multipart/form-data" action="register.php">
		<center><?php if(isset($_GET['msg'])){ echo "Registration Successfully"; } ?></center>
		<br/>
        <center>
		<input type="text" name="n" placeholder="Enter Your Name"><br><br>
		<input type="email" name="e" placeholder="Enter Email Id"><br><br>
		<input type="number" name="nu" placeholder="Enter Number"><br><br>
		<input type="password" name="p" placeholder="Enter Password"><br><br>
		Upload your image&emsp;<input type="file" name="img"><br><br>
		<input type="submit" name="submit" value="Submit"><br><br>
	    </center>
        </form>
    </div>
</body>
</html>