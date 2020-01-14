<?php 
	session_start();

	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	$user="";
        $id_num="";
        $id_number="";


	$db = mysqli_connect('localhost', 'root', '', 'registration');

	if (isset($_POST['create_appointment'])) {
		
		$date = mysqli_real_escape_string($db, $_POST['date']);
		$id_num = mysqli_real_escape_string($db, $_POST['id_num']);
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$sname = mysqli_real_escape_string($db, $_POST['sname']);
		$contact=mysqli_real_escape_string($db, $_POST['contact']);
                $purpose=mysqli_real_escape_string($db, $_POST['purpose']);
               
		
		if (empty($date)) { array_push($errors, "Date is required"); }
		if (empty($id_num)) { array_push($errors, "ID number is required"); }
		if (empty($name)) { array_push($errors, "Name is required"); }
                if (empty($sname)) { array_push($errors, "Surname number is required"); }
                if (empty($contact)) { array_push($errors, "Contact is required"); }
                if (empty($purpose)) { array_push($errors, "Purpose of visit is required"); }
                


		if( strlen($id_num)!=13 ||!is_numeric($id_num))
                {
                    array_push($errors, "Invalid ID number entered,valid ID consists of 13 digits");
                }
                if( strlen($contact)!=10 ||!is_numeric($contact))
                {
                    array_push($errors, "Invalid contact numbers,Valid SA numbers consist of 10 digits");
                }
                $today=date('Y-m-d');
                if($date!=$today)
                {
                    array_push($errors, "Ensure you book using todays date");
                }
                
		
		$query1 = "SELECT * FROM booking WHERE b_id = '$id_num'";
$result1 = mysqli_query($db,$query1);

if ($result1) {

    if (mysqli_num_rows($result1) == 1) {
        while($row = mysqli_fetch_array($result1)) {
            $id_number=$row['b_id'] ;


        }
    }
}
if($id_num==$id_number)
{
    array_push($errors, "You have already make a booking"); 
}
		//------------------------------------------------
	
		//----------------------------------------
	
		

	
		if (count($errors) == 0) {
			
                       
			$query = "INSERT INTO booking (b_date,b_contact,b_name,b_surname,b_id,purpose) 
					  VALUES('$date', '$contact', '$name','$sname','$id_num','$purpose')";
			mysqli_query($db, $query);
                        echo ("<script>alert('ALREADY BOOKED FOR THIS TIME!');</script>");

			$_SESSION['id_num'] = $id_num;
			$_SESSION['success'] = "You are now logged in";
			
			header('location: client_view_bookings.php');
                        }
                       
               
                       
		

	}
        ?>