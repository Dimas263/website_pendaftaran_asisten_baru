<?php
$lock_final = $this->auth_libs->user_login()->seleksi_staff;
if ($lock_final == 'ya'){
	?>
	<main id="main-container">
		<div class="content">
			<div class="bg-image" style="background-image: url(<?=base_url('assets/public/images/bangkinglab_ug_video.png')?>);">
				<div class="bg-white-op-25">
					<div class="content">
						<div class="py-50 nice-copy text-center">
							<br><br><br>
							<p>&nbsp;</p>
							<br><br><br>
							<h3 class="font-w700 mb-10"></h3>
							<h4 class="font-w400 text-muted mb-30"></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-image" style="background-image: url();">
				<div class="bg-white-op-95">
					<div class="content">
						<div class="py-50 nice-copy text-center">
							<img src="https://img.icons8.com/emoji/48/000000/check-mark-emoji.png"/>
							<br><br>
							<h3 class="font-w700 mb-10">Selamat</h3>
							<?php if($this->session->userdata('sebagai') == 'calonasisten' || $this->session->userdata('sebagai') == 'calonprogrammer') { ?> <h4 class="font-w400 text-muted mb-30">Anda telah lolos dan terpilih menjadi asisten laboratorium manajemen lanjut</h4><?php } ?>
							<?php if($this->session->userdata('sebagai') == 'asisten' || $this->session->userdata('sebagai') == 'programmer') { ?> <h4 class="font-w400 text-muted mb-30">Ayo Kawan, Asisten dan Programmer mari bergabung ke grup Asisten Baru laboratorium manajemen lanjut</h4><?php } ?>
							<?php if($this->session->userdata('sebagai') == 'staff') { ?> <h4 class="font-w400 text-muted mb-30">Terima Kasih Ibu Tika, Pak Agus, Pak Ibnu, dan Ibu Dini yang telah membantu proses seleksi open recruitment Asisten dan Programmer laboratorium manajemen lanjut</h4><?php } ?>
							<?php if($this->session->userdata('sebagai') == 'admin') { ?> <h4 class="font-w400 text-muted mb-30">Ayo Min ikutan gabung grup whatsapp bersama asisten dan programmer baru laboratorium manajemen lanjut</h4><?php } ?>
							<a class="btn btn-hero btn-noborder btn-lg btn-rounded btn-success" href="javascript:void(0)">Gabung Whatsapp</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php
}
else{
	$this->load->view('404');
}
?>
