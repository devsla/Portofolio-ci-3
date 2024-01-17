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
					<form action="<?php echo base_url();?>sosmed/fungsi_edit" method="post">
						<div class="form-floating mb-3">
							<input class="form-control" id="id_sosmed" type="id_sosmed" name="id_sosmed"
								value="<?= $Ssmed['id_sosmed']; ?>" />
							<label for="id_sosmed">id_sosmed</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="facebook" type="facebook" name="facebook"
								value="<?= $Ssmed['facebook']; ?>" />
							<label for="facebook">facebook</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="instagram" type="instagram" name="instagram"
								value="<?= $Ssmed['instagram']; ?>" />
							<label for="instagram">instagram</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="github" type="github" name="github"
								value="<?= $Ssmed['github']; ?>" />
							<label for="github">github</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="linkedln" type="linkedln" name="linkedln"
								value="<?= $Ssmed['linkedln']; ?>" />
							<label for="linkedln">linkedln</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="twitter" type="twitter" name="twitter"
								value="<?= $Ssmed['twitter']; ?>" />
							<label for="twitter">twitter</label>
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
