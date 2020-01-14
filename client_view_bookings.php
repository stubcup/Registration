<?php include ('connect.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>my bookings </title>
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
            
			
            
        <li><a href="index.php"><<</a></li>
            
            
            <li><a href="logout.php"> <i class="fas fa-power-off"></i> Logout</a></li>
          
        </ul>
      <div class="msg">
          Note: This system requires you to put your ID Number <br>
          in order to view your appointment that you have made this is just security protocol<br>
          Then After you can click about to view location of the place and contact information<br>
          HAVE NICE DAY....<br>
          
		
	</div>
    <div class="header">
		<h2>Bookings</h2>
	</div>
    <br>
    <form method="post" action="client_view_bookings.php">
        <div class="filter">
        <input type="text" name="filter_id" placeholder="Enter Your ID Number"><button name="search">Search</button>
        
        </div>
    </form>
    <style>
        form{
            border: none;
        }
        .filter input{
            height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 0px;
	border: 1px solid gray;
        
        }
        .filter button{
            padding: 10px;
	font-size: 15px;
	color: white;
	background: black;
	border: none;
	border-radius: 5px;
        text-align: center;
        }
         .msg{
           color:green;
           font-size:20px;
           width: 45%;
           margin: 0px auto;
           padding: 20px;
           border: 2px solid black;
           background: black;
           border-radius: 0px 0px 0px 0px;
              }
    </style>
   
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
                $id="";
                  if (isset($_POST['search'])) {
                      $id=$_POST['filter_id'];
                      
                 
                
                  $query = $conn->query("SELECT * FROM booking where b_id=$id") or die(mysqli_error());
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
                  }
		?>
                
                
	</tbody>
</table>
    
</body>
</html>