			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="header">
								<h4 class="title">Add Post</h4>
								<p class="category">Create your post</p>
							</div>
							<div class="content table-responsive table-full-width">
								<form action="?page=posts/add_action" method="post" class="form" enctype="multipart/form-data">
									<div class="form-group">
										<label for="title">Title</label>
										<input type="text" id="title" name="title" class="form-control" required="required">
									</div>
									<div class="form-group">
										<label for="category">Category</label>
										<select name="category" id="category" class="form-control">
											<?php 
											$queryKategori = "SELECT * FROM categories ORDER BY name";
											$sqlKategori = mysqli_query($koneksi, $queryKategori) or die (mysqli_error($koneksi));
											while ($kategori = mysqli_fetch_assoc($sqlKategori)) { ?>
												<option value="<?= $kategori['id'] ?>"><?= $kategori['name'] ?></option>
											<?php 
											} ?>
										</select>
									</div>
									<div class="form-group">
										<label for="content">Content</label>
										<textarea id="content" class="form-control" name="content" required="required"></textarea>
									</div>
									<div class="form-group">
										<label for="date">Date</label>
										<input type="date" id="date" name="date" class="form-control" required="required" value="<?= date('Y-m-d')  ?>">
									</div>
									<div class="form-group">
										<label for="picture">Picture</label>
										<input type="file" id="picture" name="picture" class="form-control" required="required">
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