	<div id="layoutSidenav_content">
		<main>
			<div class="container-fluid px-4">
				<h1 class="mt-4">Halaman Sosmed</h1>
				<ol class="breadcrumb mb-4">
					<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
					<li class="breadcrumb-item active">Tables</li>
				</ol>
				<div class="card mb-4">
					<div class="card-body">
						disini berisi pesan
					</div>
				</div>
				<div class="card mb-4">
					<div class="card-header">
						<a href="<?php echo base_url();?>Sosmed/hal_tambah" class="btn btn-primary btn-lg active"
							role="button" aria-pressed="true">Tambah</a>
					</div>
					<div class="card-body">
						<table id="datatablesSimple">
							<thead>
								<tr>
									<th>No</th>
									<th>id sosmed</th>
									<th>facebook</th>
									<th>instagram</th>
									<th>github</th>
									<th>linkedln</th>
									<th>twitter</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php 
							$count = 0;
							foreach ($sosmed as $sm) :
								$count = $count + 1;
							?>
									<td><?= $count ?></td>
									<td><?= $sm['id_sosmed'];?></td>
									<td><?= $sm['facebook'];?></td>
									<td><?= $sm['instagram'];?></td>
									<td><?= $sm['github'];?></td>
									<td><?= $sm['linkedln'];?></td>
									<td><?= $sm['twitter'];?></td>
									<td>
										<a href="<?= base_url('sosmed/hal_editsosmed/');?><?= $sm['id_sosmed']?>"
											class="btn btn-danger btn-sm">edit</a>
										<a href="<?php echo base_url('sosmed/hapusSosmed/');?><?= $sm['id_sosmed']?>"
											class="btn btn-primary btn-sm">hapus</a>
									</td>
								</tr>
								<?php endforeach;?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</main>
