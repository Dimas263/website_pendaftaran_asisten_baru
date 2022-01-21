<div class="block block-rounded">
	<div class="block-content">
		<table class="table table-borderless mb-6">
			<tbody>
			<tr class="table-active">
				<th class="text-center font-size-h5 bg-primary" style="width: 20px;">
					<a class="text-white" href="">Hasil</a>
				</th>
			</tr>
			</tbody>
		</table>
		<?php
		if($this->auth_libs->user_login()->seleksi_staff == 'ya'){
			?>
			<div class="row text-center" style="margin-left: 15%;margin-right: 15%">
				<div class="col-md-12">
					<!-- Success Alert -->
					<div class="alert alert-success alert-dismissable" role="alert">
						<img src="https://img.icons8.com/emoji/48/000000/check-mark-emoji.png"/>
						<br><br>
						<h3 class="alert-heading font-size-h4 font-w400">Selamat, anda <b>LULUS</b> !
							<p class="alert-heading font-size-h4 font-w400">Tahap 3 - Wawancara Staff</p>
						</h3>
						<p class="mb-0">Semangat, ikuti tahap selanjutnya.</p>
					</div>
					<!-- END Success Alert -->
				</div>
			</div>
			<?php
		}
		else if($this->auth_libs->user_login()->seleksi_staff == 'tidak'){
			?>
			<div class="row text-center" style="margin-left: 15%;margin-right: 15%">
				<div class="col-md-12">
					<!-- Success Alert -->
					<div class="alert alert-danger alert-dismissable" role="alert">
						<img src="https://img.icons8.com/emoji/48/000000/cross-mark-emoji.png"/>
						<br><br>
						<h3 class="alert-heading font-size-h4 font-w400">Maaf, anda <b>TIDAK LULUS</b> !
							<p class="alert-heading font-size-h4 font-w400">Tahap 3 - Wawancara Staff</p>
						</h3>
						<p class="mb-0">Semangat, coba kembali tahun depan ya.</p>
					</div>
					<!-- END Success Alert -->
				</div>
			</div>
			<?php
		}
		else if($this->auth_libs->user_login()->seleksi_staff == ''){

		}
		?>
	</div>
</div>
