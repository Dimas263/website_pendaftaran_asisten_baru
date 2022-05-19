<!doctype html>
<html lang="en" class="no-focus">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.5, shrink-to-fit=yes">

	<title>Login - Laboratorium Manajemen Lanjut</title>

	<meta name="description" content="Website - Laboratorium Manajemen Lanjut &amp; Pendaftaran Asisten Baru by Dimas263">
	<meta name="author" content="Dimas263">
	<meta name="robots" content="noindex, nofollow">

	<meta property="og:title" content="Website - Laboratorium Manajemen Lanjut &amp; Pendaftaran Asisten Baru by Dimas263">
	<meta property="og:site_name" content="Laboratorium Manajemen Lanjut Universitas Gunadarma">
	<meta property="og:description" content="Website - Laboratorium Manajemen Lanjut &amp; Pendaftaran Asisten Baru by Dimas263">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:image" content="">

	<link rel="shortcut icon" href="<?=base_url('assets/admin/')?>assets/media/favicons/bangkinglab_ug.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?=base_url('assets/admin/')?>assets/media/favicons/bangkinglab_ug.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('assets/admin/')?>assets/media/favicons/bangkinglab_ug.png">

	<link rel="stylesheet" href="<?=base_url('assets/admin/')?>assets/js/plugins/slick/slick.css">
	<link rel="stylesheet" href="<?=base_url('assets/admin/')?>assets/js/plugins/slick/slick-theme.css">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
	<link rel="stylesheet" id="css-main" href="<?=base_url('assets/admin/')?>assets/css/codebase.min.css">

</head>
<body oncontextmenu="return false;">


<div id="page-container" class="main-content-boxed">
	<main id="main-container">
		<div  class="bg-image" style="background-image: url(<?=base_url('assets/admin/assets/media/photos/manlanbg.jpg')?>);">
			<!-- Page Content -->
			<div class="content">
				<div class="py-30 text-center">
					<a class="link-effect font-w700" href="<?=base_url('')?>">
						<img src="<?=base_url('assets/admin/')?>assets/media/favicons/bangkinglab_ug.png" width="100" alt=""/>
					</a>
					<h1 class="h4 font-w700 mt-30 text-primary mb-10">Laboratorium Manajemen Lanjut</h1>
					<h2 class="h5 font-w400 text-muted text-white mb-0">Asisten dan Programmer</h2>
					<br><br><br>
					<a type="button" href="<?=base_url('oprec/admin')?>" target="_blank" class="block-content block-content-full block-content-sm btn btn-primary">Selamat, Mari Login Untuk Bergabung Di Grup Whatsapp Bersama Kami</a>
				</div>
				<!-- Grid -->
				<div class="row text-center">
					<div class="col-6">
						<div class="block">
							<div class="block-content">
								<h2 class="content-heading">Asisten Baru 2022</h2>
								<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
									<thead>
									<tr class="table-active">
										<th class="text-left text-white" style="background-color:#ffca28"><b>No</b></th>
										<th class="text-left text-white" style="background-color:#760E88"><b>Nama</b></th>
									</tr>
									</thead>
									<tbody>
									<!-- Koneksi DB -->
									<?php
									$this->db->select('*');
									$this->db->from('manlan_admin');
									$this->db->where('sebagai', 'calonasisten');
									$this->db->order_by('nama','asc');
									$asisten = $this->db->get()->result_array();
									$no=1;
									?>
									<?php foreach ($asisten as $aslab) : ?>
										<?php
										if($aslab['status_peserta'] == 'lulus'){?>
											<tr>
												<td class="text-warning text-left"><?=$no++?></td>
												<td class="font-w300 text-left">
													<a class="text-primary" href="http://webku.one/manlan/auth/login" target="_blank">
														<?=ucfirst($aslab['nama'])?>
													</a>
												</td>
											</tr>
											<?php
										}
										?>
									<?php endforeach ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="block">
							<div class="block-content">
								<h2 class="content-heading">Programmer Baru 2022</h2>
								<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
									<thead>
									<tr class="table-active">
										<th class="text-left text-white" style="background-color:#ffca28"><b>No</b></th>
										<th class="text-left text-white" style="background-color:#760E88"><b>Nama</b></th>
									</tr>
									</thead>
									<tbody>
									<!-- Koneksi DB -->
									<?php
									$this->db->select('*');
									$this->db->from('manlan_admin');
									$this->db->where('sebagai', 'calonprogrammer');
									$this->db->order_by('nama','asc');
									$asisten = $this->db->get()->result_array();
									$no=1;
									?>
									<?php foreach ($asisten as $aslab) : ?>
										<?php
										if($aslab['status_peserta'] == 'lulus'){?>
											<tr>
												<td class="text-warning text-left"><?=$no++?></td>
												<td class="font-w300 text-left">
													<a class="text-primary" href="http://webku.one/manlan/auth/login" target="_blank">
														<?=ucfirst($aslab['nama'])?>
													</a>
												</td>
											</tr>
											<?php
										}
										?>
									<?php endforeach ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- END Grid -->
			</div>
		</div>
	</main>
</div>

<script src="<?=base_url('assets/admin/')?>assets/js/codebase.core.min.js"></script>
<script src="<?=base_url('assets/admin/')?>assets/js/codebase.app.min.js"></script>
<script src="<?=base_url('assets/admin/')?>assets/js/plugins/chartjs/Chart.bundle.min.js"></script>
<script src="<?=base_url('assets/admin/')?>assets/js/plugins/slick/slick.min.js"></script>
<script src="<?=base_url('assets/admin/')?>assets/js/pages/be_pages_dashboard.min.js"></script>
<script>
	document.onkeydown = function(e) {
		if (e.ctrlKey &&
			(e.keyCode === 67 ||
				e.keyCode === 86 ||
				e.keyCode === 85 ||
				e.keyCode === 117)) {
			return false;
		} else {
			return true;
		}
	};
	$(document).keypress("u",function(e) {
		if(e.ctrlKey)
		{
			return false;
		}
		else
		{
			return true;
		}
	});
</script>
<script>
	document.addEventListener('contextmenu', event => event.preventDefault());
</script>
</body>
</html>
