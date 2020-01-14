<?php include('admin_log_process.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="xCSS/css/all.css">
</head>
<body>
    <div class="head">
    <h1>DQMS </h1>
    </div>
  
    <br>
	<div class="header">
		<h2>Administrator<br/> Login</h2>
	</div>
	
	<form method="post" action="admin_login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label><i class="fas fa-user fa-1x cust" aria-hidden="true"></i> Username</label>
			<input type="text" name="username" >
		</div>
		
		<div class="input-group">
			<label><i class="fas fa-lock fa-1x cust" aria-hidden="true"></i> Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="admin_log">Login</button>
		</div>
</form>
</body>
</html>
