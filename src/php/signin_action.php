<?php
session_start();
include "database_connect.php";



if (isset($_POST['email']) && isset($_POST['password'])) {

	$email = trim($_POST['email']);
	$pass = trim($_POST['password']);

	if (empty($uname) || empty($pass)) {
		header("Location: ../../../index.php?error=email and Password is required");
		exit();
	} else {
		$stmt = $conn->prepare("SELECT email, password FROM users WHERE email = '$email' AND password = '$pass'");
		$stmt->execute();
		$stmt->store_result();
		$numrows = $stmt->num_rows;
		$stmt->bind_result($dbemail, $dbpassword);
		$stmt->fetch();
		$stmt->close();

		if ($numrows > 0) {
			$_SESSION['email'] = $dbemail;
            $_SESSION['authnum'] = $dbauthorization;
			header("Location: ../../../main.php");
			exit();
		} else {
			header("Location: ../../../index.php?error=Incorect Email or Password");
			exit();
		}
	}
	header("Location: ../../../index.php");
	exit();
}
