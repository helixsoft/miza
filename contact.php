<?php 
	include('../../../wp-load.php');
	$name = $_POST['name'];
  	$email = $_POST['email'];
  	$message = $_POST['message'];

  	//php mailer variables
  	$to = get_option('admin_email');
  	$subject = "Someone sent a message from ".get_bloginfo('name');
  	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

  	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    	echo "Email Address Invalid.";
 	else //email is valid
    {
        //validate presence of name and message
        if(empty($name) || empty($message)){
          	echo "Please supply all information.";
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) echo "OK"; //message sent!
          else echo "ERROR"; //message wasn't sent
        }
    }