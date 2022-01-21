<?php
if($this->auth_libs->user_login()->password == sha1('calonasisten')){
	?>
	<!doctype html>
	<html lang="en" class="no-focus">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

		<title>Reset Password - Laboratorium Manajemen Lanjut</title>

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

							<!--<form class="js-validation-signup" action="<?=base_url('Auth/forgot')?>" method="post">-->
							<?php echo form_open_multipart('Auth/forgot');?>
							<div class="block block-themed block-rounded block-shadow">
								<div class="block-header bg-gd-dusk">
									<h3 class="block-title">Reset Password</h3>
									<div class="block-options">
										<button type="button" class="btn-block-option">
											<i class="si si-user"></i>
										</button>
									</div>
								</div>
								<div class="block-content">
									<div class="form-group row">
										<div class="col-12">
											<label class="fw-medium form-label">Current Password</label>
											<input type="hidden" name="id_user" class="form-control" value="<?=$this->auth_libs->user_login()->id_user?>">
											<input type="hidden" name="passwordold" class="form-control" value="<?=$this->auth_libs->user_login()->password?>">
											<input type="password" class="form-control" name="oldpassword" placeholder="******" required autofocus>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-12">
											<label class="fw-medium form-label">New Password</label>
											<input type="password" class="form-control" name="newpassword" placeholder="******" required>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-12">
											<label class="fw-medium form-label">Konfirmation New Password</label>
											<input type="password" class="form-control" name="konfirmnewpassword" placeholder="******" required>
										</div>
									</div>
								</div>
								<div class="block-content bg-body-light">
									<div class="form-group text-center">
										<button class="link-effect text-muted mr-10 mb-5 d-inline-block btn btn-primary" type="submit">
											<span class="text-white">Submit</span>
										</button>
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

	</body>
	</html>

	<?php
}
else{
	redirect(base_url('oprec/admin'));
}
?>
