	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">Posts</h4>
						<p class="category">Here is all your posts</p>

						<a href="?page=posts/add" class="btn btn-primary">Add Post</a>
					</div>
					<div class="content table-responsive table-full-width">
						<table class="table table-hover table-striped">
							<thead>
								<th>No</th>
								<th>Title</th>
								<th>Category</th>
								<th>Author</th>
								<th>Date</th>
								<th>Action</th>
							</thead>
							<tbody>
								<?php 
								$query = "SELECT posts.*, categories.name, user.fullname FROM posts JOIN categories ON posts.category_id = categories.id JOIN user ON posts.user_id = user.id ORDER BY posts.id DESC";
								$sql = mysqli_query($koneksi, $query) or die (mysqli_error() . $query);
								$no = 1;
								while ($post = mysqli_fetch_assoc($sql)) { ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $post['title'] ?></td>
									<td><?= $post['name'] ?></td>
									<td><?= $post['fullname'] ?></td>
									<td><?= date('d F Y', $post['date']) ?></td>
									<td>
											<a href='?page=posts/edit&id=<?= $post['id'] ?>' class='btn btn-warning btn-sm'>Edit</a>
											<a href='?page=posts/delete&id=<?= $post['id'] ?>' class='btn btn-default btn-sm'>Hapus</a>
									  </td>
								</tr>
								<?php 
								} ?>
							</tbody>
						</table>

					</div>
				</div>
			</div>

		</div>
	</div>