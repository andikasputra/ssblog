	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">Categories</h4>
						<p class="category">Here is all your categories</p>

						<a href="?page=categories/add" class="btn btn-primary">Add Categories</a>
					</div>
					<div class="content table-responsive table-full-width">
						<table class="table table-hover table-striped">
							<thead>
								<th>No</th>
							  <th>Name</th>
							  <th>Action</th>
							</thead>
							<tbody>
							<?php 
							$query = "SELECT * FROM categories ORDER BY name";
							$sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
							$no = 1;
							while ($kategori = mysqli_fetch_assoc($sql)){ ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $kategori['name'] ?></td>
									<td>
										<a href='?page=categories/edit&id=<?= $kategori['id'] ?>' class='btn btn-warning btn-sm'>Edit</a>
										<a href='?page=categories/delete&id=<?= $kategori['id'] ?>' class='btn btn-default btn-sm'>Hapus</a>
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
