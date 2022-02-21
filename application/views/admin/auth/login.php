<!doctype html>
<html lang="en" class="no-focus">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

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
			<div class="row mx-0 justify-content-center">
				<div class="hero-static col-lg-6 col-xl-4">
					<div class="content content-full overflow-hidden">
						<div class="py-30 text-center">
							<a class="link-effect font-w700" href="<?=base_url('')?>">
								<img src="<?=base_url('assets/admin/')?>assets/media/favicons/bangkinglab_ug.png" width="100" alt=""/>
							</a>
							<h1 class="h4 font-w700 mt-30 text-primary mb-10">Laboratorium Manajemen Lanjut</h1>
							<h2 class="h5 font-w400 text-muted text-white mb-0">Asisten dan Programmer</h2>
						</div>
						<!--
						<h3 class="text-center">
							Pendaftaran Berakhir<br>
							<p class="text-center text-primary" id="deadline"></p>
						</h3>
						-->
						<form class="js-validation-signin" action="<?=base_url('auth/process')?>" method="post">
							<div class="block block-themed block-rounded block-shadow">
								<div class="block-header bg-gd-dusk">
									<h3 class="block-title">Login</h3>
									<div class="block-options">
										<button type="button" class="btn-block-option">
											<i class="si si-user"></i>
										</button>
									</div>
								</div>
								<div class="block-content">
									<div class="form-group row">
										<div class="col-12">
											<label>NPM</label>
											<input type="text" class="form-control" name="npm" placeholder="masukan NPM anda" required>
											<span class="text-danger">npm yang didaftarkan saat membuat akun</span>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-12">
											<label>Password</label>
											<?php
											/**
											$p = password_hash('calonprogrammer21', PASSWORD_DEFAULT);
											echo $p;
											 **/
											?>
											<input type="password" class="form-control" name="password" placeholder="masukan password anda" required>
											<span class="text-danger">password yang didaftarkan saat membuat akun</span>
											<br><br>
											<span class="text-black"><b>Lupa password atau tidak bisa masuk ?</b></span><br>
											<span class="text-black">login dengan password "<span class="text-primary"><b>calonasisten</b></span>" dan ganti password anda setelah login berhasil</span>
										</div>
									</div>
									<div class="form-group row mb-0">
										<div class="col-sm-6 d-sm-flex align-items-center push">
											<div class="custom-control custom-checkbox mr-auto ml-0 mb-0">
												<input type="checkbox" class="custom-control-input" id="login-remember-me" name="login-remember-me">
												<label class="custom-control-label" for="login-remember-me">Remember Me</label>
											</div>
										</div>
										<div class="col-sm-6 text-sm-right push">
											<button type="submit" class="btn btn-alt-primary" name="login">
												<i class="si si-login mr-10"></i> Masuk
											</button>
										</div>
									</div>
								</div>
								<div class="block-content bg-body-light">
									<div class="form-group text-center">
										<a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="<?=base_url('auth/register')?>">
											Buat Akun
										</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</main>
</div>
<div class="modal fade" id="modal-onboarding" tabindex="-1" role="dialog" aria-labelledby="modal-onboarding" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-popout" role="document">
		<div class="modal-content rounded">
			<div class="block block-rounded block-transparent mb-0 bg-pattern" style="background-image: url(<?=base_url('assets/admin/assets/media/various/bg-pattern-inverse.png')?>);">
				<div class="block-header justify-content-end">
					<div class="block-options">
						<a class="font-w600 text-danger" href="#" data-dismiss="modal" aria-label="Close">
							<b style="font-size: x-large">X</b>
						</a>
					</div>
				</div>
				<div class="block-content block-content-full">
					<div class="js-slider slick-dotted-inner" data-dots="true" data-arrows="false" data-infinite="false">
						<div class="pb-50">
							<div class="row justify-content-center text-center">
								<div class="col-md-10 col-lg-8">
									<img class="img-fluid img-thumbnail rounded-circle d-block user-img mx-auto mb-4" src="<?=base_url('assets/public/images/member/GEBY ASISTEN.png')?>" width="150" alt="" style="display: inline"/>
									<h3 class="font-size-h2 font-w300 mt-20">Selamat Datang</h3>
                                  	<!--<p class="font-size-h4 font-w300 mt-20">Pendaftaran Diperpanjang<br>20 Desember - 3 Februari</p>-->
									<p class="font-size-h5 font-w300 mt-20">
										Hi, Selamat datang di halaman admin <br>
										website laboratorium manajemen lanjut.
									</p>
									<button type="button" class="btn btn-sm btn-hero btn-noborder btn-primary mb-10 mx-5" onclick="jQuery('.js-slider').slick('slickGoTo', 1);">
										Selanjutnya <i class="fa fa-arrow-right ml-5"></i>
									</button>
								</div>
							</div>
						</div>
						<div class="slick-slide pb-50">
							<div class="row justify-content-center text-center">
								<div class="col-md-10 col-lg-8">
									<img src="<?=base_url('assets/admin/')?>assets/media/photos/auth_login.png" width="150" alt="" style="display: inline"/>
									<h3 class="font-size-h2 font-w300 mt-20">Login</h3>
									<p class="font-size-h5 font-w300 mt-20">
										Login untuk mengakses halaman admin.
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
									<img src="<?=base_url('assets/admin/')?>assets/media/photos/auth_register.png" width="150" alt="" style="display: inline"/>
									<!--<h3 class="font-size-h2 font-w300 mt-20">Buat Akun</h3>-->
									<h3 class="font-size-h2 font-w300 mt-20">Pendaftaran Berakhir</h3>
									<!--
									<p class="font-size-h4 font-w300 mt-20 text-justify">
										Buat akun terlebih dahulu jika belum mempunyai akun, kemudian login untuk mengakses halaman admin dan lengkapi data-data yang tersedia.
									</p>
									-->
									<p class="font-size-h5 font-w300 mt-20 text-justify">
										Maaf pendaftaran berakhir, untuk calon asisten dan programmer yang sudah mendaftar, ikuti proses seleksi selanjutnya.
									</p>
									<div class="text-center">
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
<script>
	window.callbellSettings = {
		token: "fDtXKWxMgJUuN6NQySdosPjY"
	};
</script>
<script>
	(function(){var w=window;var ic=w.callbell;if(typeof ic==="function"){ic('reattach_activator');ic('update',callbellSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Callbell=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://dash.callbell.eu/include/'+window.callbellSettings.token+'.js';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()
</script>
<script>
// Set the date we're counting down to
var countDownDate = new Date("Feb 3, 2022 23:59:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("deadline").innerHTML = days + "Hari " + hours + "Jam "
  + minutes + "Menit " + seconds + "Detik ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("deadline").innerHTML = "PENDAFTARAN DITUTUP";
  }
}, 1000);
</script>
</body>
</html>
