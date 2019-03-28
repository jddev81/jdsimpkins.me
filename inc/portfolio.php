<?php

$errorTitle = '';
$errorMsg = '';



if(isset($_GET['item'])) {
	$item = $_GET['item'];

	switch ($item) {
		case 'thcw' :
			$projectTitle 		= 'The Hand Car Wash';
			$projectImg 		= "img/portfolio/theHandCarWash.PNG";
			$githubLink 		= '';
			$projectLink 		= 'http://thehandcarwash.net';
			$aboutProject 		= 'portfolioAbout/the-hand-car-wash.php';
			$skills 			= array('Custom Theme', 'WordPress', 'PHP', 'Javascript');
			break;
		default : 
			$error = true;
			$errorTitle = 'Project Doesn\'t exist';
			$errorMsg = "I'm sorry but the project you're looking for doesn't exist.";
	}

}
else {
	$error = true;
	$errorTitle = 'Project Does Not Exist';
	$errorMsg = 'Sorry, it looks like the project you were looking for does not exist.';
}