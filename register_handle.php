<?php
	include 'connection.php';
	$a= mysql_real_escape_string($_REQUEST['a']);
	$b= mysql_real_escape_string($_REQUEST['b']);
	$sum= mysql_real_escape_string($_REQUEST['sum']);
	$sum_input= mysql_real_escape_string($_REQUEST['sum_input']);
	
	if($sum_input!= $sum)
	{
		header('Location:register.php?choice=error&value=Please Input the Correct Sum of Two Variables.');
		exit();
	}
	
	$sql = "INSERT INTO `mst_user` (`user_id`, `login`, `pass`, `username`, `address`, `city`, `phone`, `email`, `status`, `f_name`, `c_name`, `percentage`, `payment_details`) 
    VALUES (NULL, '".mysqli_real_escape_string($con,$_REQUEST['email'])."', '".mysqli_real_escape_string($con,$_REQUEST['pass'])."', '".mysqli_real_escape_string($con,$_REQUEST['name'])."',
    '".mysqli_real_escape_string($con,$_REQUEST['Query'])."', '".mysqli_real_escape_string($con,$_REQUEST['city'])."', '".mysqli_real_escape_string($con,$_REQUEST['mobile'])."', 
    '".mysqli_real_escape_string($con,$_REQUEST['email'])."', 'Pending', '".mysqli_real_escape_string($con,$_REQUEST['fname'])."', '".mysqli_real_escape_string($con,$_REQUEST['cname'])."', 
    '".mysqli_real_escape_string($con,$_REQUEST['percent'])."', '".mysqli_real_escape_string($con,$_REQUEST['payment_details'])."');";
	echo $sql;
	//$result = mysqli_query($con,$sql) or die(mysqli_error());
if (mysqli_query($con, $sql)) {
    header('Location:register.php?choice=success&value=Request Of Approval Has Been Sent to the Administrator of System.');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

/*if(!mysqli_query($con, $sql))
	{
		die(mysqli_error());
	}
echo "Coming here";
	else
	{
		header('Location:register.php?choice=success&value=Request Of Approval Has Been Sent to the Administrator of System.');
	} */
?>