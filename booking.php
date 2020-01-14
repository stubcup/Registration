<?php include ('connect.php');?>
<?php include('book_process.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
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
               
                        <li><a href="client_view_bookings.php"><i class="fas fa-clipboard-list"></i>  View Bookings</a></li>
            <li><a href="a"><i class="fas fa-bell"></i>  Notice</a></li>
            
            
            
            <li><a href="logout.php"> <i class="fas fa-power-off"></i> Logout</a></li>
          
        </ul>
                <div class="bookIMG">
                    <img src="book.jpeg" width="50%" height="15%" >
		</div>
		
                
                
                <div class="book">
                    Note: Before you start booking ensure you adhere to following <br>
                    You can only make appointment for today and you can only book once and MAX Bookings per day is 50 <br>
                    Be sure to enter valid details and bring along ID Card for verification<br>
                    Have nice day and if you have any enquries you can send comment or make call<br>
                    Working hours are between 08:00am-17:00pm <br>
                    THANK YOU!!!!
                </div>
    <br>
                <div class="header">
		<h2>Make Appointment</h2>
	</div>
    <br>
    
    <form method="post" action="booking.php">
        <?php include('errors.php'); ?>
                <div class="input-group">
			<label>Date</label>
                        <input type="date" name="date">
		</div>
    
                <div class="input-group">
			<label>ID number</label>
			<input type="text" name="id_num">
		</div>
                 <div class="input-group">
			<label>Name</label>
                        <input type="text" name="name" placeholder="e.g John">
		</div>
                <div class="input-group">
			<label>Surname</label>
			<input type="text" name="sname" placeholder="e.g Smith">
		</div>
                <div class="input-group">
			<label>Contact</label>
			<input type="text" name="contact" placeholder="e.g 0794351177">
		</div>
                <div class="input-group">
			<label>Purpose</label>
                        <input type="text" name="purpose" placeholder="e.g Consult/Check up/Collect Medication">
		</div>
                <div class="input-group">
                    <button type="submit" class="btn" name="create_appointment">Create Appointment</button>
		</div>
                 <script>alert'("Successfully submitted")';</script>
        
                </form>
                
               
                <style>
                    .btn {
                        padding: 10px;
                        font-size: 15px;
                        color: white;
                        background: black;
                        border: none;
                        border-radius: 5px;
                    }
                        
                        .book{
                        color:red;
                        font-size:20px;
                        width: 45%;
                        margin: 0px auto;
                        padding: 30px;
                        border: 2px solid black;
                        background: gray;
                        border-radius: 0px 0px 0px 0px;
                        }
                        .bookIMG{
                            text-align: center;
                            background: black;
                        }
	
}
}
                </style>
</body>

</html>