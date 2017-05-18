<?php 
include 'layouts/header.php';

if (isset($_GET['page'])) {
	$page = htmlspecialchars($_GET['page']);
	if (!file_exists('page/'.$page.'.php')) {
		header('location: index.php');
	}

	include 'page/'.$page.'.php';
}

include 'layouts/footer.php';