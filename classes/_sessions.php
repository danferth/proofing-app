<?php 
session_start();
//timeout
$timeout = 120; //secconds so this would be 2 minutes
if(isset($_SESSION['timeout'])){
	$sessionlife = time() - $_SESSION['timeout'];
	if($sessionlife > $timeout){
		session_destroy();
		header("Location: http://htslabs.com");
	}
}
$_SESSION['timeout'] = time();
//session variables
if(!isset($_SESSION['user'])){
    $_SESSION['user'] = 'Jane_Doe';  
}
if(!isset($_SESSION['user_access'])){
    $_SESSION['user_access'] = 'visitor';  
}
?>