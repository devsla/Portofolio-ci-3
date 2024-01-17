<div class="container">
	<?php if ($this->session->flashdata() ): ?>
	<div class="row-mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong><?= $this->session->flashdata('ditambahkan'); ?></strong>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<div class="row justify-content-center">
		<div class="col-lg-7">
			<div class="card shadow-lg border-0 rounded-lg mt-5">
				<div class="card-header">
					<h3 class="text-center font-weight-light my-4">Form Tambah</h3>
				</div>
				<div class="card-body">
					<form action="<?php echo base_url();?>contact/fungsi_tambah" method="post"
						enctype="multipart/form-data">
						<div class="form-floating mb-3">
							<input class="form-control" id="id contact" type="id contact" name="id contact" />
							<label for="id_contact">id contact</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="deskripsi" type="deskripsi" name="deskripsi" />
							<label for="deskripsi">deskripsi</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="paragraf" type="paragraf" name="paragraf" />
							<label for="paragraf">paragraf</label>
						</div>
						<div class="d-grid gap-2 col-6 mx-auto">
							<button class="btn btn-primary" type="submit">tambah</button>
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
