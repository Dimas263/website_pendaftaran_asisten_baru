<div class="footer-alt bg-primary" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 text-white">
				<p>2021 © bangkinglab_ug. Created by <a class="text-white" href="https://instagram.com/dimas263_">Dimas263</a></p>
			</div>
			<div class="col-sm-6 text-sm-end">
				<ul class="list-unstyled footer-alt-list mb-0 mt-sm-0 mt-3">
					<li class="list-inline-item">
						<a href="https://ma-lanjut.lab.gunadarma.ac.id/"> <i class="icon-xs text-white" data-feather="globe"></i> </a>
					</li>
					<li class="list-inline-item">
						<a href="https://twitter.com/bankinglab_ug"> <i class="icon-xs text-white" data-feather="twitter"></i> </a>
					</li>
					<li class="list-inline-item">
						<a href="https://www.instagram.com/bankinglab_ug/"> <i class="icon-xs text-white" data-feather="instagram"></i> </a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-onboarding" tabindex="-1" aria-labelledby="modal-onboarding" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header text-center" style="border-bottom: none;">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="text-center">
								<img class="img-fluid img-thumbnail rounded-circle d-block user-img mx-auto mb-4" src="<?=base_url('assets/public/images/bangkinglab_ug.png')?>" width="100" alt="" />
								<h5 class="h4 text-dark fs-20 text-truncate mt-3">Selamat Datang</h5>
								<p class="h5 text-muted">Laboratorium Manajemen Lanjut</p>
								<p class="h5 text-muted">Universitas Gunadarma</p>
								<br><br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-activity" tabindex="-1" aria-labelledby="modal-activity" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header text-center" style="border-bottom: none;">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="text-center">
								<!--<a data-pin-do="embedBoard" data-pin-lang="id" data-pin-board-width="600" data-pin-scale-height="400" data-pin-scale-width="300" href="https://pinterest.com/dwiputradimas123/laboratorium-manajemen-lanjut/"></a>-->
								<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/laboratoriummanajemen/"></a>
								<br><br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="<?=base_url('assets/public/')?>js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url('assets/public/')?>js/feather.js"></script>
<script src="<?=base_url('assets/public/')?>js/tiny-slider.js"></script>
<script src="<?=base_url('assets/public/')?>js/tiny.init.js"></script>
<script src="<?=base_url('assets/public/')?>js/app.js"></script>
<script src="<?=base_url('assets/admin/')?>assets/js/codebase.core.min.js"></script>
<script src="<?=base_url('assets/admin/')?>assets/js/plugins/chartjs/Chart.bundle.min.js"></script>
<script src="<?=base_url('assets/admin/')?>assets/js/pages/be_pages_dashboard.min.js"></script>
<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
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
