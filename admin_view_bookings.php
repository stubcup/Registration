<?php include ('connect.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Schedule </title>
	<meta name="viewport" content="width:device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="tbStyle.css">
        <link rel="stylesheet" type="text/css" href="style1.css">
		<link rel = "stylesheet" type = "text/css" href = "styleX.css" />
		<link rel="stylesheet" type="text/css" href="xCSS/css/all.css">
                <link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
                
   
</head>
<body>
    <ul class="nav">
            
			
            
            <li><a href="admin_home.php"><<</a></li>
            
            
            <li><a href="logout.php"> <i class="fas fa-power-off"></i> Logout</a></li>
          
        </ul>
    <div class="header">
		<h2>Bookings</h2>
	</div>
    <br>
   
<table align="center">
	<thead>
            <tr>
		<th>ID</th>
                <th>Date</th>
                <th>ID Number</th>
		<th>Name</th>
                <th>Surname</th>
                <th>Contact</th>
                <th>Purpose</th>
          
                
            </tr>
	</thead>
	<tbody>
            <?php  
		$query = $conn->query("SELECT * FROM booking") or die(mysqli_error());
		while($fetch = $query->fetch_array()){
            ?>
						
                <tr>
                    <td><?php echo $fetch['book_id']?></td>
                    <td><?php echo $fetch['b_date']?></td>
                    <td><?php echo ($fetch['b_id'])?></td>
                    <td><?php echo $fetch['b_name']?></td>
                    <td><?php echo $fetch['b_surname']?></td>
                    <td><?php echo $fetch['b_contact']?></td>
                    <td><?php echo ($fetch['purpose'])?></td>
                    
							
		</tr>
		<?php
		}
		?>
                
                
	</tbody>
</table>
    
</body>
</html>