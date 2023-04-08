<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>

		<?php

		$conn = mysqli_connect("localhost", "root", "", "adven");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$email_address = $_REQUEST['email_address'];
		$mobile_num = $_REQUEST['mobile_num'];
		$selec_dest = $_REQUEST['selec_dest'];
		$selec_act = $_REQUEST['selec_act'];
		$select_pri = $_REQUEST['select_pri'];
		$date = $_REQUEST['date'];
		
		// Performing insert query execution
		// here our table name is college

		$sql = "INSERT INTO details VALUES ('$first_name',
			'$email_address','$mobile_num','$selec_dest ','$selec_act','$select_pri','$date')";
			
		if(mysqli_query($conn, $sql)){
			echo "<h2>DETAILS SUBMITTED SUCCESSFULLY WE WILL CONTACT YOU SOON.</h2>";
		}else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
			
		// Close connection
		mysqli_close($conn);
		?>

</body>

</html>
