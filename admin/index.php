<?php 
session_start();
if (!isset($_SESSION['user'])) {
	header('location: login.php');
}
require '../conf/db.php';
require 'layouts/header.php';

if (isset($_GET['page'])) {
	$page = htmlspecialchars($_GET['page']);
	if (!file_exists('page/'.$page.'.php')) {
		header('location: index.php');
	}

	require 'page/'.$page.'.php';
}

require 'layouts/footer.php';