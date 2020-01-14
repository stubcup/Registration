<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta name="viewport" content="width:device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="style1.css">
		<link rel = "stylesheet" type = "text/css" href = "styleX.css" />
		<link rel="stylesheet" type="text/css" href="xCSS/css/all.css">

   
</head>
<body>
   
	<ul class="nav">
            <div class="head1">
			<h2>Doctors Queue Management System</h2>
			</div>
			<li><a href="index.php"><i class="fas fa-home"></i>  Home</a></li>
               <li><a href="booking.php"><i class="fas fa-clipboard"></i> Make Booking</a></li>
               <li><a href="client_view_bookings.php"><i class="fas fa-clipboard-list"></i>  My Bookings</a></li>
            
            
               <li><a href="about.php"><i class="fas fa-info"></i> About</a></li>
            
            <li><a href="logout.php"> <i class="fas fa-power-off"></i> Logout</a></li>
          
        </ul>
	
	<div id="stage">
		<a ><img src="1.jpeg" width="500" height="410"></a>
		<a ><img src="2.jpeg" width="500" height="410"></a>
		<a ><img src="3.jpeg" width="500" height="410"></a>
		<a ><img src="4.jpeg" width="500" height="410"></a>
		<a ><img src="5.jpeg" width="500" height="410"></a>
		<a ><img src="6.jpeg" width="500" height="410"></a>
		<a ><img src="7.jpeg" width="500" height="410"></a>
		
	</div>
	<script type="text/javascript">
	window.addEventListener("DOMContentLoaded",function(e){
		var stage=document.getElementById("stage");
		var slideComplete=function(e){stage.appendChild(arr[0]);};
		var arr=stage.getElementsByTagName("a");
		for(var i=0;i<arr.length;i++){
			arr[i].addEventListener("animationend",slideComplete,false);
		}
		
	},false);
	</script>
    
 
   
		<div class="Logged">

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p><i class="fas fa-user"></i> <?php echo strtoupper( $_SESSION['username']); ?> Is Currently logged in..</p>
			
		<?php endif ?>
	</div>
	<?php

echo '<br>';
$now=new DateTime();
echo $now->format('r');

?>

<br>	
<footer>&copy;Copyrights reserved by PQ Solution.2019<br>Contant: 0791504873</footer>
		
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
</html>