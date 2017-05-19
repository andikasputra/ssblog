<?php 
if (!isset($_GET['id'])) {
	header('location: ?page=posts/index');
}
$id = htmlspecialchars($_GET['id']);
$query = "SELECT * FROM posts WHERE id = $id";
$sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi) . $query);
$post = mysqli_fetch_assoc($sql);
 ?>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="header">
								<h4 class="title">Edit Post</h4>
								<p class="category">Update your post</p>
							</div>
							<div class="content table-responsive table-full-width">
								<form action="?page=posts/edit_action&id=<?= $id ?>" method="post" class="form" enctype="multipart/form-data">
									<div class="form-group">
										<label for="title">Title</label>
										<input type="text" id="title" name="title" class="form-control" value="<?= $post['title'] ?>" required="required">
									</div>
									<div class="form-group">
										<label for="category">Category</label>
										<select name="category" id="category" class="form-control">
											<?php 
											$queryKategori = "SELECT * FROM categories ORDER BY name";
											$sqlKategori = mysqli_query($koneksi, $queryKategori) or die (mysqli_error($koneksi));
											while ($kategori = mysqli_fetch_assoc($sqlKategori)) { ?>
												<option value="<?= $kategori['id'] ?>"
													<?= ($post['category_id'] == $kategori['id']) ? 'selected' : '' ?>>
													<?= $kategori['name'] ?>		
												</option>
											<?php 
											} ?>
										</select>
									</div>
									<div class="form-group">
										<label for="content">Content</label>
										<textarea id="content" class="form-control" name="content" required="required"><?= $post['content'] ?></textarea>
									</div>
									<div class="form-group">
										<label for="date">Date</label>
										<input type="date" id="date" name="date" class="form-control" required="required" value="<?= date('Y-m-d', strtotime($post['date']))  ?>">
									</div>
									<div class="form-group">
										<label for="picture">Picture</label>
										<img src="../assets/upload/images/<?= $post['picture'] ?>" width="200px">
										<input type="hidden" name="old_picture" value="<?= $post['picture'] ?>">
										<input type="file" id="picture" name="picture" class="form-control">
									</div>
									<div class="form-group">
										<button class="btn btn-success" type="submit">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script src="../plugins/ckeditor/ckeditor.js"></script>
			<script>
				CKEDITOR.replace(document.getElementById('content'), {
					filebrowserBrowseUrl : '../plugins/kcfinder/browse.php?type=files',
				  filebrowserImageBrowseUrl : '../plugins/kcfinder/browse.php?type=images',
				  filebrowserFlashBrowseUrl : '../plugins/kcfinder/browse.php?type=flash',
				  filebrowserUploadUrl : '../plugins/kcfinder/upload.php?type=files',
				  filebrowserImageUploadUrl : '../plugins/kcfinder/upload.php?type=images',
				  filebrowserFlashUploadUrl : '../plugins/kcfinder/upload.php?type=flash'
				})
			</script>