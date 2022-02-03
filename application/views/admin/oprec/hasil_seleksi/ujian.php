<div class="block block-rounded">
	<div class="block-content">
		<div class="col-md-6 col-xl-4">
			<div class="block-content block-content-full clearfix">
				<div class="float-left">
					<div class="font-w600 text-primary mb-5"><?=$this->auth_libs->user_login()->nama?></div>
					<div class="font-w600 text-black mb-5"><?=$this->auth_libs->user_login()->sebagai?></div>
					<div class="font-w600 text-success mb-5">Tanggal Ujian : 9 Februari</div>
				</div>
			</div>
		</div>
		<table class="table table-bordered table-vcenter mb-30">
			<tbody>
			<tr class="table-active">
				<th class="text-center" style="width: 70px;">Soal</th>
				<th class="text-center" style="width: 20%;">Status</th>
			</tr>
			</tbody>
			<tbody>
			<tr>
				<td class="text-center">
					<a type="button" class="block-content block-content-full block-content-sm btn btn-outline-success" data-toggle="tooltip" title="Lihat Soal">
						Lihat Soal Ujian
					</a>
				</td>
				<td class="text-center">
					<?php
					if($this->auth_libs->user_login()->seleksi_ujian == 'ya'){
						?>
						<span class="block-content block-content-full block-content-sm badge badge-success">Lulus Ujian</span>
						<?php
					}
					else if($this->auth_libs->user_login()->seleksi_ujian == 'tidak'){
						?>
						<span class="block-content block-content-full block-content-sm badge badge-danger">Tidak Lulus</span><br>
						<?php
					}
					else {
						?>
						<span class="block-content block-content-full block-content-sm badge badge-warning">Proses Seleksi</span><br>
						<?php
					}
					?>
				</td>
			</tr>
			</tbody>
		</table>
		<table class="table table-borderless mb-6">
			<tbody>
			<tr class="table-active">
				<th class="text-center font-size-h5 bg-primary" style="width: 20px;">
					<a class="text-white" href="">Hasil Ujian</a>
				</th>
			</tr>
			</tbody>
		</table>
		<?php
		if($this->auth_libs->user_login()->seleksi_ujian == 'ya'){
			?>
			<div class="row text-center" style="margin-left: 15%;margin-right: 15%">
				<div class="col-md-12">
					<!-- Success Alert -->
					<div class="alert alert-success alert-dismissable" role="alert">
						<img src="https://img.icons8.com/emoji/48/000000/check-mark-emoji.png"/>
						<br><br>
						<h3 class="alert-heading font-size-h4 font-w400">Selamat, anda <b>LULUS</b> !
							<p class="alert-heading font-size-h4 font-w400">Tahap 1 - Ujian</p>
						</h3>
						<p class="mb-0">Semangat, ikuti tahap selanjutnya.</p>
					</div>
					<!-- END Success Alert -->
				</div>
			</div>
			<?php
		}
		else if($this->auth_libs->user_login()->seleksi_ujian == 'tidak'){
			?>
			<div class="row text-center" style="margin-left: 15%;margin-right: 15%">
				<div class="col-md-12">
					<!-- Success Alert -->
					<div class="alert alert-danger alert-dismissable" role="alert">
						<img src="https://img.icons8.com/emoji/48/000000/cross-mark-emoji.png"/>
						<br><br>
						<h3 class="alert-heading font-size-h4 font-w400">Maaf, anda <b>TIDAK LULUS</b> !
							<p class="alert-heading font-size-h4 font-w400">Tahap 1 - Ujian</p>
						</h3>
						<p class="mb-0">Semangat, coba kembali tahun depan ya.</p>
					</div>
					<!-- END Success Alert -->
				</div>
			</div>
			<?php
		}
		else if($this->auth_libs->user_login()->seleksi_ujian == ''){

		}
		?>
	</div>
</div>
