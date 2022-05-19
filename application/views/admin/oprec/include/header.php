<!doctype html>
<html lang="en" class="no-focus">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

	<title>Admin - Laboratorium Manajemen Lanjut</title>

	<meta name="description" content="Pendataran asisten baru">
	<meta name="author" content="dimas263">
	<meta name="robots" content="noindex, nofollow">

	<meta property="og:title" content="Pendataran asisten baru">
	<meta property="og:site_name" content="Pendataran asisten baru laboratorium manajemen lanjut universitas gunadarma">
	<meta property="og:description" content="Pendataran asisten baru laboratorium manajemen lanjut universitas gunadarma">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:image" content="">

	<link rel="shortcut icon" href="<?=base_url('assets/admin/assets/media/favicons/bangkinglab_ug.png')?>">
	<link rel="icon" type="image/png" sizes="192x192" href="<?=base_url('assets/admin/assets/media/favicons/bangkinglab_ug.png')?>">
	<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('assets/admin/assets/media/favicons/bangkinglab_ug.png')?>">

	<link rel="stylesheet" href="<?=base_url('assets/admin/')?>assets/js/plugins/slick/slick.css">
	<link rel="stylesheet" href="<?=base_url('assets/admin/')?>assets/js/plugins/slick/slick-theme.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
	<link rel="stylesheet" id="css-main" href="<?=base_url('assets/admin/')?>assets/css/codebase.min.css">
	<link rel="stylesheet" href="<?=base_url('assets/admin/')?>assets/js/plugins/datatables/dataTables.bootstrap4.css">

</head>
<!-- <body oncontextmenu="return false;"> -->
<body>
	<div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">

		<header id="page-header">
			<div class="content-header">

				<div class="content-header-section">
					<button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
						<i class="fa fa-navicon"></i>
					</button>
					<button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
						<i class="fa fa-search"></i>
					</button>
				</div>


				<div class="content-header-section">

					<div class="btn-group" role="group">
						<button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-user d-sm-none"></i>
							<span class="d-none d-sm-inline-block"><?=ucfirst($this->auth_libs->user_login()->nama);?></span>
							<i class="fa fa-angle-down ml-5"></i>
						</button>
						<div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
							<h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
							<a class="dropdown-item" href="<?=base_url('oprec/berkas/')?>">
								<i class="si si-user mr-5"></i> Profile
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?=base_url('auth/logout')?>">
								<i class="si si-logout mr-5"></i> Sign Out
							</a>
						</div>
					</div>
				</div>
			</div>

			<div id="page-header-search" class="overlay-header">
				<div class="content-header content-header-fullrow">
					<form action="<?=base_url('oprec/admin/search/')?>" method="post">
						<div class="input-group">
							<div class="input-group-prepend">
								<button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
									<i class="fa fa-times"></i>
								</button>
							</div>
							<input type="text" class="form-control" placeholder="Search.." id="page-header-search-input" name="page-header-search-input">
							<div class="input-group-append">
								<button type="submit" class="btn btn-secondary">
									<i class="fa fa-search"></i>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div id="page-header-loader" class="overlay-header bg-primary">
				<div class="content-header content-header-fullrow text-center">
					<div class="content-header-item">
						<i class="fa fa-sun-o fa-spin text-white"></i>
					</div>
				</div>
			</div>

		</header>


		<nav id="sidebar">
			<div class="sidebar-content">
				<div class="content-header content-header-fullrow px-15">
					<div class="content-header-section text-center align-parent sidebar-mini-hidden">
						<button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
							<i class="fa fa-times text-danger"></i>
						</button>

						<div class="content-header-item">
							<a class="link-effect font-w700" href="<?=base_url('')?>">
								<img class="img-fluid img-thumbnail rounded-circle user-img mb-1" src="<?=base_url('assets/admin/assets/media/favicons/bangkinglab_ug.png')?>" width="36" alt="" />
								<span class="font-size-xl text-dual-primary-dark">Lab</span><span class="font-size-xl text-primary">Manlan</span>
							</a>
						</div>
					</div>
				</div>

				<div class="content-side content-side-full content-side-user px-10 align-parent">
					<div class="sidebar-mini-visible-b align-v animated fadeIn">
						<img class="img-avatar img-avatar32" src="<?=base_url('assets/admin/')?>assets/media/avatars/avatar15.jpg" alt="">
					</div>
					<div class="sidebar-mini-hidden-b text-center">
						<a class="img-link" href="<?=base_url('oprec/admin/profile/')?>">
							<img class="img-avatar" src="<?=base_url('assets/upload/foto/')?><?=$this->auth_libs->user_login()->nama?>/<?=$this->auth_libs->user_login()->foto?>"" width="200" height="200" alt="">
						</a>
						<ul class="list-inline mt-10">
							<li class="list-inline-item">
								<a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="<?=base_url('oprec/admin/profile/')?>">
									<?=ucfirst($this->auth_libs->user_login()->nama);?>
								</a>
							</li>
							<li class="list-inline-item">
								<a class="link-effect text-dual-primary-dark" href="<?=base_url('auth/logout')?>">
									<i class="si si-logout"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="content-side content-side-full">
					<ul class="nav-main">
						<?php
						if($this->auth_libs->user_login()->password == sha1('calonasisten')){
							?>
							<li>
								<a class="active" href="<?=base_url('oprec/forgot/')?>"><i class="nav-main-heading"><span class="sidebar-mini-hidden">Ubah Password</span></a>
							</li>
							<?php
						}
						?>
						<?php
						if($this->session->userdata('sebagai') == 'calonasisten'){ ?>
							<li class="nav-main-heading"><span class="sidebar-mini-hidden">Calon Asisten</span></li>
						<?php } ?>

						<?php
						if($this->session->userdata('sebagai') == 'calonprogrammer'){ ?>
							<li class="nav-main-heading"><span class="sidebar-mini-hidden">Calon Programmer</span></li>
						<?php } ?>

						<?php
						if($this->session->userdata('sebagai') == 'asisten'){ ?>
							<li class="nav-main-heading"><span class="sidebar-mini-hidden">Asisten</span></li>
						<?php } ?>

						<?php
						if($this->session->userdata('sebagai') == 'programmer'){ ?>
							<li class="nav-main-heading"><span class="sidebar-mini-hidden">Programmer</span></li>
						<?php } ?>

						<?php
						if($this->session->userdata('sebagai') == 'staff'){ ?>
							<li class="nav-main-heading"><span class="sidebar-mini-hidden">Staff</span></li>
						<?php } ?>

						<?php
						if($this->session->userdata('sebagai') == 'admin'){ ?>
							<li class="nav-main-heading"><span class="sidebar-mini-hidden">Admin</span></li>
						<?php } ?>

						<li>
							<a class="active" href="<?=base_url('oprec/admin/')?>"><i class="si si-home"></i><span class="sidebar-mini-hide">Home</span></a>
						</li>
						<li>
							<a class="active" href="<?=base_url('oprec/berkas/')?>"><i class="si si-folder-alt"></i><span class="sidebar-mini-hide">Pengumpulan Berkas</span></a>
						</li>
						<li>
							<a class="active" href="<?=base_url('oprec/ujian/')?>"><i class="si si-pencil"></i><span class="sidebar-mini-hide">Tahap 1 - Ujian</span></a>
						</li>
						<li>
							<a class="active" href="<?=base_url('oprec/tutor/')?>"><i class="si si-people"></i><span class="sidebar-mini-hide">Tahap 2 - Tutor, Wawancara, dan Pemrograman (Programmer)</span></a>
						</li>
						<li>
							<a class="active" href="<?=base_url('oprec/staff/')?>"><i class="si si-user"></i><span class="sidebar-mini-hide">Tahap 3 - Staff</span></a>
						</li>
						<li>
							<a class="active" href="<?=base_url('oprec/sukses/')?>"><i class="si si-check"></i><span class="sidebar-mini-hide">Congratulation</span></a>
						</li>
					</ul>
				</div>
				<!-- END Side Navigation -->
			</div>
			<!-- Sidebar Content -->
		</nav>
		<!-- END Sidebar -->

