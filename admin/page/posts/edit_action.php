<?php 
if (!isset($_POST, $_GET['id'])) {
	header('location: ?page=posts/add');
}
$id = htmlspecialchars($_GET['id']);
$title = htmlspecialchars($_POST['title']);
$category = htmlspecialchars($_POST['category']);
$content = $_POST['content'];
$date = htmlspecialchars($_POST['date']);
// slug berdasarkan judul yang dilowercase dan spasi diganti -
$slug = strtolower(str_replace(' ', '-', $title));
$picture = htmlspecialchars($_POST['old_picture']);

if ($_FILES['picture']['name'] != '') {
	// picture berdasarkan slug.ext => judul-post.jpg
	$picture = $slug . '.' . pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);
	// upload file
	move_uploaded_file($_FILES['picture']['tmp_name'], '../assets/upload/images/'.$picture);
}

$user_id = $_SESSION['user']['id'];
$query = "UPDATE posts SET title = '$title', category_id = $category, content = '$content', date = '$date', picture = '$picture', user_id = $user_id, slug = '$slug' WHERE id = $id";
$sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi). $query);
if ($sql) {
	header('location: ?page=posts/index');
}
