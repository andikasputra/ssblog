<?php 
if (!isset($_POST)) {
	header('location: ?page=posts/add');
}
$title = htmlspecialchars($_POST['title']);
$category = htmlspecialchars($_POST['category']);
$content = $_POST['content'];
$date = htmlspecialchars($_POST['date']);
// slug berdasarkan judul yang dilowercase dan spasi diganti -
$slug = strtolower(str_replace(' ', '-', $title));
// picture berdasarkan slug.ext => judul-post.jpg
$picture = $slug . '.' . pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);

$user_id = $_SESSION['user']['id'];
// upload file
$upload = move_uploaded_file($_FILES['picture']['tmp_name'], '../assets/upload/images/'.$picture);
// jika upload berhasil
if ($upload) {
	$query = "INSERT INTO posts (title, category_id, content, date, picture, user_id, slug) VALUES ('$title', $category, '$content', '$date', '$picture', $user_id, '$slug')";
	$sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi). $query);
	if ($sql) {
		header('location: ?page=posts/index');
	} else {
		echo "aa";
	}
} else {
	echo "bb";
}