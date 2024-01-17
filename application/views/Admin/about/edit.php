<div class="container">
	<?php if ($this->session->flashdata() ): ?>
	<div class="row-mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Siswa Berhasil diedit!</strong> <?= $this->session->flashdata(''); ?>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div>
	</div>
	<?php endif; ?>
</div>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-7">
			<div class="card shadow-lg border-0 rounded-lg mt-5">
				<div class="card-header">
					<h3 class="text-center font-weight-light my-4">Form edit</h3>
				</div>
				<div class="card-body">
					<form action="<?php echo base_url();?>about/fungsi_edit" method="post">
						<div class="form-floating mb-3">
							<input class="form-control" id="id_about" type="id_about" name="id_about"
								value="<?= $at['id_about']; ?>" />
							<label for="id_about">id_about</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="judul" type="judul" name="judul"
								value="<?= $at['judul']; ?>" />
							<label for="judul">judul</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="deskripsi" type="deskripsi" name="deskripsi"
								value="<?= $at['deskripsi']; ?>" />
							<label for="deskripsi">deskripsi</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="umur" type="umur" name="umur" value="<?= $at['umur']; ?>" />
							<label for="umur">umur</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="email" type="email" name="email"
								value="<?= $at['email']; ?>" />
							<label for="email">email</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="no_hp" type="no_hp" name="no_hp"
								value="<?= $at['no_hp']; ?>" />
							<label for="no_hp">no_hp</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="alamat" type="alamat" name="alamat"
								value="<?= $at['alamat']; ?>" />
							<label for="alamat">alamat</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="thumbnail" type="thumbnail" name="thumbnail"
								value="<?= $at['thumbnail']; ?>" />
							<label for="thumbnail">thumbnail</label>
						</div>
						<div class="card-footer text-center py-3">
							<div class="d-grid gap-2 col-6 mx-auto">
								<button class="btn btn-primary" type="submit">edit</button>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
</main>
</div>
</div>
</div>
</div>
