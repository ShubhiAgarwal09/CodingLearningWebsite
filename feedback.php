<?php
    $server_name="localhost";
	$username="root";
	$password="";
	$database_name="feedback";
	$conn=mysqli_connect ($server_name, $username, $password, $database_name);
	//checking the connection
	if(!$conn)
	{
		die( "Connection Failed:" . mysqli_connect_error());
	}

	if(isset($_POST['submit']))
	{

		$first_name = $_POST['first_name'];
		$email = $_POST['email'];
		$comment = $_POST['comment'];
		$ratings = $_POST['rating1'];

		$sql_query = "INSERT INTO feedback_tb(first_name, email, comment,rating1) VALUES ('$first_name','$email','$comment','$ratings')";

		if (mysqli_query($conn, $sql_query) )
		{
			echo '<script>alert("Thanks for your feedback")</script>';
			echo file_get_contents("Home.html");
		}
		else
		{
			echo "Error:"."".mysqli_error($conn);
		}
		mysqli_close($conn);
	}
?>