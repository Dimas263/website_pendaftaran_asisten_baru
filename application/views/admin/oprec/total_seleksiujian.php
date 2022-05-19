<div class="row invisible" data-toggle="appear">
	<div class="col-md-6">
		<a class="block block-link-shadow overflow-hidden" href="javascript:void(0)">
			<div class="block-content block-content-full">
				<div class="row py-20">
					<div class="col-6 text-right border-r">
						<div class="invisible" data-toggle="appear" data-class="animated fadeInLeft">
							<div class="font-size-h3 font-w600 text-primary">
								Seleksi Ujian
							</div>
							<div class="font-size-sm font-w600 text-uppercase text-primary"><b>Calon Asisten</b></div>
						</div>
					</div>
					<div class="col-6">
						<div class="invisible" data-toggle="appear" data-class="animated fadeInRight">
							<div class="font-size-sm font-w600 text-uppercase text-success">
								<?php
								$query = $this->db->query('SELECT seleksi_ujian FROM manlan_admin where sebagai = "calonasisten" and seleksi_ujian ="ya"');
								echo "Lulus : ", $query->num_rows();
								?>
							</div>
							<div class="font-size-sm font-w600 text-uppercase text-warning">
								<?php
								$query = $this->db->query('SELECT seleksi_ujian FROM manlan_admin where sebagai = "calonasisten" and seleksi_ujian =" "');
								echo "Proses : ", $query->num_rows();
								?>
							</div>
							<div class="font-size-sm font-w600 text-uppercase text-danger">
								<?php
								$query = $this->db->query('SELECT seleksi_ujian FROM manlan_admin where sebagai = "calonasisten" and seleksi_ujian ="tidak"');
								echo "Tidak : ", $query->num_rows();
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col-md-6">
		<a class="block block-link-shadow overflow-hidden" href="javascript:void(0)">
			<div class="block-content block-content-full">
				<div class="row py-20">
					<div class="col-6 text-right border-r">
						<div class="invisible" data-toggle="appear" data-class="animated fadeInLeft">
							<div class="font-size-h3 font-w600 text-primary">
								Seleksi Ujian
							</div>
							<div class="font-size-sm font-w600 text-uppercase text-primary"><b>Calon Programmer</b></div>
						</div>
					</div>
					<div class="col-6">
						<div class="invisible" data-toggle="appear" data-class="animated fadeInRight">
							<div class="font-size-sm font-w600 text-uppercase text-success">
								<?php
								$query = $this->db->query('SELECT seleksi_ujian FROM manlan_admin where sebagai = "calonprogrammer" and seleksi_ujian ="ya"');
								echo "Lulus : ", $query->num_rows();
								?>
							</div>
							<div class="font-size-sm font-w600 text-uppercase text-warning">
								<?php
								$query = $this->db->query('SELECT seleksi_ujian FROM manlan_admin where sebagai = "calonprogrammer" and seleksi_ujian =" "');
								echo "Proses : ", $query->num_rows();
								?>
							</div>
							<div class="font-size-sm font-w600 text-uppercase text-danger">
								<?php
								$query = $this->db->query('SELECT seleksi_ujian FROM manlan_admin where sebagai = "calonprogrammer" and seleksi_ujian ="tidak"');
								echo "Tidak : ", $query->num_rows();
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</a>
	</div>
	<!-- END Row #4 -->
</div>
