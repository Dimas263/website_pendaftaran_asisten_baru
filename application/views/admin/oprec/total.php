<div class="row invisible" data-toggle="appear">
	<div class="col-md-6">
		<a class="block block-link-shadow overflow-hidden" href="javascript:void(0)">
			<div class="block-content block-content-full">
				<div class="text-right">
					<img src="https://img.icons8.com/external-sbts2018-lineal-color-sbts2018/48/000000/external-accountant-women-profession-sbts2018-lineal-color-sbts2018.png"/>
				</div>
				<div class="row py-20">
					<div class="col-6 text-right border-r">
						<div class="invisible" data-toggle="appear" data-class="animated fadeInLeft">
							<div class="font-size-h3 font-w600 text-primary">
								<?php
								$query = $this->db->query('SELECT * FROM manlan_admin where sebagai = "calonasisten"');
								echo $query->num_rows();
								?>
							</div>
							<div class="font-size-sm font-w600 text-uppercase text-primary"><b>Calon Asisten</b></div>
						</div>
					</div>
					<div class="col-6">
						<div class="invisible" data-toggle="appear" data-class="animated fadeInRight">
							<div class="font-size-sm font-w600 text-uppercase text-success">
								<?php
								$query = $this->db->query('SELECT status_peserta FROM manlan_admin where sebagai = "calonasisten" and status_peserta ="lulus"');
								echo "Lulus : ", $query->num_rows();
								?>
							</div>
							<div class="font-size-sm font-w600 text-uppercase text-warning">
								<?php
								$query = $this->db->query('SELECT status_peserta FROM manlan_admin where sebagai = "calonasisten" and status_peserta ="proses"');
								echo "Proses : ", $query->num_rows();
								?>
							</div>
							<div class="font-size-sm font-w600 text-uppercase text-danger">
								<?php
								$query = $this->db->query('SELECT status_peserta FROM manlan_admin where sebagai = "calonasisten" and status_peserta ="tidak"');
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
				<div class="text-right">
					<img src="https://img.icons8.com/external-konkapp-outline-color-konkapp/48/000000/external-programmer-profession-avatar-konkapp-outline-color-konkapp.png"/>
				</div>
				<div class="row py-20">
					<div class="col-6 text-right border-r">
						<div class="invisible" data-toggle="appear" data-class="animated fadeInLeft">
							<div class="font-size-h3 font-w600 text-primary">
								<?php
								$query = $this->db->query('SELECT * FROM manlan_admin where sebagai = "calonprogrammer"');
								echo $query->num_rows();
								?>
							</div>
							<div class="font-size-sm font-w600 text-uppercase text-primary"><b>Calon Programmer</b></div>
						</div>
					</div>
					<div class="col-6">
						<div class="invisible" data-toggle="appear" data-class="animated fadeInRight">
							<div class="font-size-sm font-w600 text-uppercase text-success">
								<?php
								$query = $this->db->query('SELECT status_peserta FROM manlan_admin where sebagai = "calonprogrammer" and status_peserta ="lulus"');
								echo "Lulus : ", $query->num_rows();
								?>
							</div>
							<div class="font-size-sm font-w600 text-uppercase text-warning">
								<?php
								$query = $this->db->query('SELECT status_peserta FROM manlan_admin where sebagai = "calonprogrammer" and status_peserta ="proses"');
								echo "Proses : ", $query->num_rows();
								?>
							</div>
							<div class="font-size-sm font-w600 text-uppercase text-danger">
								<?php
								$query = $this->db->query('SELECT status_peserta FROM manlan_admin where sebagai = "calonprogrammer" and status_peserta ="tidak"');
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
