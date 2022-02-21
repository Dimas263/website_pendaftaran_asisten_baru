<!-- Main Container -->
<main id="main-container">
	<!-- Page Content -->
	<div class="content">
		<?php
		if($this->session->userdata('sebagai') == 'calonasisten' || $this->session->userdata('sebagai') == 'calonprogrammer' || $this->session->userdata('sebagai') == 'admin'){?>
		<!-- Peserta -->
		<nav class="breadcrumb bg-white push">
			<a class="breadcrumb-item" href="">Manlan</a>
			<span class="breadcrumb-item active">Tahap 1 - Ujian</span>
			<span class="breadcrumb-item active">Peserta</span>
			<span class="breadcrumb-item active"><?=ucfirst($this->auth_libs->user_login()->nama);?></span>
		</nav>
		<?php
		$lock_ujian = $this->auth_libs->user_login()->seleksi_berkas;
		if ($lock_ujian == 'ya'){
			$this->load->view('admin/oprec/hasil_seleksi/ujian');
		}
		else{
			$this->load->view('404');
		}
		?>
		<!-- END Peserta -->
		<?php } ?>

		<?php
		if($this->session->userdata('sebagai') == 'asisten' || $this->session->userdata('sebagai') == 'programmer' || $this->session->userdata('sebagai') == 'admin'){ ?>
			<!-- Asisten & Programmer -->
			<nav class="breadcrumb bg-white push">
				<a class="breadcrumb-item" href="">Manlan</a>
				<span class="breadcrumb-item active">Tahap 1 - Ujian</span>
				<span class="breadcrumb-item active">Asisten & Programmer</span>
				<span class="breadcrumb-item active"><?=ucfirst($this->auth_libs->user_login()->nama);?></span>
			</nav>
			<div class="block block-rounded">
				<div class="block-content">
					<div class="block block-rounded">
						<div class="block-content">
							<?php $this->load->view('admin/oprec/total_seleksiujian');?>
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-vcenter" id="tabel-peserta">
									<thead>
									<tr class="table-active">
										<th class="text-center" style="width: 100px;"><b>Foto</b></th>
										<th><b>Nama</b></th>
										<th class="text-center" style="width: 20%;"><b>Sebagai</b></th>
										<th class="text-center" style="width: 15%;"><b>Nilai</b></th>
										<th class="text-center" style="width: 15%;"><b>Nilai Asisten</b></th>
										<th class="text-center" style="width: 15%;"><b>Status</b></th>
										<th class="text-center" style="width: 15%;"><b>Aksi</b></th>
									</tr>
									</thead>
									<tbody>
									<?php
									$list_sebagai = array('calonasisten', 'calonprogrammer');
									$this->db->select('*');
									$this->db->from('manlan_admin');
									$this->db->where_in('sebagai', $list_sebagai);
									$this->db->order_by('nama','asc');
									$asisten = $this->db->get()->result_array();
									foreach ($asisten as $aslab) : ?>
										<tr>
											<td class="text-center">
												<img class="img-avatar img-avatar48" src="<?=base_url('assets/upload/foto/')?><?=$aslab['nama']?>/<?=$aslab['foto']?>" width="200" height="200" alt="">
											</td>
											<td class="font-w600"><b><?=$aslab['nama']?></b></td>
											<?php
											if($aslab['sebagai'] == 'calonasisten'){
												?>
												<td class="text-center"><b>Calon Asisten</b></td>
												<?php
											}
											else if($aslab['sebagai'] == 'calonprogrammer'){
												?>
												<td class="text-center"><b>Calon Programmer</b></td>
												<?php
											}
											?>
											<td class="text-center">
												<?php
												$id_peserta = $aslab['id_user'];
												$this->db->select('*');
												$this->db->from('manlan_nilaiujian');
												$this->db->where('id_penilaian', $id_peserta);
												$peserta = $this->db->get()->result_array();
												$no=1;
												?>
												<?php foreach ($peserta as $nilai_peserta) : ?>
													<span class="badge badge-primary"><?= $nilai_peserta['nilai_ujian'] ?></span><br>
												<?php endforeach ?>
											</td>
											<td class="text-center">
												<form action="<?=base_url('Oprec/nilaiseleksi_ujian')?>" method="post">
													<div class="form-group">
														<input type="hidden" name="id_user" class="form-control" value="<?=$aslab['id_user']?>">
														<input type="text" name="nilai_ujian" class="form-control" value=" ">
													</div>
													<div class="form-group">
														<button type="submit" name="submit" class="btn btn-sm btn-alt-primary">
															<i>Submit</i>
														</button>
													</div>
												</form>
											</td>
											<td class="text-center">
												<?php
												if($aslab['seleksi_ujian'] == 'ya'){
													?>
													<span class="badge badge-success">Lulus</span>
													<?php
												}
												else if($aslab['seleksi_ujian'] == 'tidak'){
													?>
													<span class="badge badge-danger">Tolak</span><br>
													<?php
												}
												else {
													?>
													<span class="badge badge-warning">Proses</span><br>
													<?php
												}
												?>
											</td>
											<td class="text-center">
												<form action="<?=base_url('Oprec/seleksi_ujian')?>" method="post">
													<div class="form-group">
														<input type="hidden" name="id_user" class="form-control" value="<?=$aslab['id_user']?>">
														<select class="form-control" name="seleksi_ujian" id="seleksi_ujian" required>
															<option value=" ">Hasil</option>
															<option value="ya">Terima</option>
															<option value="tidak">Tolak</option>
														</select>
													</div>
													<div class="form-group">
														<button type="submit" name="submit" class="btn btn-sm btn-alt-primary">
															<i>Submit</i>
														</button>
													</div>
												</form>
											</td>
										</tr>
									<?php endforeach ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END Asisten & Programmer -->
			<!-- END Asisten & Programmer -->
		<?php } ?>

		<?php
		if($this->session->userdata('sebagai') == 'staff' || $this->session->userdata('sebagai') == 'admin'){ ?>
			<!-- Staff -->
			<nav class="breadcrumb bg-white push">
				<a class="breadcrumb-item" href="">Manlan</a>
				<span class="breadcrumb-item active">Tahap 1 - Ujian</span>
				<span class="breadcrumb-item active">Staff</span>
				<span class="breadcrumb-item active"><?=ucfirst($this->auth_libs->user_login()->nama);?></span>
			</nav>
			<div class="block block-rounded">
				<div class="block-content">
					<div class="block block-rounded">
						<div class="block-content">
                          <?php $this->load->view('admin/oprec/total_seleksiujian');?>
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-vcenter" id="tabel-peserta">
									<thead>
									<tr class="table-active">
										<th class="text-center" style="width: 100px;"><b>Foto</b></th>
										<th><b>Nama</b></th>
										<th class="text-center" style="width: 20%;"><b>Sebagai</b></th>
										<th class="text-center" style="width: 100px;"><b>Nilai</b></th>
										<th class="text-center" style="width: 15%;"><b>Status</b></th>
									</tr>
									</thead>
										<tbody>
										<?php
										$list_sebagai = array('calonasisten', 'calonprogrammer');
										$this->db->select('*');
										$this->db->from('manlan_admin');
										$this->db->where_in('sebagai', $list_sebagai);
										$this->db->order_by('nama','asc');
										$staff = $this->db->get()->result_array();
										foreach ($staff as $aslab) : ?>
										<tr>
											<td class="text-center">
												<img class="img-avatar img-avatar48" src="<?=base_url('assets/upload/foto/')?><?=$aslab['nama']?>/<?=$aslab['foto']?>" width="200" height="200" alt="">
											</td>
											<td class="font-w600"><b><?=$aslab['nama']?></b></td>
											<?php
											if($aslab['sebagai'] == 'calonasisten'){
												?>
												<td class="text-center"><b>Calon Asisten</b></td>
												<?php
											}
											else if($aslab['sebagai'] == 'calonprogrammer'){
												?>
												<td class="text-center"><b>Calon Programmer</b></td>
												<?php
											}
											?>
											<td class="text-center">
												<?php
												$id_peserta = $aslab['id_user'];
												$this->db->select('*');
												$this->db->from('manlan_nilaiujian');
												$this->db->where('id_penilaian', $id_peserta);
												$peserta = $this->db->get()->result_array();
												$no=1;
												?>
												<?php foreach ($peserta as $nilai_peserta) : ?>
													<span class="badge badge-primary"><?= $nilai_peserta['nilai_ujian'] ?></span><br>
												<?php endforeach ?>
											</td>
											<td class="text-center">
												<?php
												if($aslab['seleksi_ujian'] == 'ya'){
													?>
													<span class="badge badge-success">Lulus</span>
													<?php
												}
												else if($aslab['seleksi_ujian'] == 'tidak'){
													?>
													<span class="badge badge-danger">Tolak</span><br>
													<?php
												}
												else {
													?>
													<span class="badge badge-warning">Proses</span><br>
													<?php
												}
												?>
											</td>
										</tr>
										<?php endforeach ?>
										</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END Staff -->
		<?php } ?>
	</div>
	<!-- END Page Content -->

</main>
<!-- END Main Container -->
