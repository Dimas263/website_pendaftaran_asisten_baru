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
		if($this->session->userdata('sebagai') == 'admin'){ ?>
			<!-- Admin -->
			<nav class="breadcrumb bg-white push">
				<a class="breadcrumb-item" href="">Manlan</a>
				<span class="breadcrumb-item active">Tahap 1 - Ujian</span>
				<span class="breadcrumb-item active">Admin</span>
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
										<th class="text-center" style="width: 15%;"><b>Status</b></th>
										<th class="text-center" style="width: 100px;"><b>Pengaturan</b></th>
									</tr>
									</thead>
									<?php
									$list_sebagai = array('calonasisten', 'calonprogrammer');
									$this->db->select('*');
									$this->db->from('manlan_admin');
									$this->db->where_in('sebagai', $list_sebagai);
									$admin = $this->db->get()->result_array();
									foreach ($admin as $aslab) : ?>
										<tbody>
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
												<div class="btn-group">
													<a type="button" href="<?=base_url('oprec/berkas/')?>" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#berkas_asisten<?= $aslab['id_user'] ?>" title="Detail">
														<i>Cek Hasil Ujian</i>
													</a>
												</div>
											</td>
										</tr>
										</tbody>
									<?php endforeach ?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END Admin -->
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
										<th class="text-center" style="width: 15%;"><b>Status</b></th>
										<th class="text-center" style="width: 15%;"><b>Aksi</b></th>
										<th class="text-center" style="width: 100px;"><b>Pengaturan</b></th>
									</tr>
									</thead>
										<tbody>
										<?php
										$list_sebagai = array('calonasisten', 'calonprogrammer');
										$this->db->select('*');
										$this->db->from('manlan_admin');
										$this->db->where_in('sebagai', $list_sebagai);
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
											<td class="text-center">
												<div class="btn-group">
													<a type="button" href="<?=base_url('oprec/berkas/')?>" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#berkas_asisten<?= $aslab['id_user'] ?>" title="Detail">
														<i>Cek Hasil Ujian</i>
													</a>
												</div>
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
										<th class="text-center" style="width: 15%;"><b>Status</b></th>
										<th class="text-center" style="width: 100px;"><b>Pengaturan</b></th>
									</tr>
									</thead>
										<tbody>
										<?php
										$list_sebagai = array('calonasisten', 'calonprogrammer');
										$this->db->select('*');
										$this->db->from('manlan_admin');
										$this->db->where_in('sebagai', $list_sebagai);
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
												<div class="btn-group">
													<a type="button" href="<?=base_url('oprec/berkas/')?>" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#berkas_asisten<?= $aslab['id_user'] ?>" title="Detail">
														<i>Cek Hasil Ujian</i>
													</a>
												</div>
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

<?php
$list_sebagai = array('calonasisten', 'calonprogrammer');
$this->db->select('*');
$this->db->from('manlan_admin');
$this->db->where_in('sebagai', $list_sebagai);
$asisten = $this->db->get()->result_array();
foreach ($asisten as $detail) : ?>
	<div class="modal fade" id="berkas_asisten<?= $detail['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="berkas_asisten" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-fromleft modal-dialog-popou" role="document">
			<div class="modal-content">
				<div class="block block-themed block-transparent mb-0">
					<div class="block-header bg-primary-dark">
						<h3 class="block-title">Berkas</h3>
						<div class="block-options">
							<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
								<i class="si si-close"></i>
							</button>
						</div>
					</div>
					<div class="block-content">
						<div class="row">
							<div class="col-md-6">
								<div class="block block-content">
									<table class="table table-bordered">
										<div class="col-md-12">
											<a class="block text-center" href="javascript:void(0)">
												<div class="block-content block-content-full">
													<div class="font-w600 mb-5 text-primary"><b>Status Seleksi</b></div>
													<?php
													if($detail['seleksi_berkas'] != 'ya' && $detail['seleksi_ujian'] != 'ya' && $detail['seleksi_wawancara'] != 'ya' && $detail['seleksi_staff'] != 'ya'){
														?>
														<div class="font-size-sm text-muted text-black">Tahap Berkas</div>
														<?php
													}
													?>
													<?php
													if($detail['seleksi_berkas'] == 'ya' && $detail['seleksi_ujian'] != 'ya' && $detail['seleksi_wawancara'] != 'ya' && $detail['seleksi_staff'] != 'ya'){
														?>
														<div class="font-size-sm text-muted text-black">Tahap Ujian</div>
														<?php
													}
													?>
													<?php
													if($detail['seleksi_berkas'] == 'ya' && $detail['seleksi_ujian'] == 'ya' && $detail['seleksi_wawancara'] != 'ya' && $detail['seleksi_staff'] != 'ya'){
														?>
														<div class="font-size-sm text-muted text-black">Tahap Tutor, Wawancara, dan Pemrograman (Programmer)</div>
														<?php
													}
													?>
													<?php
													if($detail['seleksi_berkas'] == 'ya' && $detail['seleksi_ujian'] == 'ya' && $detail['seleksi_wawancara'] == 'ya' && $detail['seleksi_staff'] != 'ya'){
														?>
														<div class="font-size-sm text-muted text-black">Tahap Staff</div>
														<?php
													}
													?>
													<?php
													if($detail['seleksi_berkas'] == 'ya' && $detail['seleksi_ujian'] = 'ya' && $detail['seleksi_wawancara'] == 'ya' && $detail['seleksi_staff'] == 'ya'){
														?>
														<div class="font-size-sm text-muted text-black">Lulus Semua Seleksi</div>
														<?php
													}
													?>
												</div>
												<div class="block-content block-content-full bg-gd-dusk">
													<img class="img-avatar img-avatar48" src="<?=base_url('assets/upload/foto/')?><?=$detail['nama']?>/<?=$detail['foto']?>" width="200" height="200" alt="">
												</div>
												<div class="block-content block-content-full">
													<div class="font-w600 mb-5"><?= $detail['nama'] ?></div>
													<div class="font-size-sm text-muted"><?= $detail['sebagai'] ?></div>
												</div>
												<div class="block-content block-content-full block-content-sm bg-body-light">
													<span class="font-w600 font-size-sm text-elegance"><?= $detail['email'] ?></span>
												</div>
											</a>
										</div>
									</table>
									<table class="table table-borderless table-vcenter mb-30">
										<tbody>
										<?php
										$id_peserta = $detail['id_user'];
										$this->db->select('*');
										$this->db->from('manlan_nilaiujian');
										$this->db->where('id_penilaian', $id_peserta);
										$peserta = $this->db->get()->result_array();
										$no=1;
										?>
										<?php foreach ($peserta as $nilai_peserta) : ?>
										<tr class="table-active">
											<th>Nilai Hasil Ujian</th>
											<th class="text-right" style="width: 15px;"></th>
											<th class="text-right" style="width: 15px;"></th>
										</tr>
										<tr>
											<td>
												<label for="example-nf-nama">Matematika</label>
												<input type="text" name="nama" class="form-control" id="example-nf-nama" placeholder="<?= $nilai_peserta['matematika'] ?>">
											</td>
										</tr>
										<tr>
											<td>
												<label for="example-nf-nama">Pengetahuan Umum</label>
												<input type="text" name="nama" class="form-control" id="example-nf-nama" placeholder="<?= $nilai_peserta['pengetahuan_umum'] ?>">
											</td>
										</tr>
										<tr>
											<td>
												<label for="example-nf-nama">Bahasa Inggris</label>
												<input type="text" name="nama" class="form-control" id="example-nf-nama" placeholder="<?= $nilai_peserta['bahasa_inggris'] ?>">
											</td>
										</tr>
										<tr>
											<td>
												<label for="example-nf-nama">Pengetahuan Bank</label>
												<input type="text" name="nama" class="form-control" id="example-nf-nama" placeholder="<?= $nilai_peserta['pengetahuan_bank'] ?>">
											</td>
										</tr>
										<tr>
											<td>
												<label for="example-nf-nama">Dasar Pemrograman</label>
												<input type="text" name="nama" class="form-control" id="example-nf-nama" placeholder="<?= $nilai_peserta['dasar_pemrograman'] ?>">
											</td>
										</tr>
										<?php endforeach ?>
										</tbody>
									</table>
								</div>
							</div>
							<div class="col-md-6">
								<div class="block block-content">
									<div class="block-header block-header-default">
										<h3 class="block-title"><b>Biodata</b></h3>
									</div>
									<div class="block-content">
										<form action="" method="post" onsubmit="return false;">
											<div class="form-group">
												<label for="example-nf-nama">Nama</label>
												<input type="text" name="nama" class="form-control" id="example-nf-nama" placeholder="<?= $detail['nama'] ?>">
											</div>
											<div class="form-group">
												<label for="example-nf-npm">NPM</label>
												<input type="text" name="npm" class="form-control" id="example-nf-npm" placeholder="<?= $detail['npm'] ?>">
											</div>
											<div class="form-group">
												<label for="example-nf-kelas">Kelas</label>
												<input type="text" name="kelas" class="form-control" id="example-nf-kelas" placeholder="<?= $detail['kelas'] ?>">
											</div>
											<div class="form-group">
												<label for="example-nf-email">Email</label>
												<input type="email" name="email" class="form-control" id="example-nf-email" placeholder="<?= $detail['email'] ?>">
											</div>
											<div class="form-group">
												<label for="example-nf-telepon">No. Telepon</label>
												<input type="text" name="telepon" class="form-control" id="example-nf-telepon" placeholder="<?= $detail['telepon'] ?>">
											</div>
											<div class="form-group">
												<label for="example-nf-region">Region</label>
												<select class="form-control" name="region" id="region" required>
													<option value=""><?= $detail['region'] ?></option>
												</select>
											</div>
											<div class="form-group">
												<label for="example-nf-jurusan">Jurusan</label>
												<select class="form-control" name="jurusan" id="jurusan" required>
													<option value=""><?= $detail['jurusan'] ?></option>
												</select>
											</div>
											<div class="form-group">
												<label for="example-nf-angkatan">Angkatan</label>
												<input type="text" name="angkatan" class="form-control" id="example-nf-angkatan" placeholder="<?= $detail['angkatan'] ?>">
											</div>
											<div class="form-group">
												<label for="example-nf-ttl">Tempat & Tanggal Lahir</label>
												<input type="text" name="ttl" class="form-control" id="example-nf-ttl" placeholder="<?= $detail['lahir'] ?>">
											</div>
											<div class="form-group">
												<label class="col-12" for="example-alamat-input">Alamat</label>
												<textarea type="text" name="alamat" class="form-control" id="example-alamat-input" rows="6" placeholder="<?= $detail['alamat'] ?>"></textarea>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<?php endforeach ?>
