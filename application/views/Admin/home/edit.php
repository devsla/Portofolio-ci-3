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
					<form action="<?php echo base_url();?>Home/fungsi_edithome" method="post">
						<div class="form-floating mb-3">
							<input class="form-control" id="id_home" type="id_home" name="id_home"
								value="<?= $queryHome['id_home']; ?>" placeholder="-- Masukkan disini --" />
							<label for="id_home">id_home</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="tagline" type="tagline" name="tagline"
								value="<?= $queryHome['tagline']; ?>" placeholder="-- Masukkan disini --" />
							<label for="tagline">tagline</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="judul" type="judul" name="judul"
								value="<?= $queryHome['judul']; ?>" placeholder="-- Masukkan disini --" />
							<label for="judul">judul</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="paragraf" type="paragraf" name="paragraf"
								value="<?= $queryHome['paragraf']; ?>" placeholder="-- Masukkan disini --" />
							<label for="paragraf">paragraf</label>
						</div>
						<div class="mb-3">
							<label for="foto" class="form-label">Input File</label>
							<input class="form-control" type="file" id="foto" name="foto"
								value="<?= $queryHome['gambar']; ?>">
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
