<?php
	include('config.php');
	
	if(isset($_SESSION['username']) && isset($_SESSION['role'])){
		if($_SESSION['role'] == encrypt("admin",$key)){
			//passed
		}else if($_SESSION['role'] == encrypt("user",$key)){
			//passed
		}
	}else if(isset($_COOKIE['sessionid-1']) && isset($_COOKIE['sessionid-2']) && isset($_COOKIE['sessionid-3'])){
		$username	= mysqli_real_escape_string($connect,$_COOKIE['sessionid-1']);
		$password	= mysqli_real_escape_string($connect,$_COOKIE['sessionid-2']);
		$level		= mysqli_real_escape_string($connect,$_COOKIE['sessionid-3']);
		$username	= encrypt($username,$key);
		$password	= hashword($password,$salt);
		$password	= sha1($password);
		$level		= encrypt($level,$key);
		$result		= mysqli_query($connect, "SELECT * FROM user WHERE username='$username' AND password='$password' AND level='$level'");
		if(mysqli_num_rows($result)>0){
			//passed
		}else {
			header('Location: ../global-error/405.php');
			$connect -> close();
		}
	}else {
		header('Location: ../global-error/405.php');
		$connect -> close();
	}