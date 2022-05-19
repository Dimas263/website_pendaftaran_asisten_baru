<!-- Main Container -->
<main id="main-container">

	<!-- Hero -->
	<div class="bg-image" style="background-image: url(<?=base_url('assets/public/images/bangkinglab_ug_video.png')?>);">
		<div class="bg-black-op">
			<div class="content content-top text-center">
				<div class="py-50">
					<h1 class="font-w700 text-white mb-10">OPEN RECRUITMENT</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- END Hero -->

	<br>
	<!--
	<h3 class="text-center">
		Pendaftaran Berakhir<br>
		<p class="text-center text-primary" id="deadline"></p>
	</h3>
	-->

	<?php
	if($this->session->userdata('sebagai') == 'calonasisten' || $this->session->userdata('sebagai') == 'calonprogrammer' || $this->session->userdata('sebagai') == 'admin'){ ?>
	<!-- Page Content -->
	<div class="content">
		<!-- Peserta -->
		<nav class="breadcrumb bg-white push">
			<a class="breadcrumb-item" href="">Manlan</a>
			<span class="breadcrumb-item active">Home</span>
			<span class="breadcrumb-item active">Peserta</span>
			<span class="breadcrumb-item active"><?=ucfirst($this->auth_libs->user_login()->nama);?></span>
		</nav>
		<h3 class="text-center">Pencapaian Anda</h3>
		<h3 class="text-center">

				<?php
				$selek_berkas = $this->auth_libs->user_login()->seleksi_berkas;
				$selek_ujian = $this->auth_libs->user_login()->seleksi_ujian;
				$selek_wawancara = $this->auth_libs->user_login()->seleksi_wawancara;
				$selek_staff = $this->auth_libs->user_login()->seleksi_staff;

				if($selek_berkas != 'ya' && $selek_ujian != 'ya' && $selek_wawancara != 'ya' && $selek_staff != 'ya'){
					?>
					<div class="text-black">Tahap Berkas</div>
					<?php
				}
				?>
				<?php
				if($selek_berkas == 'ya' && $selek_ujian != 'ya' && $selek_wawancara != 'ya' && $selek_staff != 'ya'){
					?>
					<div class="text-black">Tahap Ujian</div>
					<?php
				}
				?>
				<?php
				if($selek_berkas == 'ya' && $selek_ujian == 'ya' && $selek_wawancara != 'ya' && $selek_staff != 'ya'){
					?>
					<div class="ext-black">Tahap Tutor, Wawancara, dan Pemrograman (Programmer)</div>
					<?php
				}
				?>
				<?php
				if($selek_berkas == 'ya' && $selek_ujian == 'ya' && $selek_wawancara == 'ya' && $selek_staff != 'ya'){
					?>
					<div class="text-black">Tahap Staff</div>
					<?php
				}
				?>
				<?php
				if($selek_berkas == 'ya' && $selek_ujian = 'ya' && $selek_wawancara == 'ya' && $selek_staff == 'ya'){
					?>
					<div class="text-black">Lulus Semua Seleksi</div>
					<?php
				}
				?>

		</h3>
		<!-- Pengumuman Bekas -->
		<?php
		$lock_ujian = $this->auth_libs->user_login()->seleksi_berkas;
		if ($lock_ujian == 'ya'){
			?>
			<nav class="breadcrumb bg-success push">
				<span class="breadcrumb-item active"><i class="fa fa-fw fa-check"></i> Selamat <?=ucfirst($this->auth_libs->user_login()->nama);?>, anda lulus <b>seleksi berkas</b></span>
			</nav>
			<?php
		}
		else if ($lock_ujian == 'tidak'){
			?>
			<nav class="breadcrumb bg-danger push">
				<span class="breadcrumb-item active"><i class="fa fa-fw fa-times"></i> Maaf <?=ucfirst($this->auth_libs->user_login()->nama);?>, anda tidak lulus <b>seleksi berkas</b></span>
			</nav>
			<?php
		}
		?>

		<!-- Pengumuman Ujian -->
		<?php
		$lock_wawancara = $this->auth_libs->user_login()->seleksi_ujian;
		if ($lock_wawancara == 'ya'){
			?>
			<nav class="breadcrumb bg-success push">
				<span class="breadcrumb-item active"><i class="fa fa-fw fa-check"></i> Selamat <?=ucfirst($this->auth_libs->user_login()->nama);?>, anda lulus <b>Tahap Ujian</b></span>
			</nav>
			<?php
		}
		else if ($lock_wawancara == 'tidak'){
			?>
			<nav class="breadcrumb bg-danger push">
				<span class="breadcrumb-item active"><i class="fa fa-fw fa-times"></i> Maaf <?=ucfirst($this->auth_libs->user_login()->nama);?>, anda tidak lulus <b>Tahap Ujian</b></span>
			</nav>
			<?php
		}
		?>

		<!-- Pengumuman Wawancara -->
		<?php
		$lock_staff = $this->auth_libs->user_login()->seleksi_wawancara;
		if ($lock_staff == 'ya'){
			?>
			<nav class="breadcrumb bg-success push">
				<span class="breadcrumb-item active"><i class="fa fa-fw fa-check"></i> Selamat <?=ucfirst($this->auth_libs->user_login()->nama);?>, anda lulus <b>Tahap 2 - Tutor, Wawancara, dan Pemrograman (Programmer)</b></span>
			</nav>
			<?php
		}
		else if ($lock_staff == 'tidak'){
			?>
			<nav class="breadcrumb bg-danger push">
				<span class="breadcrumb-item active"><i class="fa fa-fw fa-times"></i> Maaf <?=ucfirst($this->auth_libs->user_login()->nama);?>, anda tidak lulus <b>Tahap 2 - Tutor, Wawancara, dan Pemrograman (Programmer)</b></span>
			</nav>
			<?php
		}
		?>

		<!-- Pengumuman Staff -->
		<?php
		$lock_finish = $this->auth_libs->user_login()->seleksi_staff;
		if ($lock_finish == 'ya'){
			?>
			<nav class="breadcrumb bg-success push">
				<span class="breadcrumb-item active"><i class="fa fa-fw fa-check"></i> Selamat <?=ucfirst($this->auth_libs->user_login()->nama);?>, anda lulus <b>Tahap 3 - Wawancara Staff</b></span>
			</nav>
			<?php
		}
		else if ($lock_finish == 'tidak'){
			?>
			<nav class="breadcrumb bg-danger push">
				<span class="breadcrumb-item active"><i class="fa fa-fw fa-times"></i> Maaf <?=ucfirst($this->auth_libs->user_login()->nama);?>, anda tidak lulus <b>Tahap 3 - Wawancara Staff</b></span>
			</nav>
			<?php
		}
		?>

		<div class="block block-rounded">
			<div class="block-content">
				<!-- Introduction -->
				<table class="table table-borderless table-vcenter mb-10">
					<tbody>
						<tr class="table-active">
							<th class="table-success text-center" style="width: 50px;">
								<i class="fa fa-fw fa-unlock text-success"></i>
							</th>
							<th>
								<a href="<?=base_url('oprec/berkas/')?>">Pengumpulan Berkas</a>
							</th>
							<th class="text-center text-danger" style="width: 100px;">
								<i>20 Desember - 3 Februari</i>
							</th>
						</tr>
					</tbody>
				</table>
				<!-- END Document -->
				<!-- Step 1 -->
				<table class="table table-borderless table-vcenter mb-10">
					<tbody>
						<tr class="table-active">
							<?php
							$lock_ujian = $this->auth_libs->user_login()->seleksi_berkas;
							if ($lock_ujian == 'ya'){
								?>
								<th class="table-danger text-center" style="width: 50px;">
									<i class="fa fa-fw fa-unlock text-success"></i>
								</th>
								<th>
									<a href="<?=base_url('oprec/ujian/')?>">Tahap 1 - Ujian</a>
								</th>
								<?php
							}
							else{
								?>
								<th class="table-danger text-center" style="width: 50px;">
									<i class="fa fa-fw fa-lock text-danger"></i>
								</th>
								<th>
									<a>Tahap 1 - Ujian</a>
								</th>
								<?php
							}
							?>
							<th class="text-center text-danger" style="width: 100px;">
								<i>9 Februari</i>
							</th>
						</tr>
					</tbody>
				</table>
				<!-- END Step 1 -->

				<!-- Step 2 -->
				<table class="table table-borderless table-vcenter mb-10">
					<tbody>
						<tr class="table-active">
							<?php
							$lock_wawancara = $this->auth_libs->user_login()->seleksi_ujian;
							if ($lock_wawancara == 'ya'){
								?>
								<th class="table-danger text-center" style="width: 50px;">
									<i class="fa fa-fw fa-unlock text-success"></i>
								</th>
								<th>
									<a href="<?=base_url('oprec/tutor/')?>">Tahap 2 - Tutor, Wawancara Asisten dan Programmer, dan Tes Pemrograman (Programmer)</a>
								</th>
								<?php
							}
							else{
								?>
								<th class="table-danger text-center" style="width: 50px;">
									<i class="fa fa-fw fa-lock text-danger"></i>
								</th>
								<th>
									<a>Tahap 2 - Tutor, Wawancara Asisten dan Programmer, dan Tes Pemrograman (Programmer)</a>
								</th>
								<?php
							}
							?>
							<th class="text-center text-danger" style="width: 100px;">
								<i>17 Februari - 22 Februari</i>
							</th>
						</tr>
					</tbody>
				</table>
				<!-- END Step 2 -->

				<!-- Step 3 -->
				<table class="table table-borderless table-vcenter mb-10">
					<tbody>
						<tr class="table-active">
							<?php
							$lock_staff = $this->auth_libs->user_login()->seleksi_wawancara;
							if ($lock_staff == 'ya'){
								?>
								<th class="table-danger text-center" style="width: 50px;">
									<i class="fa fa-fw fa-unlock text-success"></i>
								</th>
								<th>
									<a href="<?=base_url('oprec/staff/')?>">Tahap 3 - Wawancara Staff</a>
								</th>
								<?php
							}
							else{
								?>
								<th class="table-danger text-center" style="width: 50px;">
									<i class="fa fa-fw fa-lock text-danger"></i>
								</th>
								<th>
									<a>Tahap 3 - Wawancara Staff</a>
								</th>
								<?php
							}
							?>
							<th class="text-center text-danger" style="width: 100px;">
								<i>28 Februari - 2 Maret</i>
							</th>
						</tr>
					</tbody>
				</table>
				<!-- END Step 3 -->

				<!-- Step 4 -->
				<table class="table table-borderless table-vcenter mb-10">
					<tbody>
					<tr class="table-active">
						<?php
						$lock_finish = $this->auth_libs->user_login()->seleksi_staff;
						$lock_finish2 = $this->auth_libs->user_login()->status_peserta;
						if ($lock_finish == 'ya' && $lock_finish2 == 'lulus'){
							?>
							<th class="table-danger text-center" style="width: 50px;">
								<i class="fa fa-fw fa-unlock text-success"></i>
							</th>
							<th>
								<a href="<?=base_url('oprec/sukses/')?>">Congratulation</a>
							</th>
							<?php
						}
						else{
							?>
							<th class="table-danger text-center" style="width: 50px;">
								<i class="fa fa-fw fa-lock text-danger"></i>
							</th>
							<th>
								<a>Congratulation</a>
							</th>
							<?php
						}
						?>
						<th class="text-center text-danger" style="width: 100px;">
							<i>3 Maret</i>
						</th>
					</tr>
					</tbody>
				</table>
				<!-- END Step 4 -->
			</div>
		</div>
		<!-- END Peserta -->
		<?php } ?>

		<?php
		if($this->session->userdata('sebagai') == 'asisten' || $this->session->userdata('sebagai') == 'programmer' || $this->session->userdata('sebagai') == 'admin'){ ?>
		<!-- Asisten & Programmer -->
		<nav class="breadcrumb bg-white push">
			<a class="breadcrumb-item" href="">Manlan</a>
			<span class="breadcrumb-item active">Home</span>
			<span class="breadcrumb-item active">Asisten & Programmer</span>
			<span class="breadcrumb-item active"><?=ucfirst($this->auth_libs->user_login()->nama);?></span>
		</nav>
		<?php $this->load->view('admin/oprec/total');?>
		<div class="block block-rounded">
			<div class="block-content">
				<div class="block block-rounded">
					<div class="block-content">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-vcenter" id="tabel-peserta">
								<thead>
									<tr>
										<th class="text-center" style="width: 100px;"><b>Foto</b></th>
										<th><b>Nama</b></th>
                                        <th class="text-center" style="width: 30%;"><b>Npm</b></th>
										<th class="text-center" style="width: 30%;"><b>Telepon</b></th>
										<th class="text-center" style="width: 30%;"><b>Sebagai</b></th>
										<th class="text-center" style="width: 30%;"><b>Tahap</b></th>
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
								$this->db->order_by('nama','asc');
								$asisten = $this->db->get()->result_array();
								foreach ($asisten as $aslab) : ?>
									<tr>
										<td class="text-center">
											<img class="img-avatar img-avatar48" src="<?=base_url('assets/upload/foto/')?><?=$aslab['nama']?>/<?=$aslab['foto']?>" width="200" height="200" alt="">
										</td>
										<td class="font-w600"><?php echo $aslab['nama']?></td>
                                        <td class="font-w600"><?php echo $aslab['npm']?></td>
										<td class="text-center font-w600"><a href="https://wa.me/+62<?=$aslab['telepon']?>" target="_blank"><?php echo $aslab['telepon']?></a></td>
										<td class="text-center">
											<?php
											if($aslab['sebagai'] == 'calonasisten'){
												?>
												Calon Asisten
												<?php
											}
											else if($aslab['sebagai'] == 'calonprogrammer'){
												?>
												Calon Programmer
												<?php
											}
											?>
										</td>
										<td class="text-center">
											<?php
											if($aslab['seleksi_berkas'] != 'ya' && $aslab['seleksi_ujian'] != 'ya' && $aslab['seleksi_wawancara'] != 'ya' && $aslab['seleksi_staff'] != 'ya'){
												?>
												<div class="font-size-sm text-muted text-black">Tahap Berkas</div>
												<?php
											}
											?>
											<?php
											if($aslab['seleksi_berkas'] == 'ya' && $aslab['seleksi_ujian'] != 'ya' && $aslab['seleksi_wawancara'] != 'ya' && $aslab['seleksi_staff'] != 'ya'){
												?>
												<div class="font-size-sm text-muted text-black">Tahap Ujian</div>
												<?php
											}
											?>
											<?php
											if($aslab['seleksi_berkas'] == 'ya' && $aslab['seleksi_ujian'] == 'ya' && $aslab['seleksi_wawancara'] != 'ya' && $aslab['seleksi_staff'] != 'ya'){
												?>
												<div class="font-size-sm text-muted text-black">Tahap Tutor, Wawancara, dan Pemrograman (Programmer)</div>
												<?php
											}
											?>
											<?php
											if($aslab['seleksi_berkas'] == 'ya' && $aslab['seleksi_ujian'] == 'ya' && $aslab['seleksi_wawancara'] == 'ya' && $aslab['seleksi_staff'] != 'ya'){
												?>
												<div class="font-size-sm text-muted text-black">Tahap Staff</div>
												<?php
											}
											?>
											<?php
											if($aslab['seleksi_berkas'] == 'ya' && $aslab['seleksi_ujian'] = 'ya' && $aslab['seleksi_wawancara'] == 'ya' && $aslab['seleksi_staff'] == 'ya'){
												?>
												<div class="font-size-sm text-muted text-black">Lulus Semua Seleksi</div>
												<?php
											}
											?>
										</td>
										<td class="text-center">
											<?php
											if($aslab['status_peserta'] == 'proses'){
												?>
												<span class="badge badge-warning">Proses</span><br>
												<?php
											}
											else if($aslab['status_peserta'] == 'lulus'){
												?>
												<span class="badge badge-success">Lulus</span>
												<?php
											}
											else {
												?>
												<span class="badge badge-danger">Tolak</span><br>
												<?php
											}
											?>
										</td>
										<td class="text-center">
											<div class="btn-group">
												<a type="button" href="<?=base_url('oprec/berkas/')?>" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#berkas_asisten<?= $aslab['id_user'] ?>" title="Detail">
													<i>Detail</i>
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
		<?php } ?>

		<?php
		if($this->session->userdata('sebagai') == 'staff' || $this->session->userdata('sebagai') == 'admin'){ ?>
		<!-- Staff -->
		<nav class="breadcrumb bg-white push">
			<a class="breadcrumb-item" href="">Manlan</a>
			<span class="breadcrumb-item active">Home</span>
			<span class="breadcrumb-item active">Staff</span>
			<span class="breadcrumb-item active"><?=ucfirst($this->auth_libs->user_login()->nama);?></span>
		</nav>
		<?php $this->load->view('admin/oprec/total');?>
		<div class="block block-rounded">
			<div class="block-content">
				<div class="block block-rounded">
					<div class="block-content">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-vcenter" id="tabel-peserta">
								<thead>
								<tr>
									<th class="text-center" style="width: 100px;"><b>Foto</b></th>
									<th><b>Nama</b></th>
                                  	<th class="text-center" style="width: 30%;"><b>Npm</b></th>
									<th class="text-center" style="width: 30%;"><b>Telepon</b></th>
									<th class="text-center" style="width: 30%;"><b>Sebagai</b></th>
									<th class="text-center" style="width: 15%;"><b>Tahap</b></th>
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
								$this->db->order_by('nama','asc');
								$staff = $this->db->get()->result_array();
								foreach ($staff as $aslab) : ?>
								<tr>
									<td class="text-center">
										<img class="img-avatar img-avatar48" src="<?=base_url('assets/upload/foto/')?><?=$aslab['nama']?>/<?=$aslab['foto']?>" width="200" height="200" alt="">
									</td>
									<td class="font-w600"><b><?=$aslab['nama']?></b></td>
                                  	<td class="font-w600"><b><?=$aslab['npm']?></b></td>
									<td class="text-center font-w600"><a href="https://wa.me/+62<?=$aslab['telepon']?>" target="_blank"><?php echo $aslab['telepon']?></a></td>
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
										if($aslab['seleksi_berkas'] != 'ya' && $aslab['seleksi_ujian'] != 'ya' && $aslab['seleksi_wawancara'] != 'ya' && $aslab['seleksi_staff'] != 'ya'){
											?>
											<div class="font-size-sm text-muted text-black">Tahap Berkas</div>
											<?php
										}
										?>
										<?php
										if($aslab['seleksi_berkas'] == 'ya' && $aslab['seleksi_ujian'] != 'ya' && $aslab['seleksi_wawancara'] != 'ya' && $aslab['seleksi_staff'] != 'ya'){
											?>
											<div class="font-size-sm text-muted text-black">Tahap Ujian</div>
											<?php
										}
										?>
										<?php
										if($aslab['seleksi_berkas'] == 'ya' && $aslab['seleksi_ujian'] == 'ya' && $aslab['seleksi_wawancara'] != 'ya' && $aslab['seleksi_staff'] != 'ya'){
											?>
											<div class="font-size-sm text-muted text-black">Tahap Tutor, Wawancara, dan Pemrograman (Programmer)</div>
											<?php
										}
										?>
										<?php
										if($aslab['seleksi_berkas'] == 'ya' && $aslab['seleksi_ujian'] == 'ya' && $aslab['seleksi_wawancara'] == 'ya' && $aslab['seleksi_staff'] != 'ya'){
											?>
											<div class="font-size-sm text-muted text-black">Tahap Staff</div>
											<?php
										}
										?>
										<?php
										if($aslab['seleksi_berkas'] == 'ya' && $aslab['seleksi_ujian'] = 'ya' && $aslab['seleksi_wawancara'] == 'ya' && $aslab['seleksi_staff'] == 'ya'){
											?>
											<div class="font-size-sm text-muted text-black">Lulus Semua Seleksi</div>
											<?php
										}
										?>
									</td>
									<td class="text-center">
										<?php
										if($aslab['status_peserta'] == 'proses'){
											?>
											<span class="badge badge-warning">Proses</span><br>
											<?php
										}
										else if($aslab['status_peserta'] == 'lulus'){
											?>
											<span class="badge badge-success">Lulus</span>
											<?php
										}
										else {
											?>
											<span class="badge badge-danger">Tolak</span><br>
											<?php
										}
										?>
									</td>
									<td class="text-center">
										<div class="btn-group">
											<a type="button" href="<?=base_url('oprec/berkas/')?>" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#berkas_asisten<?= $aslab['id_user'] ?>" title="Detail">
												<i>Detail</i>
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

	</main>
	<!-- END Main Container -->

	<div class="modal fade" id="modal-onboarding" tabindex="-1" role="dialog" aria-labelledby="modal-onboarding" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-popout" role="document">
			<div class="modal-content rounded">
				<div class="block block-rounded block-transparent mb-0 bg-pattern" style="background-image: url(<?=base_url('assets/admin/')?>'assets/media/various/bg-pattern-inverse.png');">
					<div class="block-header justify-content-end">
						<div class="block-options">
							<a class="font-w600 text-danger" href="#" data-dismiss="modal" aria-label="Close">
								<img src="https://img.icons8.com/ios/48/000000/delete-sign--v1.png"/>
							</a>
						</div>
					</div>
					<div class="block-content block-content-full">
						<div class="js-slider slick-dotted-inner" data-dots="true" data-arrows="false" data-infinite="false">
							<div class="pb-50">
								<div class="row justify-content-center text-center">
									<div class="col-md-10 col-lg-8">
										<img class="img-fluid img-thumbnail rounded-circle d-block user-img mx-auto mb-4" src="<?=base_url('assets/public/images/member/PUTRI ASISTEN.png')?>" width="150" alt="" />
										<h3 class="font-size-h2 font-w300 mt-20">Selamat Datang<br>Di Lab Manlan</h3>
										<!--
										<p class="font-size-h4 font-w300 mt-20">
											Pendaftaran Diperpanjang<br>20 Desember - 3 Februari
										</p>
										-->
										<button type="button" class="btn btn-sm btn-hero btn-noborder btn-primary mb-10 mx-5" onclick="jQuery('.js-slider').slick('slickGoTo', 1);">
											Selanjutnya <i class="fa fa-arrow-right ml-5"></i>
										</button>
									</div>
								</div>
							</div>
							<div class="slick-slide pb-50">
								<div class="row justify-content-center text-center">
									<div class="col-md-10 col-lg-8">
										<img class="img-fluid img-thumbnail rounded-circle d-block user-img mx-auto mb-4" src="<?=base_url('assets/public/images/member/NIA ASISTEN.png')?>" width="150" alt="" />
										<!--<h3 class="font-size-h2 font-w300 mt-20">Pengisian Data<br>Calon Asisten</h3>-->
										<h3 class="font-size-h2 font-w300 mt-20">Tahap Seleksi<br>Calon Asisten</h3>
										<!--
										<p class="text-muted">
											Lengkapi profile anda dan upload berkas untuk memenuhi persyaratan pendaftaran
										</p>
										-->
										<p class="text-muted">
											Ikuti tahap seleksi dengan maksimal, tahap ujian, tahap tutor, wawancara, dan pemrograman (programmer), dan tahap wawancara staff. Good Luck..
										</p>
										<div class="text-center">
											<button type="button" class="btn btn-sm btn-hero btn-noborder btn-primary mb-10 mx-5" onclick="jQuery('.js-slider').slick('slickGoTo', 2);">
												Selanjutnya <i class="fa fa-arrow-right ml-5"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="slick-slide pb-50">
								<div class="row justify-content-center text-center">
									<div class="col-md-10 col-lg-8">
										<img class="img-fluid img-thumbnail rounded-circle d-block user-img mx-auto mb-4" src="<?=base_url('assets/public/images/member/LUKMAN ASISTEN.png')?>" width="150" alt="" />
										<h3 class="font-size-h2 font-w300 mt-20">Menu</h3>
										<p class="text-muted">
											Pilih menu yang tersedia dan ikuti petunjuk selanjutnya
										</p>
										<button type="button" class="btn btn-sm btn-hero btn-noborder btn-success mb-10 mx-5" data-dismiss="modal" aria-label="Close">
											Mengerti <i class="fa fa-check ml-5"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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


