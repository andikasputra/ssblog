<?php 
session_start();
if (isset($_POST)) {
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	// koneksi ke database
	$koneksi = mysqli_connect('localhost', 'root', 'root', 'ss_blog') or die (mysqli_error());
	// insert ke tabel user
	$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
	$sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
	$user = mysqli_fetch_assoc($sql);
	if (count($user) > 0) {
		$_SESSION['user']['id'] = $user['id'];
		$_SESSION['user']['username'] = $user['username'];
		$_SESSION['user']['fullname'] = $user['fullname'];
		header('location: index.php');
	} else {
		echo "<script>alert('Userame atau password salah'); window.location.href='login.php';</script>";
	}
}