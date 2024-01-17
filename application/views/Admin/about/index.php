<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid px-4">
			<h1 class="mt-4">Halaman About</h1>
			<ol class="breadcrumb mb-4">
				<a href="<?php echo base_url();?>About/hal_tambah" class="btn btn-primary btn-lg active" role="button"
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
								<th>id about</th>
								<th>Judul</th>
								<th>deskripsi</th>
								<th>umur</th>
								<th>email</th>
								<th>no hp</th>
								<th>alamat</th>
								<th>thumbnail</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$count = 0;
							foreach ($abt as $ab) :
								$count = $count + 1;
							?>
							<td><?= $count ?></td>
							<td><?= $ab['id_about'];?></td>
							<td><?= $ab['judul'];?></td>
							<td><?= $ab['deskripsi'];?></td>
							<td><?= $ab['umur'];?></td>
							<td><?= $ab['email'];?></td>
							<td><?= $ab['no_hp'];?></td>
							<td><?= $ab['alamat'];?></td>
							<td>
								<?php foreach ($upload_data as $item => $thumbnail):?>
								<li><?php echo $item;?>: <?php echo $thumbnail;?></li>
								<?php endforeach; ?>
							</td>
							<td>
								<a href="<?= base_url('about/hal_edit/');?><?= $ab['id_about']?>"
									class="btn btn-danger btn-sm">edit</a>
								<a href="<?php echo base_url('about/Delete/');?><?= $ab['id_about']?>"
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
