<?php session_start();
		include 'connection.php';
		//print_r($_REQUEST);
		if(isset($_REQUEST['user']) && isset($_REQUEST['pass']))
			{
				//echo "jhghg";
				$sql = "SELECT * FROM mst_user WHERE email='".mysql_real_escape_string($_REQUEST['user'])."'  AND pass='".mysql_real_escape_string($_REQUEST['pass'])."'";
				$result = mysql_query($sql, $con) or die(mysql_error());
               // echo $sql;
				$row = mysql_fetch_assoc($result);


                if($row['status']=="Pending")
                {
                    header('Location:http://rcaonline.in/test_trial/student/index.php?choice=error_pass');
                   //echo 'hjghjgjhgh';
                }
			    	//print_r($row);

				if ($row['email']==$_REQUEST['user'] && $row['pass']==$_REQUEST['pass'] && $row['status']=="Approved") {

                    if($row['status']=="Pending")
                    {
                        header('Location:http://rcaonline.in/test_trial/student/index.php?choice=error_pass');
                       //echo 'hjghjgjhgh';
                    }


					$_SESSION['id'] = session_id();
					$_SESSION['student_id'] = $_REQUEST['user'];




					header('Location:student_variables/index.php?choice=success');
				}
				else
				{
				    header('Location:index.php?choice=error_pass');
				}
			}
			else
				{
				    	header('Location:index.php?choice=error_pass');
				}
?>
