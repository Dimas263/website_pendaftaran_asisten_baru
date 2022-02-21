<!-- Main Container -->
<main id="main-container">
	<!-- Page Content -->
	<div class="content">
		<?php
		if($this->session->userdata('sebagai') == 'calonasisten' || $this->session->userdata('sebagai') == 'calonprogrammer' || $this->session->userdata('sebagai') == 'admin'){ ?>
		<!-- peserta -->
		<nav class="breadcrumb bg-white push">
			<a class="breadcrumb-item" href="">Manlan</a>
			<span class="breadcrumb-item active">Tahap 3 - Staff</span>
			<span class="breadcrumb-item active">Peserta</span>
			<span class="breadcrumb-item active"><?=ucfirst($this->auth_libs->user_login()->nama);?></span>
		</nav>
		<?php
			$lock_staff = $this->auth_libs->user_login()->seleksi_wawancara;
			if ($lock_staff == 'ya'){
				$this->load->view('admin/oprec/hasil_seleksi/staff');
			}
			else{
				$this->load->view('404');
			}
		?>
		<!-- END peserta-->
		<?php } ?>

		<?php
		if($this->session->userdata('sebagai') == 'staff' || $this->session->userdata('sebagai') == 'admin'){ ?>
		<!-- staff -->
		<nav class="breadcrumb bg-white push">
			<a class="breadcrumb-item" href="">Manlan</a>
			<span class="breadcrumb-item active">Tahap 3 - Staff</span>
			<span class="breadcrumb-item active">Staff</span>
			<span class="breadcrumb-item active"><?=ucfirst($this->auth_libs->user_login()->nama);?></span>
		</nav>
		<div class="block block-rounded">
			<div class="block-content">
              <?php $this->load->view('admin/oprec/total_seleksistaff');?>
				<table class="table table-borderless mb-6">
					<tbody>
						<tr class="table-active">
							<th class="text-center font-size-h5 bg-primary" style="width: 20px;">
								<a class="text-white" href="">Tahap 3 - Wawancara Staff</a>
							</th>
						</tr>
					</tbody>
				</table>
				<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
					<thead>
					<tr class="table-active">
						<th class="text-center" style="width: 8%;"><b>No</b></th>
						<th class="text-left" style="width: 28%;"><b>Nama</b></th>
						<th class="text-center" style="width: 25%;"><b>Sebagai</b></th>
						<th class="text-center" style="width: 20%;"><b>Status</b></th>
						<th class="text-center" style="width: 20%;"><b>Nilai</b></th>
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
								<?php
								if($aslab['seleksi_staff'] == 'ya'){
									?>
									<span class="badge badge-success">Lulus</span>
									<?php
								}
								else if($aslab['seleksi_staff'] == 'tidak'){
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
							</td>
							<td class="text-center">
								<div class="btn-group">
									<button type="button" class="btn btn-sm btn-alt-primary" data-toggle="modal" data-target="#nilai_asisten<?= $aslab['id_user'] ?>" title="Nilai">
										<i>Nilai</i>
									</button>
									&nbsp;&nbsp;&nbsp;
									<button type="button" class="btn btn-sm btn-alt-primary" data-toggle="modal" data-target="#hasil_nilai<?= $aslab['id_user'] ?>" title="Review">
										<i>Review</i>
									</button>
								</div>
							</td>
						</tr>
						<?php endforeach ?>
						</tbody>
				</table>
			</div>
		</div>
		<!-- END staff -->
		<?php } ?>

		<?php
		if($this->session->userdata('sebagai') == 'asisten' || $this->session->userdata('sebagai') == 'programmer' || $this->session->userdata('sebagai') == 'admin'){ ?>
		<!-- asisten -->
		<nav class="breadcrumb bg-white push">
			<a class="breadcrumb-item" href="">Manlan</a>
			<span class="breadcrumb-item active">Tahap 3 - Staff</span>
			<span class="breadcrumb-item active">Asisten & Programmer</span>
			<span class="breadcrumb-item active"><?=ucfirst($this->auth_libs->user_login()->nama);?></span>
		</nav>
		<div class="block block-rounded">
			<div class="block-content">
				<div class="block block-rounded">
					<div class="block-content">
                      <?php $this->load->view('admin/oprec/total_seleksistaff');?>
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
								<thead>
								<tr class="table-active">
									<th class="text-center" style="width: 5%;"><b>No</b></th>
									<th class="text-left" style="width: 20%;"><b>Nama</b></th>
									<th class="text-center" style="width: 20%;"><b>Sebagai</b></th>
									<th class="text-center" style="width:10%;"><b>Status</b></th>
									<th class="text-center" style="width: 20%;"><b>Nilai</b></th>
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
											if($aslab['seleksi_staff'] == 'ya'){
												?>
												<span class="badge badge-success">Lulus</span>
												<?php
											}
											else if($aslab['seleksi_staff'] == 'tidak'){
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
												<button type="button" class="btn btn-sm btn-alt-primary" data-toggle="modal" data-target="#hasil_nilai<?= $aslab['id_user'] ?>" title="Review">
													<i>Review</i>
												</button>
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
		<!-- END asisten -->
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
	<div class="modal fade" id="nilai_asisten<?= $detail['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="nilai_asisten" aria-hidden="true">
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
										<form action="<?=base_url('oprec/nilai_staff/')?>" method="post">
											<div class="table-responsive">
												<table class="table table-bordered table-vcenter">
													<thead>
													<tr class="table-active">
														<th class="text-center" style="width: 10%;"><b>Penyampaian</b></th>
														<th class="text-center" style="width: 10%;"><b>Penguasaan</b></th>
														<th class="text-center" style="width: 10%;"><b>Pengetahuan</b></th>
														<th class="text-center" style="width: 10%;"><b>Kerapihan</b></th>
														<th class="text-center" style="width: 10%;"><b>Ketegasan</b></th>
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
														<td class="text-center"><input type="text" class="form-control" name="kerapihan" placeholder="(Nilai)"></td>
														<td class="text-center"><input type="text" class="form-control" name="ketegasan" placeholder="(Nilai)"></td>
													</tr>
													</tbody>
												</table>
												<br>
												<table class="table table-bordered table-vcenter">
													<thead>
													<tr class="table-active">
														<th class="text-center" style="width: 20%;"><b>Komentar</b></th>
														<th class="text-center" style="width: 20%;"><b>Rekomendasi</b></th>
														<th class="text-center" style="width: 20%;"><b>Nama Penilai</b></th>
													</tr>
													</thead>
													<tbody>
													<tr>
														<td class="text-center"><textarea type="text" class="form-control" name="komentar" placeholder="..."></textarea></td>
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
$this->db->select("id_penilaian, penyampaian, penguasaan, pengetahuan, kerapihan, ketegasan, komentar, rekomendasi, nama_penilai");
$this->db->from('manlan_nilaistaff');
$this->db->join('manlan_admin', 'id_penilaian = id_user');
$asisten = $this->db->get()->result_array();
foreach ($asisten as $detail) : ?>
	<div class="modal fade" id="hasil_nilai<?= $detail['id_penilaian'] ?>" tabindex="-1" role="dialog" aria-labelledby="hasil_nilai" aria-hidden="true">
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
													<th class="text-center" style="width: 20%;"><b>Komentar</b></th>
													<th class="text-center" style="width: 20%;"><b>Rekomendasi</b></th>
													<th class="text-center" style="width: 20%;"><b>Nama Penilai</b></th>
												</tr>
												</thead>
												<tbody>
												<!-- Koneksi DB -->
												<?php
												$id_peserta = $detail['id_penilaian'];
												$this->db->select('*');
												$this->db->from('manlan_nilaistaff');
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

