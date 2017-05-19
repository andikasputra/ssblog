<?php 
include 'layouts/header.php';
if (!isset($_GET['slug'])) {
	header('location: index.php');
}
$slug = $_GET['slug'];
$query = "SELECT posts.*, categories.name, user.fullname FROM posts JOIN categories ON posts.category_id = categories.id JOIN user ON posts.user_id = user.id WHERE posts.slug = '$slug'";
$sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi) . $query);
$post = mysqli_fetch_assoc($sql); ?>
<a href="#" class="fh5co-post-prev"><span><i class="icon-chevron-left"></i> Prev</span></a>
<a href="#" class="fh5co-post-next"><span>Next <i class="icon-chevron-right"></i></span></a>
<!-- END #fh5co-header -->
<div class="container-fluid">
	<div class="row fh5co-post-entry single-entry">
		<article class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
			<figure class="animate-box">
				<img src="assets/upload/images/<?= $post['picture'] ?>" alt="<?= $post['title'] ?>" class="img-responsive">
			</figure>
			<span class="fh5co-meta animate-box"><a href="single.html">Travel</a></span>
			<h2 class="fh5co-article-title animate-box"><a href="single.html"><?= $post['title'] ?></a></h2>
			<span class="fh5co-meta fh5co-date animate-box"><?= date('F d Y', strtotime($post['date'])) ?></span>
			
			<div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-left content-article">
				<div class="row">
					<div class="col-lg-12 cp-r animate-box">
						<?= $post['content'] ?>
					</div>
				</div>	
			</div>
		</article>
	</div>
</div>
<?php include 'layouts/footer.php'; ?>