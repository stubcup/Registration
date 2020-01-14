<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="xCSS/css/all.css">
</head>
<body>


	<div class="header">
		<h2>Client Registration</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		
		<div class="input-group">
			<label>FullName</label>
			<input type="text" name="fname">
		</div>
		<div class="input-group">
			<label>Surname</label>
			<input type="text" name="surname">
		</div>
		<div class="input-group">
			<label>ID Number</label>
                        <input type="text" name="idNum">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		
		<div class="input-group">
			<label>Gender</label>
                        <input type="text" name="gender" placeholder="e.g Male/Female">
		</div>
                 <div class="input-group">
			<label>Address</label>
                        <input type="text" name="address" placeholder="e.g 1853 Motsumi Street....">
		</div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>

	</form>
<footer>All copyrights reserved by PQ Solutions.2019</footer>
</body>
</html>