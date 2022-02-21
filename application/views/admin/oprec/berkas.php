<!-- Main Container -->
<main id="main-container">
	<!-- Page Content -->
	<div class="content">
		<?php
		if($this->session->userdata('sebagai') == 'calonasisten' || $this->session->userdata('sebagai') == 'calonprogrammer' || $this->session->userdata('sebagai') == 'admin'){ ?>
		<!-- Peserta -->
		<nav class="breadcrumb bg-white push">
			<a class="breadcrumb-item" href="">Manlan</a>
			<span class="breadcrumb-item active">Berkas</span>
			<span class="breadcrumb-item active">Peserta</span>
			<span class="breadcrumb-item active"><?=ucfirst($this->auth_libs->user_login()->nama);?></span>
		</nav>
		<div class="row">
			<div class="col-md-6">
				<div class="block block-content">
					<table class="table table-bordered">
						<div class="col-md-12">
							<a class="block text-center" href="javascript:void(0)">
								<div class="block-content block-content-full bg-gd-dusk">
									<img class="img-avatar img-avatar-thumb" src="<?=base_url('assets/upload/foto/')?><?=$this->auth_libs->user_login()->nama?>/<?=$this->auth_libs->user_login()->foto?>" alt="">
								</div>
								<div class="block-content block-content-full">
									<div class="font-w600 mb-5"><?=$this->auth_libs->user_login()->nama?></div>
									<div class="font-size-sm text-muted"><?=$this->auth_libs->user_login()->sebagai?></div>
								</div>
								<div class="block-content block-content-full block-content-sm bg-body-light">
									<span class="font-w600 font-size-sm text-elegance"><?=$this->auth_libs->user_login()->email?></span>
								</div>
							</a>
						</div>
					</table>
					<div class="block-header block-header-default">
						<h3 class="block-title"><b>Berkas</b></h3>
					</div>
					<div class="block-content">
						<?php
						if($this->auth_libs->user_login()->cv == '' && $this->auth_libs->user_login()->surat_lamaran == '' && $this->auth_libs->user_login()->rangkuman_nilai == '' && $this->auth_libs->user_login()->krs_upload == '' && $this->auth_libs->user_login()->ktm_upload == ''){
							?>
							<!--<form action="<?=base_url('Oprec/upload_berkas')?>" method="post">-->
							<?php echo form_open_multipart('Oprec/upload_berkas');?>
							<span class="block-title text-center text-danger"><b>Upload dalam bentuk pdf<br>maksimal ukuran setiap berkas yang diupload 2 MB</b></span>
								<div class="form-group">
									<br>
									<label for="example-nf-nama">CV</label><br>
									<input type="hidden" name="id_user" class="form-control" value="<?=$this->auth_libs->user_login()->id_user?>">
									<input type="hidden" name="nama_user" class="form-control" value="<?=$this->auth_libs->user_login()->nama?>">
									<input type="file" data-toggle="tooltip" title="Upload" name="cv">
								</div>
								<div class="form-group">
									<label for="example-nf-npm">Surat Lamaran</label><br>
									<input type="file" data-toggle="tooltip" title="Upload" name="surat_lamaran">
								</div>
								<div class="form-group">
									<label for="example-nf-kelas">Rangkuman Nilai</label><br>
									<input type="file" data-toggle="tooltip" title="Upload" name="rangkuman_nilai">
								</div>
								<div class="form-group">
									<label for="example-nf-email">KRS</label><br>
									<input type="file" data-toggle="tooltip" title="Upload" name="krs">
								</div>
								<div class="form-group">
									<label for="example-nf-telepon">KTM</label><br>
									<input type="file" data-toggle="tooltip" title="Upload" name="ktm">
								</div>
								<div class="form-group">
									<label for="example-nf-region">Sertifikat(Jika Ada)</label><br>
									<input type="file" data-toggle="tooltip" title="Upload" name="sertifikat">
								</div>
								<br>
								<div class="form-group">
									<button type="submit" name="submit" class="block-content block-content-full block-content-sm btn btn-alt-primary">Submit</button>
								</div>
							</form>
							<?php
						}
						else{
							?>
							<div class="block-header block-header-default bg-success">
								<h3 class="block-title text-center"><b>Berkas Sudah Diupload</b></h3>
							</div>
							<br>
							<?php
						}
						?>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="block block-content">
					<div class="block-header block-header-default">
						<h3 class="block-title"><b>Biodata</b></h3>
					</div>
					<div class="block-content">
						<?php
						if($this->auth_libs->user_login()->kelas == '' || $this->auth_libs->user_login()->telepon == '' || $this->auth_libs->user_login()->region == '' || $this->auth_libs->user_login()->angkatan == '' || $this->auth_libs->user_login()->lahir == '' || $this->auth_libs->user_login()->alamat == ''){
							?>
							<form action="<?=base_url('Oprec/biodata')?>" method="post">
								<div class="form-group">
									<label for="example-nf-nama">Nama</label>
									<input type="hidden" name="id_user" class="form-control" value="<?=$this->auth_libs->user_login()->id_user?>">
									<input type="text" name="nama" class="form-control" id="example-nf-nama" value="<?=$this->auth_libs->user_login()->nama?>" placeholder="<?=$this->auth_libs->user_login()->nama?>">
								</div>
								<div class="form-group">
									<label for="example-nf-npm">NPM</label>
									<input type="text" name="npm" class="form-control" id="example-nf-npm" value="<?=$this->auth_libs->user_login()->npm?>" placeholder="<?=$this->auth_libs->user_login()->npm?>">
								</div>
								<div class="form-group">
									<label for="example-nf-kelas">Kelas</label>
									<input type="text" name="kelas" class="form-control" id="example-nf-kelas" value="<?=$this->auth_libs->user_login()->kelas?>" placeholder="<?=$this->auth_libs->user_login()->kelas?>">
								</div>
								<div class="form-group">
									<label for="example-nf-email">Email</label>
									<input type="email" name="email" class="form-control" id="example-nf-email" value="<?=$this->auth_libs->user_login()->email?>" placeholder="<?=$this->auth_libs->user_login()->email?>">
								</div>
								<div class="form-group">
									<label for="example-nf-telepon">No. Telepon</label>
									<input type="text" name="telepon" class="form-control" id="example-nf-telepon" value="<?=$this->auth_libs->user_login()->telepon?>" placeholder="<?=$this->auth_libs->user_login()->telepon?>">
								</div>
								<div class="form-group">
									<label for="example-nf-region">Region</label>
									<select class="form-control" name="region" id="region" required>
										<option value="<?=$this->auth_libs->user_login()->region?>"><?=$this->auth_libs->user_login()->region?></option>
										<option value="depok">Depok</option>
										<option value="kalimalang">Kalimalang</option>
										<option value="karawaci">Karawaci</option>
										<option value="cengkareng">Cengkareng</option>
									</select>
								</div>
								<div class="form-group">
									<label for="example-nf-jurusan">Jurusan</label>
									<select class="form-control" name="jurusan" id="jurusan" required>
										<option value="<?=$this->auth_libs->user_login()->jurusan?>"><?=$this->auth_libs->user_login()->jurusan?></option>
										<option value="s1-manajemen">S1-Manajemen</option>
										<option value="s1-akuntansi">S1-Akuntansi</option>
										<option value="s1-teknik-inromatika">S1-Teknik Informatika</option>
										<option value="s1-sistem-informasi">S1-Sistem Informasi</option>
										<option value="s1-sistem-komputer">S1-Sistem Komputer</option>
										<option value="d3-manajemen">D3-Manajemen</option>
										<option value="d3-akuntansi">D3-Akuntansi</option>
										<option value="d3-manajemen-informatika">D3-Manajemen Informatika</option>
									</select>
								</div>
								<div class="form-group">
									<label for="example-nf-angkatan">Angkatan</label>
									<input type="text" name="angkatan" class="form-control" id="example-nf-angkatan" value="<?=$this->auth_libs->user_login()->angkatan?>" placeholder="<?=$this->auth_libs->user_login()->angkatan?>">
								</div>
								<div class="form-group">
									<label for="example-nf-ttl">Tempat & Tanggal Lahir</label>
									<input type="date" name="ttl" class="form-control" id="example-nf-ttl" value="<?=$this->auth_libs->user_login()->lahir?>" placeholder="<?=$this->auth_libs->user_login()->lahir?>">
								</div>
								<div class="form-group">
									<label class="col-12" for="example-alamat-input">Alamat</label>
									<textarea type="text" name="alamat" class="form-control" id="example-alamat-input" rows="6" placeholder="<?=$this->auth_libs->user_login()->alamat?>" required></textarea>
								</div>
								<div class="form-group">
									<button type="submit" name="submit" class="block-content block-content-full block-content-sm btn btn-alt-primary">Submit</button>
								</div>
							</form>
							<?php
						}
						else{
							?>
							<div class="block-header block-header-default bg-success">
								<h3 class="block-title text-center"><b>Biodata Sudah Diupload</b></h3>
							</div>
							<br>
							<a data-toggle="modal" data-target="#berkas_asisten<?=$this->auth_libs->user_login()->id_user?>">
								<div class="block-header block-header-default bg-warning">
									<h3 class="block-title text-center"><b>Review</b></h3>
								</div>
							</a>
							<br>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<!-- END Peserta -->
		<?php } ?>

		<?php
		if($this->session->userdata('sebagai') == 'asisten' || $this->session->userdata('sebagai') == 'programmer' || $this->session->userdata('sebagai') == 'admin'){ ?>
		<!-- Asisten & Programmer -->
		<nav class="breadcrumb bg-white push">
			<a class="breadcrumb-item" href="">Manlan</a>
			<span class="breadcrumb-item active">Berkas</span>
			<span class="breadcrumb-item active">Asisten & Programmer</span>
			<span class="breadcrumb-item active"><?=ucfirst($this->auth_libs->user_login()->nama);?></span>
		</nav>
		<div class="block block-rounded">
			<div class="block-content">
				<div class="block block-rounded">
					<div class="block-content">
                      <?php $this->load->view('admin/oprec/total_seleksiberkas');?>
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-vcenter" id="tabel-peserta">
								<thead>
									<tr class="table-active">
										<th class="text-center" style="width: 100px;"><b>Foto</b></th>
										<th><b>Nama</b></th>
										<th class="text-center" style="width: 20%;"><b>Kelas</b></th>
										<th class="text-center" style="width: 20%;"><b>Sebagai</b></th>
										<th class="text-center" style="width: 20%;"><b>CV</b></th>
										<th class="text-center" style="width: 20%;"><b>Surat</b></th>
										<th class="text-center" style="width: 20%;"><b>Nilai</b></th>
										<th class="text-center" style="width: 20%;"><b>Krs</b></th>
										<th class="text-center" style="width: 20%;"><b>Ktm</b></th>
										<th class="text-center" style="width: 20%;"><b>Sertif</b></th>
										<th class="text-center" style="width: 15%;"><b>Status</b></th>
										<th class="text-center" style="width: 100px;"><b>Hasil_Seleksi</b></th>
										<th class="text-center" style="width: 100px;"><b><i class="fa fa-cog"></i></b></th>
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
										<td class="font-w600"><b><?=$aslab['kelas']?></b></td>										<?php
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
										<td>
											<?php
											if($aslab['cv'] == ''){
												?>
												<img src="https://img.icons8.com/ios-filled/26/fa314a/multiply.png"/><br>Tidak
												<?php
											}
											else{
												?>
												<img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/26e07f/external-approved-checkmark-symbol-to-verify-the-result-basic-bold-tal-revivo.png"/><br>Ya
												<?php
											}
											?>
										</td>
										<td>
											<?php
											if($aslab['surat_lamaran'] == ''){
												?>
												<img src="https://img.icons8.com/ios-filled/26/fa314a/multiply.png"/><br>Tidak
												<?php
											}
											else{
												?>
												<img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/26e07f/external-approved-checkmark-symbol-to-verify-the-result-basic-bold-tal-revivo.png"/><br>Ya

												<?php
											}
											?>
										</td>
										<td>
											<?php
											if($aslab['rangkuman_nilai'] == ''){
												?>
												<img src="https://img.icons8.com/ios-filled/26/fa314a/multiply.png"/><br>Tidak
												<?php
											}
											else{
												?>
												<img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/26e07f/external-approved-checkmark-symbol-to-verify-the-result-basic-bold-tal-revivo.png"/><br>Ya

												<?php
											}
											?>
										</td>
										<td>
											<?php
											if($aslab['krs_upload'] == ''){
												?>
												<img src="https://img.icons8.com/ios-filled/26/fa314a/multiply.png"/><br>Tidak
												<?php
											}
											else{
												?>
												<img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/26e07f/external-approved-checkmark-symbol-to-verify-the-result-basic-bold-tal-revivo.png"/><br>Ya

												<?php
											}
											?>
										</td>
										<td>
											<?php
											if($aslab['ktm_upload'] == ''){
												?>
												<img src="https://img.icons8.com/ios-filled/26/fa314a/multiply.png"/><br>Tidak
												<?php
											}
											else{
												?>
												<img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/26e07f/external-approved-checkmark-symbol-to-verify-the-result-basic-bold-tal-revivo.png"/><br>Ya

												<?php
											}
											?>
										</td>
										<td>
											<?php
											if($aslab['sertifikat'] == ''){
												?>
												<img src="https://img.icons8.com/ios-filled/26/fa314a/multiply.png"/><br>Tidak
												<?php
											}
											else{
												?>
												<img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/26e07f/external-approved-checkmark-symbol-to-verify-the-result-basic-bold-tal-revivo.png"/><br>Ya

												<?php
											}
											?>
										</td>
										<td class="text-center">
											<?php
											if($aslab['seleksi_berkas'] == 'ya'){
												?>
												<span class="badge badge-success">Lulus</span>
												<?php
											}
											else if($aslab['seleksi_berkas'] == 'tidak'){
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
											<form action="<?=base_url('Oprec/seleksi_berkas')?>" method="post">
												<div class="form-group">
													<input type="hidden" name="id_user" class="form-control" value="<?=$aslab['id_user']?>">
													<select class="form-control" name="seleksi_berkas" id="seleksi_berkas" required>
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
													<i>Cek Berkas</i>
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
			<span class="breadcrumb-item active">Berkas</span>
			<span class="breadcrumb-item active">Staff</span>
			<span class="breadcrumb-item active"><?=ucfirst($this->auth_libs->user_login()->nama);?></span>
		</nav>
		<div class="block block-rounded">
			<div class="block-content">
				<div class="block block-rounded">
					<div class="block-content">
                      <?php $this->load->view('admin/oprec/total_seleksiberkas');?>
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-vcenter" id="tabel-peserta">
								<thead>
								<tr class="table-active">
									<th class="text-center" style="width: 100px;"><b>Foto</b></th>
									<th><b>Nama</b></th>
									<th class="text-center" style="width: 20%;"><b>Kelas</b></th>
									<th class="text-center" style="width: 20%;"><b>Sebagai</b></th>
									<th class="text-center" style="width: 20%;"><b>CV</b></th>
									<th class="text-center" style="width: 20%;"><b>Surat</b></th>
									<th class="text-center" style="width: 20%;"><b>Nilai</b></th>
									<th class="text-center" style="width: 20%;"><b>Krs</b></th>
									<th class="text-center" style="width: 20%;"><b>Ktm</b></th>
									<th class="text-center" style="width: 20%;"><b>Sertif</b></th>
									<th class="text-center" style="width: 15%;"><b>Status</b></th>
									<th class="text-center" style="width: 100px;"><b><i class="fa fa-cog"></i></b></th>
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
										<td class="font-w600"><b><?=$aslab['kelas']?></b></td>
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
										<td>
											<?php
											if($aslab['cv'] == ''){
												?>
												<img src="https://img.icons8.com/ios-filled/26/fa314a/multiply.png"/><br>Tidak
												<?php
											}
											else{
												?>
												<img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/26e07f/external-approved-checkmark-symbol-to-verify-the-result-basic-bold-tal-revivo.png"/><br>Ya
												<?php
											}
											?>
										</td>
										<td>
											<?php
											if($aslab['surat_lamaran'] == ''){
												?>
												<img src="https://img.icons8.com/ios-filled/26/fa314a/multiply.png"/><br>Tidak
												<?php
											}
											else{
												?>
												<img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/26e07f/external-approved-checkmark-symbol-to-verify-the-result-basic-bold-tal-revivo.png"/><br>Ya
												<?php
											}
											?>
										</td>
										<td>
											<?php
											if($aslab['rangkuman_nilai'] == ''){
												?>
												<img src="https://img.icons8.com/ios-filled/26/fa314a/multiply.png"/><br>Tidak
												<?php
											}
											else{
												?>
												<img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/26e07f/external-approved-checkmark-symbol-to-verify-the-result-basic-bold-tal-revivo.png"/><br>Ya
												<?php
											}
											?>
										</td>
										<td>
											<?php
											if($aslab['krs_upload'] == ''){
												?>
												<img src="https://img.icons8.com/ios-filled/26/fa314a/multiply.png"/><br>Tidak
												<?php
											}
											else{
												?>
												<img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/26e07f/external-approved-checkmark-symbol-to-verify-the-result-basic-bold-tal-revivo.png"/><br>Ya
												<?php
											}
											?>
										</td>
										<td>
											<?php
											if($aslab['ktm_upload'] == ''){
												?>
												<img src="https://img.icons8.com/ios-filled/26/fa314a/multiply.png"/><br>Tidak
												<?php
											}
											else{
												?>
												<img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/26e07f/external-approved-checkmark-symbol-to-verify-the-result-basic-bold-tal-revivo.png"/><br>Ya
												<?php
											}
											?>
										</td>
										<td>
											<?php
											if($aslab['sertifikat'] == ''){
												?>
												<img src="https://img.icons8.com/ios-filled/26/fa314a/multiply.png"/><br>Tidak
												<?php
											}
											else{
												?>
												<img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/26e07f/external-approved-checkmark-symbol-to-verify-the-result-basic-bold-tal-revivo.png"/><br>Ya
												<?php
											}
											?>
										</td>
										<td class="text-center">
											<?php
											if($aslab['seleksi_berkas'] == 'ya'){
												?>
												<span class="badge badge-success">Lulus</span>
												<?php
											}
											else if($aslab['seleksi_berkas'] == 'tidak'){
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
													<i>Cek Berkas</i>
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
	<div class="modal fade" id="berkas_asisten<?= $detail['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="berkas_asiste" aria-hidden="true">
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
										<tr class="table-active">
											<th>Upload Berkas</th>
											<th class="text-right" style="width: 15px;"></th>
											<th class="text-right" style="width: 15px;"></th>
										</tr>
										<tr>
											<td>
												<?php
												if($detail['cv'] == ''){
													?>
													<img src="https://img.icons8.com/ios-filled/26/fa314a/multiply.png"/>
													<?php
												}
												else{
													?>
													<img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/26e07f/external-approved-checkmark-symbol-to-verify-the-result-basic-bold-tal-revivo.png"/>
													<?php
												}
												?>
												<a href="<?=base_url('assets/upload/dokumen/')?><?=$detail['nama']?>/<?= $detail['cv'] ?>" target="_blank">CV</a>
											</td>
										</tr>
										<tr>
											<td>
												<?php
												if($detail['surat_lamaran'] == ''){
													?>
													<img src="https://img.icons8.com/ios-filled/26/fa314a/multiply.png"/>
													<?php
												}
												else{
													?>
													<img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/26e07f/external-approved-checkmark-symbol-to-verify-the-result-basic-bold-tal-revivo.png"/>
													<?php
												}
												?>
												<a href="<?=base_url('assets/upload/dokumen/')?><?=$detail['nama']?>/<?= $detail['surat_lamaran'] ?>" target="_blank">Surat Lamaran</a>
											</td>
										</tr>
										<tr>
											<td>
												<?php
												if($detail['rangkuman_nilai'] == ''){
													?>
													<img src="https://img.icons8.com/ios-filled/26/fa314a/multiply.png"/>
													<?php
												}
												else{
													?>
													<img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/26e07f/external-approved-checkmark-symbol-to-verify-the-result-basic-bold-tal-revivo.png"/>
													<?php
												}
												?>
												<a href="<?=base_url('assets/upload/dokumen/')?><?=$detail['nama']?>/<?= $detail['rangkuman_nilai'] ?>" target="_blank">Rangkuman Nilai</a>
											</td>
										</tr>
										<tr>
											<td>
												<?php
												if($detail['krs_upload'] == ''){
													?>
													<img src="https://img.icons8.com/ios-filled/26/fa314a/multiply.png"/>
													<?php
												}
												else{
													?>
													<img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/26e07f/external-approved-checkmark-symbol-to-verify-the-result-basic-bold-tal-revivo.png"/>
													<?php
												}
												?>
												<a href="<?=base_url('assets/upload/dokumen/')?><?=$detail['nama']?>/<?= $detail['krs_upload'] ?>" target="_blank">KRS Aktif</a>
											</td>
										</tr>
										<tr>
											<td>
												<?php
												if($detail['ktm_upload'] == ''){
													?>
													<img src="https://img.icons8.com/ios-filled/26/fa314a/multiply.png"/>
													<?php
												}
												else{
													?>
													<img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/26e07f/external-approved-checkmark-symbol-to-verify-the-result-basic-bold-tal-revivo.png"/>
													<?php
												}
												?>
												<a href="<?=base_url('assets/upload/dokumen/')?><?=$detail['nama']?>/<?= $detail['ktm_upload'] ?>" target="_blank">KTM</a>
											</td>
										</tr>
										<tr>
											<td>
												<?php
												if($detail['sertifikat'] == ''){
													?>
													<img src="https://img.icons8.com/ios-filled/26/fa314a/multiply.png"/>
													<?php
												}
												else{
													?>
													<img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/26e07f/external-approved-checkmark-symbol-to-verify-the-result-basic-bold-tal-revivo.png"/>
													<?php
												}
												?>
												<a href="<?=base_url('assets/upload/dokumen/')?><?=$detail['nama']?>/<?= $detail['sertifikat'] ?>" target="_blank">Sertifikat</a>
											</td>
										</tr>
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
