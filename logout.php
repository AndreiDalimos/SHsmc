<?php 

session_start();

if(isset($_SESSION['student_userid']))
{
	$_SESSION['student_userid'] = NULL;
	unset($_SESSION['student_userid']);

}

header("Location: login.php");
die;
