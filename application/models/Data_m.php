<?php

class Data_m extends CI_Model
{
	public function upload_berkas(){

		$directoryName = './assets/upload/dokumen/'.$_POST['nama_user'].'/';
		/* Check if the directory already exists. */
		if (!is_dir($directoryName)) {
			/* Directory does not exist, so lets create it. */
			mkdir($directoryName, 0755);
		}

		$config['upload_path'] = $directoryName;
		$config['allowed_types'] = 'pdf';
		$config['max_size'] = 2048;


		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('cv'))
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('oprec/berkas', $error);
		}
		else
		{
			$data_cv = array('image_metadata' => $this->upload->data());
			$nama_cv = $this->upload->data('file_name');

		}

		if (!$this->upload->do_upload('surat_lamaran'))
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('oprec/berkas', $error);
		}
		else
		{
			$data_suratlamaran = array('image_metadata' => $this->upload->data());
			$nama_suratlamaran = $this->upload->data('file_name');

		}

		if (!$this->upload->do_upload('rangkuman_nilai'))
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('oprec/berkas', $error);
		}
		else
		{
			$data_rangkumannilai = array('image_metadata' => $this->upload->data());
			$nama_rangkumannilai = $this->upload->data('file_name');

		}

		if (!$this->upload->do_upload('krs'))
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('oprec/berkas', $error);
		}
		else
		{
			$data_krs = array('image_metadata' => $this->upload->data());
			$nama_krs = $this->upload->data('file_name');

		}

		if (!$this->upload->do_upload('ktm'))
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('oprec/berkas', $error);
		}
		else
		{
			$data_ktm = array('image_metadata' => $this->upload->data());
			$nama_ktm = $this->upload->data('file_name');

		}

		if (!$this->upload->do_upload('sertifikat'))
		{
			$data_sertifikat = '';
			$nama_sertifikat = '';
		}
		else
		{
			$data_sertifikat = array('image_metadata' => $this->upload->data());
			$nama_sertifikat = $this->upload->data('file_name');

		}
		$this->db->set('cv', $nama_cv);
		$this->db->set('surat_lamaran', $nama_suratlamaran);
		$this->db->set('rangkuman_nilai', $nama_rangkumannilai);
		$this->db->set('krs_upload', $nama_krs);
		$this->db->set('ktm_upload', $nama_ktm);
		$this->db->set('sertifikat', $nama_sertifikat);
		$this->db->where('id_user', $_POST['id_user']);
		$this->db->update('manlan_admin');
		echo "<script>alert('Data Berhasil Disimpan');</script>";
	}
	public function biodata(){
		$this->db->set('nama', $_POST['nama']);
		$this->db->set('npm', $_POST['npm']);
		$this->db->set('kelas', $_POST['kelas']);
		$this->db->set('email', $_POST['email']);
		$this->db->set('telepon', $_POST['telepon']);
		$this->db->set('region', $_POST['region']);
		$this->db->set('jurusan', $_POST['jurusan']);
		$this->db->set('angkatan', $_POST['angkatan']);
		$this->db->set('lahir', $_POST['ttl']);
		$this->db->set('alamat', $_POST['alamat']);
		$this->db->where('id_user', $_POST['id_user']);
		$this->db->update('manlan_admin');
		echo "<script>alert('Data Berhasil Disimpan');</script>";
	}
	public function seleksi_berkas(){
		$this->db->set('seleksi_berkas', $_POST['seleksi_berkas']);
		$this->db->where('id_user', $_POST['id_user']);
		$this->db->update('manlan_admin');
		echo "<script>alert('Data Berhasil Disimpan');</script>";
	}
	public function seleksi_ujian(){
		$this->db->set('seleksi_ujian', $_POST['seleksi_ujian']);
		$this->db->where('id_user', $_POST['id_user']);
		$this->db->update('manlan_admin');
		echo "<script>alert('Data Berhasil Disimpan');</script>";
	}
	public function nilaiseleksi_ujian(){
		$ql = $this->db->select('id_penilaian')->from('manlan_nilaiujian')->where('id_penilaian',$_POST['id_user'])->get();
		if( $ql->num_rows() > 0 ) {
			$this->db->set('nilai_ujian', $_POST['nilai_ujian']);
			$this->db->where('id_penilaian', $_POST['id_user']);
			$this->db->update('manlan_nilaiujian');
			echo "<script>alert('Data Berhasil Diubah');</script>";
		}
		else{
			$data = [
				'id_penilaian' => $_POST['id_user'],
				'nilai_ujian' => $_POST['nilai_ujian'],
			];
			$this->db->insert('manlan_nilaiujian', $data);
			echo "<script>alert('Data Berhasil Disimpan');</script>";
		}
	}
	public function seleksi_wawancaratutor(){
		$this->db->set('seleksi_wawancara', $_POST['seleksi_wawancaratutor']);
		$this->db->where('id_user', $_POST['id_user']);
		$this->db->update('manlan_admin');
		echo "<script>alert('Data Berhasil Disimpan');</script>";
	}
	public function seleksi_wawancarastaff(){
		if ($_POST['seleksi_wawancarastaff']== 'ya'){
			$hasil_seleksiwawancarastaff = 'lulus';
		}
		else if ($_POST['seleksi_wawancarastaff']== 'tidak'){
			$hasil_seleksiwawancarastaff = 'tidak';
		}
		else {
			$hasil_seleksiwawancarastaff = 'proses';
		}
		$this->db->set('seleksi_staff', $_POST['seleksi_wawancarastaff']);
		$this->db->set('status_peserta', $hasil_seleksiwawancarastaff);
		$this->db->where('id_user', $_POST['id_user']);
		$this->db->update('manlan_admin');
		echo "<script>alert('Data Berhasil Disimpan');</script>";
	}
	public function seleksi_wawancara(){
		/*
		$ql = $this->db->select('nama_penilai')->from('manlan_nilaitutor')->where('nama_penilai',$_POST['nama_penilai'])->get();
		$multipleWhere = ['id_penilaian' => $_POST['id_penilaian'], 'nama_penilai' => $_POST['nama_penilai']];
		if( $ql->num_rows() > 0 ) {
			$this->db->set('nama', $_POST['nama']);
			$this->db->set('email', $_POST['email']);
			$this->db->set('penyampaian', $_POST['penyampaian']);
			$this->db->set('penguasaan', $_POST['penguasaan']);
			$this->db->set('pengetahuan', $_POST['pengetahuan']);
			$this->db->set('kerapihan', $_POST['kerapihan']);
			$this->db->set('ketegasan', $_POST['ketegasan']);
			$this->db->set('rekomendasi', $_POST['rekomendasi']);
			$this->db->set('nama_penilai', $_POST['nama_penilai']);
			$this->db->where($multipleWhere);
			$this->db->update('manlan_nilaitutor');


			//$this->db->set('seleksi_wawancara', $_POST['rekomendasi']);
			//$this->db->where('id_user', $_POST['id_penilaian']);
			//$this->db->update('manlan_admin');


			echo "<script>alert('Nilai peserta berhasil diupdate');</script>";
		} else {
		*/
			$data = [
				'id_penilaian' => $_POST['id_penilaian'],
				'nama' => $_POST['nama'],
				'email' => $_POST['email'],
				'penyampaian' => $_POST['penyampaian'],
				'penguasaan' => $_POST['penguasaan'],
				'pengetahuan' => $_POST['pengetahuan'],
				'kerapihan' => $_POST['kerapihan'],
				'ketegasan' => $_POST['ketegasan'],
				'rekomendasi' => $_POST['rekomendasi'],
				'nama_penilai' => $_POST['nama_penilai'],
			];
			$this->db->insert('manlan_nilaitutor', $data);

			//$this->db->set('seleksi_wawancara', $_POST['rekomendasi']);
			//$this->db->where('id_user', $_POST['id_penilaian']);
			//$this->db->update('manlan_admin');


			echo "<script>
						alert('Peserta berhasil dinilai');
    				  </script>";
		//}
	}
	public function seleksi_wawancara2(){
		/*
		$ql = $this->db->select('nama_penilai')->from('manlan_nilaiwawancara')->where('nama_penilai',$_POST['nama_penilai'])->get();
		if( $ql->num_rows() > 0 ) {
			$this->db->set('nama', $_POST['nama']);
			$this->db->set('email', $_POST['email']);
			$this->db->set('komentar', $_POST['komentar']);
			$this->db->set('rekomendasi', $_POST['rekomendasi']);
			$this->db->set('nama_penilai', $_POST['nama_penilai']);
			$this->db->where('nama_penilai', $_POST['nama_penilai']);
			$this->db->update('manlan_nilaiwawancara');

			//$this->db->set('seleksi_wawancara', $_POST['rekomendasi']);
			//$this->db->where('id_user', $_POST['id_penilaian']);
			//$this->db->update('manlan_admin');


			echo "<script>alert('Nilai peserta berhasil diupdate');</script>";
		} else {
		*/
			$data = [
				'id_penilaian' => $_POST['id_penilaian'],
				'nama' => $_POST['nama'],
				'email' => $_POST['email'],
				'komentar' => $_POST['komentar'],
				'rekomendasi' => $_POST['rekomendasi'],
				'nama_penilai' => $_POST['nama_penilai'],
			];
			$this->db->insert('manlan_nilaiwawancara', $data);

			/*
			$this->db->set('seleksi_wawancara', $_POST['rekomendasi']);
			$this->db->where('id_user', $_POST['id_penilaian']);
			$this->db->update('manlan_admin');
			*/

			echo "<script>
						alert('Peserta berhasil dinilai');
    				  </script>";
		//}
	}
	public function seleksi_wawancara3(){
		/*
		$ql = $this->db->select('nama_penilai')->from('manlan_nilaiprogrammer')->where('nama_penilai',$_POST['nama_penilai'])->get();
		if( $ql->num_rows() > 0 ) {
			$this->db->set('nama', $_POST['nama']);
			$this->db->set('email', $_POST['email']);
			$this->db->set('kecepatan', $_POST['kecepatan']);
			$this->db->set('ketepatan', $_POST['ketepatan']);
			$this->db->set('rekomendasi', $_POST['rekomendasi']);
			$this->db->set('nama_penilai', $_POST['nama_penilai']);
			$this->db->where('nama_penilai', $_POST['nama_penilai']);
			$this->db->update('manlan_nilaiprogrammer');

			//$this->db->set('seleksi_wawancara', $_POST['rekomendasi']);
			//$this->db->where('id_user', $_POST['id_penilaian']);
			//$this->db->update('manlan_admin');

			echo "<script>alert('Nilai peserta berhasil diupdate');</script>";
		} else {
		*/
			$data = [
				'id_penilaian' => $_POST['id_penilaian'],
				'nama' => $_POST['nama'],
				'email' => $_POST['email'],
				'kecepatan' => $_POST['kecepatan'],
				'ketepatan' => $_POST['ketepatan'],
				'rekomendasi' => $_POST['rekomendasi'],
				'nama_penilai' => $_POST['nama_penilai'],
			];
			$this->db->insert('manlan_nilaiprogrammer', $data);

			//$this->db->set('seleksi_wawancara', $_POST['rekomendasi']);
			//$this->db->where('id_user', $_POST['id_penilaian']);
			//$this->db->update('manlan_admin');

			echo "<script>
						alert('Peserta berhasil dinilai');
    				  </script>";
		//}
	}
	public function seleksi_staff(){
		/*
		$ql = $this->db->select('nama_penilai')->from('manlan_nilaistaff')->where('nama_penilai',$_POST['nama_penilai'])->get();
		if( $ql->num_rows() > 0 ) {
			$this->db->set('nama', $_POST['nama']);
			$this->db->set('email', $_POST['email']);
			$this->db->set('penyampaian', $_POST['penyampaian']);
			$this->db->set('penguasaan', $_POST['penguasaan']);
			$this->db->set('pengetahuan', $_POST['pengetahuan']);
			$this->db->set('pemrograman', $_POST['pemrograman']);
			$this->db->set('kerapihan', $_POST['kerapihan']);
			$this->db->set('ketegasan', $_POST['ketegasan']);
			$this->db->set('rekomendasi', $_POST['rekomendasi']);
			$this->db->set('nama_penilai', $_POST['nama_penilai']);
			$this->db->set('hasil', $_POST['hasil_tahap3']);
			$this->db->where('nama_penilai', $_POST['nama_penilai']);
			$this->db->update('manlan_nilaistaff');

			//$this->db->set('seleksi_staff', $_POST['rekomendasi']);
			//$this->db->where('id_user', $_POST['id_penilaian']);
			//$this->db->update('manlan_admin');

			//$this->db->set('status_peserta', $_POST['hasil_tahap3']);
			//$this->db->where('id_user', $_POST['id_penilaian']);
			//$this->db->update('manlan_admin');

			echo "<script>alert('Nilai peserta berhasil diupdate');</script>";
		} else {
		*/
			$data = [
				'id_penilaian' => $_POST['id_penilaian'],
				'nama' => $_POST['nama'],
				'email' => $_POST['email'],
				'penyampaian' => $_POST['penyampaian'],
				'penguasaan' => $_POST['penguasaan'],
				'pengetahuan' => $_POST['pengetahuan'],
				'kerapihan' => $_POST['kerapihan'],
				'ketegasan' => $_POST['ketegasan'],
				'komentar' => $_POST['komentar'],
				'rekomendasi' => $_POST['rekomendasi'],
				'nama_penilai' => $_POST['nama_penilai'],
			];
			$this->db->insert('manlan_nilaistaff', $data);

			//$this->db->set('seleksi_staff', $_POST['rekomendasi']);
			//$this->db->set('status_peserta', $_POST['hasil_tahap3']);
			//$this->db->where('id_user', $_POST['id_penilaian']);
			//$this->db->update('manlan_admin');

			echo "<script>
						alert('Peserta berhasil dinilai');
    				  </script>";
		//}
	}
}
