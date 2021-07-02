<?php
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	if($username=="demo" && $password=="12345")
	{
		// echo "login correct";
		header("location:resultupload.php");
	}
	else
	{
		echo "login incorrect";
		// header("location:lession28.php?f=1");
	}
?>