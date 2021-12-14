<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="test1";
$conn=mysqli_connect ($server_name, $username, $password, $database_name);
    if(!$conn)
	{
		die( "Connection Failed:" . mysqli_connect_error());
	}
    if(isset($_POST['submit']))
	{

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$nationality=$_POST['nationality'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$state = $_POST['states'];
		$lang = $_POST['lang'];

		$sql_query = "INSERT INTO register_test(first_name, last_name, gender,nationality, email, contact, states,lang ) VALUES ('$first_name', '$last_name', '$gender','$nationality', '$email', '$contact',' $state','$lang')";

		if (mysqli_query($conn, $sql_query) )
		{
			echo '<script>alert("New Details Entry inserted successfully !")</script>';
			echo file_get_contents("Home.html");
		}
		else
		{
			echo "Error:"."".mysqli_error($conn);
		}
		mysqli_close($conn);
	}
?>