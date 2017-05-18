		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="header">
								<h4 class="title">Add Post</h4>
								<p class="category">Create your post</p>
							</div>
							<div class="content table-responsive table-full-width">
								<form action="" method="post" class="form">
									<div class="form-group">
										<label for="title">Title</label>
										<input type="text" id="title" class="form-control" required="required">
									</div>
									<div class="form-group">
										<label for="category">Kategori</label>
										<select name="category" id="category" class="form-control">
											<option>Pendidikan</option>
											<option>Teknologi</option>
											<option>Kemanusiaan</option>
										</select>
									</div>
									<div class="form-group">
										<label for="content">Content</label>
										<textarea id="content" class="form-control" required="required"></textarea>
									</div>
									<div class="form-group">
										<label for="picture">Picture</label>
										<input type="file" id="picture" class="form-control" required="required">
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
		</div>