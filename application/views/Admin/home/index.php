<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid px-4">
			<h1 class="mt-4">Halaman Home</h1>
			<ol class="breadcrumb mb-4">
				<a href="<?php echo base_url();?>Home/tambah_home" class="btn btn-primary btn-lg active" role="button"
					aria-pressed="true">Tambah</a>
			</ol>

			<div class="card mb-4">
				<div class="card-header">
					<i class="fas fa-table me-1"></i>
					Home
				</div>
				<div class="card-body">
					<table id="datatablesSimple">
						<thead>
							<tr>
								<th>No</th>
								<th>id_home</th>
								<th>Judul</th>
								<th>Paragraf</th>
								<th>Foto</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$count = 0;
							foreach ($Home as $hm) :
								$count = $count + 1;
							?>
							<td><?= $count ?></td>
							<td><?= $hm['id_home'];?></td>
							<td><?= $hm['judul'];?></td>
							<td><?= $hm['paragraf'];?></td>
							<td><img src="<?= $hm['gambar'];?>"></td>
							<td>
								<a href="<?= base_url('home/edit_home/');?><?= $hm['id_home']?>"
									class="btn btn-danger btn-sm">edit</a>
								<a href="<?php echo base_url('home/delete_home/');?><?= $hm['id_home']?>"
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
