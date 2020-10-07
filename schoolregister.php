<?php
/*
From http://www.html-form-guide.com 
This is the simplest emailer one can have in PHP.
If this does not work, then the PHP email configuration is bad!
*/

$con = mysqli_connect("localhost","u414334225_somesh","SomeshB@405","u414334225_inventory");

  
  
$msg="";
if(isset($_POST['school']))
{
    /* ****Important!****
    replace name@your-web-site.com below 
    with an email address that belongs to 
    the website where the script is uploaded.
    For example, if you are uploading this script to
    www.my-web-site.com, then an email like
    form@my-web-site.com is good.
    */


	$from_add = "somesh@inventorymanager.ml"; 

	$to_add = mysqli_real_escape_string($con,$_POST['email']); //<-- put your yahoo/gmail email address here
	
	$first_name = $_POST['firstnameschool'];
	$last_name = $_POST['lastnameschool'];
	$school_name = $_POST['schoolname'];
	$phone = mysqli_real_escape_string($con,$_POST['schoolphone']);
	$interest = $_POST['schoolinterest'];
    
	echo $to_add;
	
	// echo $first_name;
	// echo $last_name;
	// echo $school_name;
	echo $phone;
	// echo $interest;

	$subject = "Test Subject";
	$message = "Test Message";
	
	$headers = "From: $from_add \r\n";
	$headers .= "Reply-To: $from_add \r\n";
	$headers .= "Return-Path: $from_add\r\n";
	$headers .= "X-Mailer: PHP \r\n";
	
	
	if(mail($to_add,$subject,$message,$headers)) 
	{
		$msg = "Mail sent OK";
	} 
	else 
	{
 	   $msg = "Error sending email!";
	}


// 	$sql = "INSERT INTO schools (first_name, last_name, school_name, email, phone, interest)
// VALUES ('$first_name', '$last_name', '$school_name', '$to_add', '$phone', '$interest')";

if (!$con){
	die('Could not connect: ' . mysqli_error());
}else{
	$sql = "INSERT INTO `schools`(`first_name`, `last_name`, `school_name`, `email`, `phone`, `interest`) VALUES ('$first_name', '$last_name', '$school_name', '$to_add', $phone, '$interest')";

	$query = "INSERT INTO `schools`(`first_name`, `last_name`, `school_name`, `email`, `phone`, `interest`) VALUES ($first_name,$last_name,$school_name,$to_add,$phone,$interest)";

	// echo $sql;
	// mysqli_query($db, $query);
	if (mysqli_query($con, $sql)) {
		echo "New record created successfully";
	  } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	  }

	  if (mysqli_query($con, $query)) {
		echo "New record created successfully";
	  } else {
		echo "Error: " . $query . "<br>" . mysqli_error($con);
	  }
	  
	  mysqli_close($conn);
}

}
?>