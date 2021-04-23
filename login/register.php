<?php

session_start();

if( isset($_SESSION['user_id']) ){
	header("Location: ../home.php");
}

require 'database.php';

if(!empty($_POST['email']) && !empty($_POST['password'])):
	
	// Enter the new user in the database
	$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
	$stmt = $conn->prepare($sql);

	$stmt->bindParam(':email', $_POST['email']);
	$stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));

	if( $stmt->execute() ):
		$_SESSION['regSuccess'] = true;
		header("Location: /");
	else:
		$_SESSION['regError'] = true;
		header("Location: /");
	endif;

endif;