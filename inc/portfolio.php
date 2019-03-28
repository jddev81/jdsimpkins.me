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
		case 'employmentApp' :
			$projectTitle 		= 'Apply For Employment Application';
			$projectImg 		= "img/portfolio/employmentApp.PNG";
			$githubLink 		= '';
			$projectLink 		= '';
			$aboutProject 		= 'portfolioAbout/employment-app.php';
			$skills 			= array('HTML', 'CSS', 'PHP', 'Javascript');
			break;
		case 'invoicingApp' :
			$projectTitle 		= 'Invoicing Application';
			$projectImg 		= "img/portfolio/invoicingApp.PNG";
			$githubLink 		= '';
			$projectLink 		= 'http://admin.dcsmarketing.net';
			$aboutProject 		= 'portfolioAbout/invoicing-app.php';
			$skills 			= array('HTML', 'CSS', 'PHP', 'Javascript', 'MySQL');
			break;
		case 'ecoDev' :
			$projectTitle 		= 'Economic Development Authority';
			$projectImg 		= "img/portfolio/masonCounty.PNG";
			$githubLink 		= '';
			$projectLink 		= 'http://masoncounty.org';
			$aboutProject 		= 'portfolioAbout/mceda.php';
			$skills 			= array('HTML', 'CSS', 'PHP', 'Javascript', 'MySQL', 'WordPress', 'Google Maps 							API');
			break;
		case 'milton-eats' :
			$projectTitle 		= 'Milton Eats';
			$projectImg 		= "img/portfolio/miltonEats.PNG";
			$githubLink 		= 'https://github.com/jddev81/miltoneats';
			$projectLink 		= '';
			$aboutProject 		= 'portfolioAbout/milton-eats.php';
			$skills 			= array('HTML', 'CSS', 'Javascript', 'Laravel');
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