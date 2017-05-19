<?php include 'layouts/header.php' ?>
<div class="container-fluid">
	<div class="row fh5co-post-entry">
		<?php 
		$query = "SELECT posts.*, categories.name, user.fullname FROM posts JOIN categories ON posts.category_id = categories.id JOIN user ON posts.user_id = user.id ORDER BY posts.id DESC";
		$sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi) . $query);
		while ($post = mysqli_fetch_assoc($sql)) { ?>
		<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
			<figure>
				<a href="single.html"><img src="assets/upload/images/<?= $post['picture'] ?>" alt="<?= $post['title'] ?>" class="img-responsive"></a>
			</figure>
			<span class="fh5co-meta"><a href="single.html"><?= $post['name'] ?></a></span>
			<h2 class="fh5co-article-title"><a href="baca-<?= $post['slug'] ?>"><?= $post['title'] ?></a></h2>
			<span class="fh5co-meta fh5co-date"><?= date('F d Y', strtotime($post['date'])) ?></span>
		</article>
		<?php 
		} ?>
		<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
			<figure>
				<a href="single.html"><img src="images/pic_2.jpg" alt="Image" class="img-responsive"></a>
			</figure>
			<span class="fh5co-meta"><a href="single.html">Food &amp; Drink</a></span>
			<h2 class="fh5co-article-title"><a href="single.html">Beef Steak at Guatian Restaurant</a></h2>
			<span class="fh5co-meta fh5co-date">March 6th, 2016</span>
		</article>
		<div class="clearfix visible-xs-block"></div>
		<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
			<figure>
				<a href="single.html"><img src="images/pic_3.jpg" alt="Image" class="img-responsive"></a>
			</figure>
			<span class="fh5co-meta"><a href="single.html">Travel</a>, <a href="single.html">Style</a></span>
			<h2 class="fh5co-article-title"><a href="single.html">An Overlooking River at the East Cost</a></h2>
			<span class="fh5co-meta fh5co-date">March 6th, 2016</span>
		</article>
		<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
			<figure>
				<a href="single.html"><img src="images/pic_4.jpg" alt="Image" class="img-responsive"></a>
			</figure>
			<span class="fh5co-meta"><a href="single.html">Travel</a>, <a href="single.html">Style</a></span>
			<h2 class="fh5co-article-title"><a href="single.html">A Wildlife In The Mountain of India</a></h2>
			<span class="fh5co-meta fh5co-date">March 6th, 2016</span>
		</article>
		<div class="clearfix visible-lg-block visible-md-block visible-sm-block visible-xs-block"></div>
		<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
			<figure>
				<a href="single.html"><img src="images/pic_5.jpg" alt="Image" class="img-responsive"></a>
			</figure>
			<span class="fh5co-meta"><a href="single.html">Photography</a></span>
			<h2 class="fh5co-article-title"><a href="single.html">We Took A Photo</a></h2>
			<span class="fh5co-meta fh5co-date">March 6th, 2016</span>
		</article>
		<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
			<figure>
				<a href="single.html"><img src="images/pic_6.jpg" alt="Image" class="img-responsive"></a>
			</figure>
			<span class="fh5co-meta"><a href="single.html">Travel</a>, <a href="single.html">Style</a></span>
			<h2 class="fh5co-article-title"><a href="single.html">A Modernize Huge and Beautiful Building</a></h2>
			<span class="fh5co-meta fh5co-date">March 6th, 2016</span>
		</article>
		<div class="clearfix visible-xs-block"></div>
		<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
			<figure>
				<a href="single.html"><img src="images/pic_7.jpg" alt="Image" class="img-responsive"></a>
			</figure>
			<span class="fh5co-meta"><a href="single.html">Food &amp; Drinks</a></span>
			<h2 class="fh5co-article-title"><a href="single.html">Enjoying the Native Juice Drink in Brazil</a></h2>
			<span class="fh5co-meta fh5co-date">March 6th, 2016</span>
		</article>
		<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
			<figure>
				<a href="single.html"><img src="images/pic_8.jpg" alt="Image" class="img-responsive"></a>
			</figure>
			<span class="fh5co-meta"><a href="single.html">Travel</a>, <a href="single.html">Style</a></span>
			<h2 class="fh5co-article-title"><a href="single.html">Boat Travel in The Vietnam River</a></h2>
			<span class="fh5co-meta fh5co-date">March 6th, 2016</span>
		</article>
		<div class="clearfix visible-lg-block visible-md-block visible-sm-block visible-xs-block"></div>

		<div class="clearfix visible-xs-block"></div>
	</div>
</div>
<?php include 'layouts/footer.php' ?>