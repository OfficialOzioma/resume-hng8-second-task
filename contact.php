<?php
ob_start();
// database connection code
if(isset($_POST['submit']))
{
	// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
	// $con = mysqli_connect('localhost', 'root', 'root','Bus_dir');
	$con = mysqli_connect('db4free.net', 'laravel_link', 'laravel_link','laravel_link');

	// get the post records

	$txtName = $_POST['name'];
	$txtEmail = $_POST['email'];
	$txtPhone = $_POST['phone'];
	$txtMessage = $_POST['message'];

	// database insert SQL code
	// $sql = "INSERT INTO `laravel_link` (`Id`, `name`, `email`, `phone`, `message`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";
	$sql = "INSERT INTO `contact` (`Id`, `name`, `email`, `phone`, `message`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

	// insert in database 
	$result = mysqli_query($con, $sql);
	if($result)
	{

		echo "<script type='text/javascript'>
				alert('Thank you {$txtName} for contacting me, I will get back to you shortly');
				window.location.href='resume.php#contact'; 
			</script>";
		

	}

}
else
{
	echo "<script type='text/javascript'>
				alert('Sorry! the message wasn`t sent');
				window.location.href='resume.php#contact'; 
			</script>";
	
}

?>