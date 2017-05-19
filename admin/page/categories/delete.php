<?php 
if (!isset($_GET['id'])) {
	header('location: ?page=categories/index');
}
$id = htmlspecialchars($_GET['id']);
$query = "DELETE FROM categories WHERE id = $id";
$sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
if ($sql) {
	header('location: ?page=categories/index');
}