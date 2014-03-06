<?php
include('../../../wp-load.php');
$email=$_POST['suscribe'];
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Invalid Email.";
}else{
	$ins="insert into wp_subscribe_data(subs_email)values('$email')";
	$exe=mysql_query($ins);
	if($exe>0){
		echo "OK";
	}
	else{
		echo "ERROR";
	}
}