<?php 
$pages = [
	'index' => [
		'sessions'			=>	true,
		'db'				=>	true,
		'title'				=>	'Home page',
		'description'		=>	'Welcome to the home page',
		'theme'				=>	'basic',
		'pageCSS'			=>	'index',
		'pageJS'			=>	'index',
		'form'				=>	false,
		'name' 				=> 'Home',
		'link' 				=> '/index.php'
	],//index
	'about' => [
		'sessions'			=>	true,
		'db'				=>	false,
		'title'				=>	'About Page',
		'description'		=>	'This is the about page',
		'theme'				=>	'basic',
		'pageCSS'			=>	'',
		'pageJS'			=>	'',
		'form'				=>	false,
		'name' 				=> 'About Us',
		'link' 				=> '/pages/about.php'
	]//about
];

 ?>