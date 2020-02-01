<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$game = $_POST['igrica'];

	$conn = new mysqli('localhost', 'root', '', 'iteh');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into registracija(firstName, lastName, email, password, mainGame)
			values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss",$firstName, $lastName, $email, $password, $game);
		$stmt->execute();
		echo "Registration Successfull";
		$stmt->close();
		$conn->close();
	}
?>