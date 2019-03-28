<?php

if(isset($_GET['item'])) {
	$itemNumber = $_GET['item'];
	
}
else {
	header('Location: index.php');
}