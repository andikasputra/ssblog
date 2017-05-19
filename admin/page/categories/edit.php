<?php 
if (!isset($_GET['id'])) {
	header('location: ?page=categories/index');
}
$id = htmlspecialchars($_GET['id']);
$query = "SELECT name FROM categories WHERE id = $id";
$sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
$kategori = mysqli_fetch_assoc($sql);
 ?>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="header">
								<h4 class="title">Edit Category</h4>
								<p class="category">Edit post category</p>
							</div>
							<div class="content table-responsive table-full-width">
								<form action="?page=categories/edit_action&id=<?= $id ?>" method="post" class="form">
									<div class="form-group">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" value="<?= $kategori['name'] ?>" class="form-control" required="required">
									</div>
									<div class="form-group">
										<button class="btn btn-success" type="submit">Update</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>