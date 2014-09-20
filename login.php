<?php
$db_host = "dbhome.cs.nctu.edu.tw";
$db_name = "elho210_cs_db";
$db_user = "elho210_cs";
$db_password = "000000";
$dsn = "mysql:host=$db_host;dbname=$db_name";
$db = new PDO($dsn, $db_user, $db_password);
?>

<!DOCTYPE HTML PUBLIC “-//W3C//DTD HTML 4.01 Transitional//EN" “http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>(σﾟ∀ﾟ)σﾟ∀ﾟ)σﾟ∀ﾟ)σ Database HW!</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container" >
			<h1><Font color="#009933">Login to use the flight schedule system!</Font></h1>
			<div class="row">
			<div class="col-md-">
				<font size="4">
				
				<form  role="form" action="verify.php" method="POST" onsubmit="return submitTest();">
					<div class="form-group">
						<label for="txtAccount">Account</label>
						<input type="text" class="form-control" id="txtAccount" name="txtAccount" placeholder="Account">
					</div>
					<div class="form-group">
						<label for="txtPassword">Password</label>
						<input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password">
					</div>
					<div class="col-md-">
						<button type="submit" class="btn pull-left btn btn-success">Login</button>
						<?php echo"&nbsp" ?>
						<a href="signup.php" >register!</a>
					</div>
				</form>
				
				</font>
				<input type="button" class="btnEdit btn btn-primary" value="Search Tickets for Guest without login" onclick="javascript:location.href='guest_in.php'">
			</div>
			</div>
		</div>
	</body>
</html>