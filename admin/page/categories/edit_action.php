<?php 
if (! isset($_POST, $_GET['id'])) {
	header('location: ?page=categories/index');
}
$id = htmlspecialchars($_GET['id']);
$name = htmlspecialchars($_POST['name']);
$query = "UPDATE categories SET name = '$name' WHERE id = $id";
$sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
if ($sql) {
	header('location: ?page=categories/index');
}