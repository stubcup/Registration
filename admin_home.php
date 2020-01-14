<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
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
               <li><a href="admin_view_bookings.php"><i class="fas fa-clipboard-list"></i>View Bookings</a></li>
            
            
      
            
            <li><a href="logout.php"> <i class="fas fa-power-off"></i> Logout</a></li>
          
        </ul>
    <br>
    <img src="4.jpeg" width="60%">
	<script type="text/javascript" src="script/jquery.min.js"></script>
    <script type="text/javascript" src="script/materialize.min.js"></script>
	<script>

          function addZero(i) {
                if (i < 10) {
                    i = "0" + i;
                }
                return i;
            }

            setInterval(() => {
                var d = new Date();
                var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                var days = ["Sun", "Mon", "Tues", "Wed", "Thurs", "Fri", "Sat"];

                var h = addZero(d.getHours());
                var m = addZero(d.getMinutes());
                var s = addZero(d.getSeconds());

                time = h + ":" + m + "." + s

                var day = "<b>" + days[d.getDay()] + "</b> - " + d.getDate() + " " + months[d.getMonth()] + " " + d.getFullYear();
                $('#time').html(time);
                $('#day').html(day);
            }, 1000);
        });
    </script>
	</body>


</html> 

