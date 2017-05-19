<?php 
if (! isset($_POST)) {
	header('location: ?page=categories/add');
}
$name = htmlspecialchars($_POST['name']);
$query = "INSERT INTO categories (name) VALUES ('$name')";
$sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
if ($sql) {
	header('location: ?page=categories/index');
}