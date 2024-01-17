<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid px-4">
			<h1 class="mt-4">Halaman contact</h1>
			<ol class="breadcrumb mb-4">
				<a href="<?php echo base_url();?>contact/hal_tambah" class="btn btn-primary btn-lg active" role="button"
					aria-pressed="true">Tambah</a>
			</ol>

			<div class="card mb-4">
				<div class="card-header">
					<i class="fas fa-table me-1"></i>
					contact
				</div>
				<div class="card-body">
					<table id="datatablesSimple">
						<thead>
							<tr>
								<th>No</th>
								<th>id_contact</th>
								<th>deskripsi</th>
								<th>Paragraf</th>
								<th>nama</th>
								<th>email</th>
								<th>message</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$count = 0;
							foreach ($contact as $ct) :
								$count = $count + 1;
							?>
							<td><?= $count ?></td>
							<td><?= $ct['id_contact'];?></td>
							<td><?= $ct['deskripsi'];?></td>
							<td><?= $ct['paragraf'];?></td>
							<td><?= $ct['name'];?></td>
							<td><?= $ct['email'];?></td>
							<td><?= $ct['message'];?></td>
							<td>
								<a href="<?= base_url('contact/hal_edit/');?><?= $ct['id_contact']?>"
									class="btn btn-danger btn-sm">edit</a>
								<a href="<?php echo base_url('contact/deleteContact/');?><?= $ct['id_contact']?>"
									class="btn btn-primary btn-sm">hapus</a>
							</td>
							</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</main>
