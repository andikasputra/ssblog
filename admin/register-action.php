<?php 
session_start();
if (isset($_POST)) {
	$username = htmlspecialchars($_POST['username']);
	$fullname = htmlspecialchars($_POST['fullname']);
	$password = htmlspecialchars($_POST['password']);
	// koneksi ke database
	$koneksi = mysqli_connect('localhost', 'root', 'root', 'ss_blog') or die (mysqli_error());
	// insert ke tabel user
	$query = "INSERT INTO user (username, fullname, password) VALUES ('$username', '$fullname', '$password')";
	$sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
	if ($sql) {
		header('location: login.php');
	}
}