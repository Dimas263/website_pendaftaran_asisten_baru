<!doctype html>
<html lang="en" class="no-focus">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

	<title>Register - Laboratorium Manajemen Lanjut</title>

	<meta name="description" content="Website - Laboratorium Manajemen Lanjut &amp; Pendaftaran Asisten Baru by Dimas263">
	<meta name="author" content="dimas263">
	<meta name="robots" content="noindex, nofollow">

	<meta property="og:title" content="Website - Laboratorium Manajemen Lanjut &amp; Pendaftaran Asisten Baru by Dimas263">
	<meta property="og:site_name" content="dimas263">
	<meta property="og:description" content="Website - Laboratorium Manajemen Lanjut &amp; Pendaftaran Asisten Baru by Dimas263">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:image" content="">

	<link rel="shortcut icon" href="<?=base_url('assets/admin/')?>assets/media/favicons/bangkinglab_ug.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?=base_url('assets/admin/')?>assets/media/favicons/bangkinglab_ug.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('assets/admin/')?>assets/media/favicons/bangkinglab_ug.png">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
	<link rel="stylesheet" id="css-main" href="<?=base_url('assets/admin/')?>assets/css/codebase.min.css">

</head>
<body oncontextmenu="return false;">

<div id="page-container" class="main-content-boxed">

	<main id="main-container">

		<div class="bg-image" style="background-image: url(<?=base_url('assets/admin/assets/media/photos/manlanbg.jpg')?>);">
			<div class="row mx-0 justify-content-center">
				<div class="hero-static col-lg-6 col-xl-4">
					<div class="content content-full overflow-hidden">
						<div class="py-30 text-center">
							<a class="link-effect font-w700" href="<?=base_url('')?>">
								<img src="<?=base_url('assets/admin/')?>assets/media/favicons/bangkinglab_ug.png" width="100" alt=""/>
							</a>
							<h1 class="h4 font-w700 mt-30 text-primary mb-10">Laboratorium Manajemen Lanjut</h1>
							<h2 class="h5 font-w400 text-muted text-white mb-0">Kami senang anda bergabung bersama kami</h2>
						</div>
						<!--<form class="js-validation-signup" action="<?=base_url('Auth/create')?>" method="post">-->
						<?php echo form_open_multipart('Auth/create');?>
						<div class="block block-themed block-rounded block-shadow">
							<div class="block-header bg-gd-dusk">
								<h3 class="block-title">Oops.. Sorry</h3>
								<div class="block-options">
									<button type="button" class="btn-block-option">
										<img src="https://img.icons8.com/emoji/48/000000/warning-emoji.png"/>
									</button>
								</div>
							</div>
							<div class="block-content">
								<div class="form-group row text-center">
									<div class="col-12">
										<br>
										<h3 class="text-center">
											<br>Pendaftaran Berakhir<br>
											<p class="text-center text-danger" id="deadline"></p>
										</h3>
									</div>
								</div>
							</div>
							<div class="block-content bg-body-light">
								<div class="form-group text-center">
									<a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="<?=base_url('auth/')?>">
										Masuk
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

<script src="<?=base_url('assets/admin/')?>assets/js/codebase.core.min.js"></script>
<script src="<?=base_url('assets/admin/')?>assets/js/codebase.app.min.js"></script>
<script src="<?=base_url('assets/admin/')?>assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?=base_url('assets/admin/')?>assets/js/pages/op_auth_signup.min.js"></script>
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
