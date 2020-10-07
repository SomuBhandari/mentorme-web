<?php
/*
From http://www.html-form-guide.com 
This is the simplest emailer one can have in PHP.
If this does not work, then the PHP email configuration is bad!
*/
$msg1="";
if(isset($_POST['student']))
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

    $to_add1 = $_POST[studentemail]; //<-- put your yahoo/gmail email address here
    
    echo $to_add1;

	$subject1 = "Test Subject";
	$message1 = "Test Message";
	
	$headers1 = "From: $from_add \r\n";
	$headers1 .= "Reply-To: $from_add \r\n";
	$headers1 .= "Return-Path: $from_add\r\n";
	$headers1 .= "X-Mailer: PHP \r\n";
	
	
	if(mail($to_add1,$subject1,$message1,$headers1)) 
	{
		$msg1 = "Mail sent OK";
	} 
	else 
	{
 	   $msg1 = "Error sending email!";
	}
	//echo $msg1;
}


?>