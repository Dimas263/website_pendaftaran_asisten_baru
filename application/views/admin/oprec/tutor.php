<!-- Main Container -->
<main id="main-container">
	<!-- Page Content -->
	<div class="content">
		<?php
		if($this->session->userdata('sebagai') == 'calonasisten' || $this->session->userdata('sebagai') == 'calonprogrammer' || $this->session->userdata('sebagai') == 'admin'){ ?>
		<!-- Peserta -->
		<nav class="breadcrumb bg-white push">
			<a class="breadcrumb-item" href="">Manlan</a>
			<span class="breadcrumb-item active">Tahap 2 - Tutor, Wawancara, Dan Pemrograman (Programmer)</span>
			<span class="breadcrumb-item active">Peserta</span>
			<span class="breadcrumb-item active"><?=ucfirst($this->auth_libs->user_login()->nama);?></span>
		</nav>
		<?php
			$lock_wawancara = $this->auth_libs->user_login()->seleksi_ujian;
			if ($lock_wawancara == 'ya'){
				$this->load->view('admin/oprec/hasil_seleksi/tutor');
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
			<span class="breadcrumb-item active">Tahap 2 - Tutor, Wawancara, Dan Pemrograman (Programmer)</span>
			<span class="breadcrumb-item active">Asisten & Programmer</span>
			<span class="breadcrumb-item active"><?=ucfirst($this->auth_libs->user_login()->nama);?></span>
		</nav>
		<div class="block block-rounded">
			<div class="block-content">
				<div class="block block-rounded">
					<div class="block-content">
                      <?php $this->load->view('admin/oprec/total_seleksitutor');?>
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
								<thead>
								<tr class="table-active">
									<th class="text-center" style="width: 8%;"><b>No</b></th>
									<th class="text-left" style="width: 28%;"><b>Nama</b></th>
									<th class="text-center" style="width: 25%;"><b>Sebagai</b></th>
									<th class="text-center" style="width: 20%;"><b>Tutor</b></th>
									<th class="text-center" style="width: 20%;"><b>Wawancara</b></th>
									<th class="text-center" style="width: 20%;"><b>Pemrograman</b></th>
									<th class="text-center" style="width: 20%;"><b>Status</b></th>
									<th class="text-center" style="width: 100px;"><b>Hasil_Seleksi</b></th>
								</tr>
								</thead>
									<tbody>
									<!-- Koneksi DB -->
									<?php
									$list_sebagai = array('calonasisten', 'calonprogrammer');
									$this->db->select('*');
									$this->db->from('manlan_admin');
									$this->db->where_in('sebagai', $list_sebagai);
									$this->db->order_by('nama','asc');
									$asisten = $this->db->get()->result_array();
									$no=1;
									?>
									<?php foreach ($asisten as $aslab) : ?>
									<tr>
										<td class="text-center"><?php echo $no++ ?></td>
										<td class="font-w600"><?php echo $aslab['nama'] ?></td>
										<td class="text-center font-w600"><?php echo $aslab['sebagai'] ?></td>
										<td class="text-center">
											<div class="btn-group">
												<button type="button" class="btn btn-sm btn-alt-success" data-toggle="modal" data-target="#nilai_asistentutor<?= $aslab['id_user'] ?>" title="Nilai">
													<i>Nilai</i>
												</button>
												&nbsp;&nbsp;&nbsp;
												<button type="button" class="btn btn-sm btn-alt-primary" data-toggle="modal" data-target="#hasil_nilaitutor<?= $aslab['id_user'] ?>" title="Review">
													<i>Review</i>
												</button>
											</div>
										</td>
										<td class="text-center">
											<div class="btn-group">
												<button type="button" class="btn btn-sm btn-alt-success" data-toggle="modal" data-target="#nilai_asistenwawancara<?= $aslab['id_user'] ?>" title="Nilai">
													<i>Nilai</i>
												</button>
												&nbsp;&nbsp;&nbsp;
												<button type="button" class="btn btn-sm btn-alt-primary" data-toggle="modal" data-target="#hasil_nilaiwawancara<?= $aslab['id_user'] ?>" title="Review">
													<i>Review</i>
												</button>
											</div>
										</td>
										<td class="text-center">
											<div class="btn-group">
												<button type="button" class="btn btn-sm btn-alt-success" data-toggle="modal" data-target="#nilai_asistenpemrograman<?= $aslab['id_user'] ?>" title="Nilai">
													<i>Nilai</i>
												</button>
												&nbsp;&nbsp;&nbsp;
												<button type="button" class="btn btn-sm btn-alt-primary" data-toggle="modal" data-target="#hasil_nilaipemrograman<?= $aslab['id_user'] ?>" title="Review">
													<i>Review</i>
												</button>
											</div>
										</td>
										<td class="text-center">
											<?php
											if($aslab['seleksi_wawancara'] == 'ya'){
												?>
												<span class="badge badge-success">Lulus</span>
												<?php
											}
											else if($aslab['seleksi_wawancara'] == 'tidak'){
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
											<form action="<?=base_url('Oprec/seleksi_wawancaratutor')?>" method="post">
												<div class="form-group">
													<input type="hidden" name="id_user" class="form-control" value="<?=$aslab['id_user']?>">
													<select class="form-control" name="seleksi_wawancaratutor" id="seleksi_wawancaratutor" required>
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
		<?php } ?>

		<?php
		if($this->session->userdata('sebagai') == 'staff' || $this->session->userdata('sebagai') == 'admin'){ ?>
		<!-- Staff -->
		<nav class="breadcrumb bg-white push">
			<a class="breadcrumb-item" href="">Manlan</a>
			<span class="breadcrumb-item active">Tahap 2 - Tutor, Wawancara, Dan Pemrograman (Programmer)</span>
			<span class="breadcrumb-item active">Staff</span>
			<span class="breadcrumb-item active"><?=ucfirst($this->auth_libs->user_login()->nama);?></span>
		</nav>
		<div class="block block-rounded">
			<div class="block-content">
				<div class="block block-rounded">
					<div class="block-content">
                      <?php $this->load->view('admin/oprec/total_seleksitutor');?>
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
								<thead>
								<tr class="table-active">
									<th class="text-center" style="width: 5%;"><b>No</b></th>
									<th class="text-left" style="width: 20%;"><b>Nama</b></th>
									<th class="text-center" style="width: 20%;"><b>Sebagai</b></th>
									<th class="text-center" style="width:10%;"><b>Status</b></th>
									<th class="text-center" style="width: 20%;"><b>Tutor</b></th>
									<th class="text-center" style="width: 20%;"><b>Wawancara</b></th>
									<th class="text-center" style="width: 20%;"><b>Pemrograman</b></th>
								</tr>
								</thead>
									<tbody>
									<!-- Koneksi DB -->
									<?php
									$list_sebagai = array('calonasisten', 'calonprogrammer');
									$this->db->select('*');
									$this->db->from('manlan_admin');
									$this->db->where_in('sebagai', $list_sebagai);
									$this->db->order_by('nama','asc');
									$asisten = $this->db->get()->result_array();
									$no=1;
									?>
									<?php foreach ($asisten as $aslab) : ?>
									<tr>
										<td class="text-center"><?php echo $no++ ?></td>
										<td class="font-w300"><?php echo $aslab['nama'] ?></td>
										<td class="text-center font-w600"><?php echo $aslab['sebagai'] ?></td>
										<td class="text-center">
											<?php
											if($aslab['seleksi_wawancara'] == 'ya'){
												?>
												<span class="badge badge-success">Lulus</span>
												<?php
											}
											else if($aslab['seleksi_wawancara'] == 'tidak'){
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
											<button type="button" class="btn btn-sm btn-alt-primary" data-toggle="modal" data-target="#hasil_nilaitutor<?= $aslab['id_user'] ?>" title="Review">
												<i>Review</i>
											</button>
										</td>
										<td class="text-center">
											<button type="button" class="btn btn-sm btn-alt-primary" data-toggle="modal" data-target="#hasil_nilaiwawancara<?= $aslab['id_user'] ?>" title="Review">
												<i>Review</i>
											</button>
										</td>
										<td class="text-center">
											<button type="button" class="btn btn-sm btn-alt-primary" data-toggle="modal" data-target="#hasil_nilaipemrograman<?= $aslab['id_user'] ?>" title="Review">
												<i>Review</i>
											</button>
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

<!-- Tutor -->
<?php
$list_sebagai = array('calonasisten', 'calonprogrammer');
$this->db->select('*');
$this->db->from('manlan_admin');
$this->db->where_in('sebagai', $list_sebagai);
$asisten = $this->db->get()->result_array();
foreach ($asisten as $detail) : ?>
<div class="modal fade" id="nilai_asistentutor<?= $detail['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="nilai_asistentutor" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-fromleft modal-dialog-popout" role="document">
		<div class="modal-content rounded">
			<div class="block block-rounded block-transparent bg-pattern mb-0" style="background-image: url(<?=base_url('assets/admin/')?>'assets/media/various/bg-pattern-inverse.png');">
				<div class="block-header bg-primary-dark">
					<h3 class="block-title text-white">Penilaian</h3>
					<div class="block-options">
						<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
							<i class="si si-close text-white"></i>
						</button>
					</div>
				</div>
				<div class="block-content">
					<div class="block block-rounded">
						<div class="block-content">
							<div class="block block-rounded">
								<div class="block-content">
									<form action="<?=base_url('oprec/nilai_tutor/')?>" method="post">
										<div class="table-responsive">
											<table class="table table-bordered table-vcenter">
												<thead>
												<tr class="table-active">
													<th class="text-center" style="width: 10%;"><b>Penyampaian</b></th>
													<th class="text-center" style="width: 10%;"><b>Penguasaan</b></th>
													<th class="text-center" style="width: 10%;"><b>Pengetahuan</b></th>
												</tr>
												</thead>
												<tbody>
												<tr>
													<input type="hidden" name="id_penilaian" class="form-control" value="<?=$detail['id_user']?>">
													<input type="hidden" name="nama" class="form-control" value="<?=$detail['nama']?>">
													<input type="hidden" name="email" class="form-control" value="<?=$detail['email']?>">
													<td class="text-center"><input type="text" class="form-control" name="penyampaian" placeholder="(Nilai)"></td>
													<td class="text-center"><input type="text" class="form-control" name="penguasaan" placeholder="(Nilai)"></td>
													<td class="text-center"><input type="text" class="form-control" name="pengetahuan" placeholder="(Nilai)"></td>
												</tr>
												</tbody>
											</table>
											<br>
											<table class="table table-bordered table-vcenter">
												<thead>
												<tr class="table-active">
													<th class="text-center" style="width: 10%;"><b>Kerapihan</b></th>
													<th class="text-center" style="width: 10%;"><b>Ketegasan</b></th>
													<th class="text-center" style="width: 20%;"><b>Rekomendasi</b></th>
													<th class="text-center" style="width: 20%;"><b>Nama Penilai</b></th>
												</tr>
												</thead>
												<tbody>
												<tr>
													<td class="text-center"><input type="text" class="form-control" name="kerapihan" placeholder="(Nilai)"></td>
													<td class="text-center"><input type="text" class="form-control" name="ketegasan" placeholder="(Nilai)"></td>
													<td class="text-center">
														<select class="form-control" name="rekomendasi" required>
															<option value=" ">Pilih</option>
															<option value="ya">Ya</option>
															<option value="tidak">Tidak</option>
														</select>
													</td>
													<td class="text-center"><input type="text" class="form-control" name="nama_penilai" placeholder="Nama Penilai"></td>
												</tr>
												</tbody>
											</table>
										</div>
										<br>
										<div class="form-group">
											<button type="submit" name="submit" class="block-content block-content-full block-content-sm btn btn-alt-primary">Submit</button>
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

<?php
$this->db->select("id_penilaian, penyampaian, penguasaan, pengetahuan, kerapihan, ketegasan, rekomendasi, nama_penilai");
$this->db->from('manlan_nilaitutor');
$this->db->join('manlan_admin', 'id_penilaian = id_user');
$asisten = $this->db->get()->result_array();
foreach ($asisten as $detail) : ?>
	<div class="modal fade" id="hasil_nilaitutor<?=$detail['id_penilaian'] ?>" tabindex="-1" role="dialog" aria-labelledby="hasil_nilaitutor" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-fromleft modal-dialog-popou" role="document">
			<div class="modal-content">
				<div class="block block-themed block-transparent mb-0">
					<div class="block-header bg-primary-dark">
						<h3 class="block-title">Penilaian</h3>
						<div class="block-options">
							<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
								<i class="si si-close"></i>
							</button>
						</div>
					</div>
					<div class="block-content">
						<div class="block block-rounded">
							<div class="block-content">
								<div class="block block-rounded">
									<div class="block-content">
										<div class="table-responsive">
											<table class="table table-bordered table-vcenter">
												<thead>
												<tr class="table-active">
													<th class="text-center" style="width: 10%;"><b>Penyampaian</b></th>
													<th class="text-center" style="width: 10%;"><b>Penguasaan</b></th>
													<th class="text-center" style="width: 10%;"><b>Pengetahuan</b></th>
													<th class="text-center" style="width: 10%;"><b>Kerapihan</b></th>
													<th class="text-center" style="width: 10%;"><b>Ketegasan</b></th>
													<th class="text-center" style="width: 20%;"><b>Rekomendasi</b></th>
													<th class="text-center" style="width: 20%;"><b>Nama Penilai</b></th>
												</tr>
												</thead>
												<tbody>
												<!-- Koneksi DB -->
												<?php
												$id_peserta = $detail['id_penilaian'];
												$this->db->select('*');
												$this->db->from('manlan_nilaitutor');
												$this->db->where('id_penilaian', $id_peserta);
												$peserta = $this->db->get()->result_array();
												$no=1;
												?>
												<?php foreach ($peserta as $nilai_peserta) : ?>
													<tr>
														<td class="text-center"><?=$nilai_peserta['penyampaian']?></td>
														<td class="text-center"><?=$nilai_peserta['penguasaan']?></td>
														<td class="text-center"><?=$nilai_peserta['pengetahuan']?></td>
														<td class="text-center"><?=$nilai_peserta['kerapihan']?></td>
														<td class="text-center"><?=$nilai_peserta['ketegasan']?></td>
														<td class="text-center">
															<?php
															if ($nilai_peserta['rekomendasi'] == 'ya'){
																?>
																<button type="button" class="btn btn-sm btn-circle btn-alt-success mr-5 mb-5">
																	<i class="fa fa-check"></i>
																</button>
																<?php
															}
															else if ($nilai_peserta['rekomendasi'] == 'tidak'){
																?>
																<button type="button" class="btn btn-sm btn-circle btn-alt-danger mr-5 mb-5">
																	<i class="fa fa-times"></i>
																</button>
																<?php
															}
															else{
																?><span> </span><?php
															}
															?>
														</td>
														<td class="text-center"><?=$nilai_peserta['nama_penilai']?></td>
													</tr>
												<?php endforeach ?>
												</tbody>
											</table>
										</div>
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
<!-- End Tutor -->

<!-- Wawancara -->
<?php
$list_sebagai = array('calonasisten', 'calonprogrammer');
$this->db->select('*');
$this->db->from('manlan_admin');
$this->db->where_in('sebagai', $list_sebagai);
$asisten = $this->db->get()->result_array();
foreach ($asisten as $detail) : ?>
	<div class="modal fade" id="nilai_asistenwawancara<?= $detail['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="nilai_asistenwawancara" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-fromleft modal-dialog-popout" role="document">
			<div class="modal-content rounded">
				<div class="block block-rounded block-transparent bg-pattern mb-0" style="background-image: url(<?=base_url('assets/admin/')?>'assets/media/various/bg-pattern-inverse.png');">
					<div class="block-header bg-primary-dark">
						<h3 class="block-title text-white">Penilaian</h3>
						<div class="block-options">
							<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
								<i class="si si-close text-white"></i>
							</button>
						</div>
					</div>
					<div class="block-content">
						<div class="block block-rounded">
							<div class="block-content">
								<div class="block block-rounded">
									<div class="block-content">
										<form action="<?=base_url('oprec/nilai_wawancara/')?>" method="post">
											<div class="table-responsive">
												<table class="table table-bordered table-vcenter">
													<thead>
													<tr class="table-active">
														<th class="text-center" style="width: 10%;"><b>Komentar</b></th>
													</tr>
													</thead>
													<tbody>
													<tr>
														<input type="hidden" name="id_penilaian" class="form-control" value="<?=$detail['id_user']?>">
														<input type="hidden" name="nama" class="form-control" value="<?=$detail['nama']?>">
														<input type="hidden" name="email" class="form-control" value="<?=$detail['email']?>">
														<td class="text-center"><textarea type="text" class="form-control" name="komentar" placeholder="..."></textarea></td>
													</tr>
													</tbody>
												</table>
												<br>
												<table class="table table-bordered table-vcenter">
													<thead>
													<tr class="table-active">
														<th class="text-center" style="width: 20%;"><b>Rekomendasi</b></th>
														<th class="text-center" style="width: 20%;"><b>Nama Penilai</b></th>
													</tr>
													</thead>
													<tbody>
													<tr>
														<td class="text-center">
															<select class="form-control" name="rekomendasi" required>
																<option value=" ">Pilih</option>
																<option value="ya">Ya</option>
																<option value="tidak">Tidak</option>
															</select>
														</td>
														<td class="text-center"><input type="text" class="form-control" name="nama_penilai" placeholder="Nama Penilai"></td>
													</tr>
													</tbody>
												</table>
											</div>
											<br>
											<div class="form-group">
												<button type="submit" name="submit" class="block-content block-content-full block-content-sm btn btn-alt-primary">Submit</button>
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

<?php
$this->db->select("id_penilaian, komentar, rekomendasi, nama_penilai");
$this->db->from('manlan_nilaiwawancara');
$this->db->join('manlan_admin', 'id_penilaian = id_user');
$asisten = $this->db->get()->result_array();
foreach ($asisten as $detail) : ?>
	<div class="modal fade" id="hasil_nilaiwawancara<?= $detail['id_penilaian'] ?>" tabindex="-1" role="dialog" aria-labelledby="hasil_nilaiwawancara" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-fromleft modal-dialog-popou" role="document">
			<div class="modal-content">
				<div class="block block-themed block-transparent mb-0">
					<div class="block-header bg-primary-dark">
						<h3 class="block-title">Penilaian</h3>
						<div class="block-options">
							<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
								<i class="si si-close"></i>
							</button>
						</div>
					</div>
					<div class="block-content">
						<div class="block block-rounded">
							<div class="block-content">
								<div class="block block-rounded">
									<div class="block-content">
										<div class="table-responsive">
											<table class="table table-bordered table-vcenter">
												<thead>
												<tr class="table-active">
													<th class="text-center" style="width: 10%;"><b>Komentar</b></th>
													<th class="text-center" style="width: 20%;"><b>Rekomendasi</b></th>
													<th class="text-center" style="width: 20%;"><b>Nama Penilai</b></th>
												</tr>
												</thead>
												<tbody>
												<!-- Koneksi DB -->
												<?php
												$id_peserta = $detail['id_penilaian'];
												$this->db->select('*');
												$this->db->from('manlan_nilaiwawancara');
												$this->db->where('id_penilaian', $id_peserta);
												$peserta = $this->db->get()->result_array();
												$no=1;
												?>
												<?php foreach ($peserta as $nilai_peserta) : ?>
													<tr>
														<td class="text-center"><?=$nilai_peserta['komentar']?></td>
														<td class="text-center">
															<?php
															if ($nilai_peserta['rekomendasi'] == 'ya'){
																?>
																<button type="button" class="btn btn-sm btn-circle btn-alt-success mr-5 mb-5">
																	<i class="fa fa-check"></i>
																</button>
																<?php
															}
															else if ($nilai_peserta['rekomendasi'] == 'tidak'){
																?>
																<button type="button" class="btn btn-sm btn-circle btn-alt-danger mr-5 mb-5">
																	<i class="fa fa-times"></i>
																</button>
																<?php
															}
															else{
																?><span> </span><?php
															}
															?>
														</td>
														<td class="text-center"><?=$nilai_peserta['nama_penilai']?></td>
													</tr>
												<?php endforeach ?>
												</tbody>
											</table>
										</div>
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
<!-- End Wawancara -->

<!-- Pemrograman -->
<?php
$list_sebagai = array('calonasisten', 'calonprogrammer');
$this->db->select('*');
$this->db->from('manlan_admin');
$this->db->where_in('sebagai', $list_sebagai);
$asisten = $this->db->get()->result_array();
foreach ($asisten as $detail) : ?>
	<div class="modal fade" id="nilai_asistenpemrograman<?= $detail['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="nilai_asistenpemrograman" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-fromleft modal-dialog-popout" role="document">
			<div class="modal-content rounded">
				<div class="block block-rounded block-transparent bg-pattern mb-0" style="background-image: url(<?=base_url('assets/admin/')?>'assets/media/various/bg-pattern-inverse.png');">
					<div class="block-header bg-primary-dark">
						<h3 class="block-title text-white">Penilaian</h3>
						<div class="block-options">
							<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
								<i class="si si-close text-white"></i>
							</button>
						</div>
					</div>
					<div class="block-content">
						<div class="block block-rounded">
							<div class="block-content">
								<div class="block block-rounded">
									<div class="block-content">
										<form action="<?=base_url('oprec/nilai_programmer/')?>" method="post">
											<div class="table-responsive">
												<table class="table table-bordered table-vcenter">
													<thead>
													<tr class="table-active">
														<th class="text-center" style="width: 10%;"><b>Kecepatan</b></th>
														<th class="text-center" style="width: 10%;"><b>Ketepatan</b></th>
														<th class="text-center" style="width: 10%;"><b>Rekomendasi</b></th>
														<th class="text-center" style="width: 10%;"><b>Nama Penilai</b></th>
													</tr>
													</thead>
													<tbody>
													<tr>
														<input type="hidden" name="id_penilaian" class="form-control" value="<?=$detail['id_user']?>">
														<input type="hidden" name="nama" class="form-control" value="<?=$detail['nama']?>">
														<input type="hidden" name="email" class="form-control" value="<?=$detail['email']?>">
														<td class="text-center"><input type="text" class="form-control" name="kecepatan" placeholder="(Nilai)"></td>
														<td class="text-center"><input type="text" class="form-control" name="ketepatan" placeholder="(Nilai)"></td>
														<td class="text-center">
															<select class="form-control" name="rekomendasi" required>
																<option value=" ">Pilih</option>
																<option value="ya">Ya</option>
																<option value="tidak">Tidak</option>
															</select>
														</td>
														<td class="text-center"><input type="text" class="form-control" name="nama_penilai" placeholder="Nama Penilai"></td>
													</tr>
													</tbody>
												</table>
											</div>
											<br>
											<div class="form-group">
												<button type="submit" name="submit" class="block-content block-content-full block-content-sm btn btn-alt-primary">Submit</button>
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

<?php
$this->db->select("id_penilaian, ketepatan, kecepatan, rekomendasi, nama_penilai");
$this->db->from('manlan_nilaiprogrammer');
$this->db->join('manlan_admin', 'id_penilaian = id_user');
$asisten = $this->db->get()->result_array();
foreach ($asisten as $detail) : ?>
	<div class="modal fade" id="hasil_nilaipemrograman<?= $detail['id_penilaian'] ?>" tabindex="-1" role="dialog" aria-labelledby="hasil_nilaipemrograman" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-fromleft modal-dialog-popou" role="document">
			<div class="modal-content">
				<div class="block block-themed block-transparent mb-0">
					<div class="block-header bg-primary-dark">
						<h3 class="block-title">Penilaian</h3>
						<div class="block-options">
							<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
								<i class="si si-close"></i>
							</button>
						</div>
					</div>
					<div class="block-content">
						<div class="block block-rounded">
							<div class="block-content">
								<div class="block block-rounded">
									<div class="block-content">
										<div class="table-responsive">
											<table class="table table-bordered table-vcenter">
												<thead>
												<tr class="table-active">
													<th class="text-center" style="width: 10%;"><b>Kecepatan</b></th>
													<th class="text-center" style="width: 10%;"><b>Ketepatan</b></th>
													<th class="text-center" style="width: 20%;"><b>Rekomendasi</b></th>
													<th class="text-center" style="width: 20%;"><b>Nama Penilai</b></th>
												</tr>
												</thead>
												<tbody>
												<!-- Koneksi DB -->
												<?php
												$id_peserta = $detail['id_penilaian'];
												$this->db->select('*');
												$this->db->from('manlan_nilaiprogrammer');
												$this->db->where('id_penilaian', $id_peserta);
												$peserta = $this->db->get()->result_array();
												$no=1;
												?>
												<?php foreach ($peserta as $nilai_peserta) : ?>
													<tr>
														<td class="text-center"><?=$nilai_peserta['kecepatan']?></td>
														<td class="text-center"><?=$nilai_peserta['ketepatan']?></td>
														<td class="text-center">
															<?php
															if ($nilai_peserta['rekomendasi'] == 'ya'){
																?>
																<button type="button" class="btn btn-sm btn-circle btn-alt-success mr-5 mb-5">
																	<i class="fa fa-check"></i>
																</button>
																<?php
															}
															else if ($nilai_peserta['rekomendasi'] == 'tidak'){
																?>
																<button type="button" class="btn btn-sm btn-circle btn-alt-danger mr-5 mb-5">
																	<i class="fa fa-times"></i>
																</button>
																<?php
															}
															else{
																?><span> </span><?php
															}
															?>
														</td>
														<td class="text-center"><?=$nilai_peserta['nama_penilai']?></td>
													</tr>
												<?php endforeach ?>
												</tbody>
											</table>
										</div>
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
<!-- End Pemrograman -->
