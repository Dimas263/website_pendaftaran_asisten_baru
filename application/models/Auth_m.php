<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth_m extends CI_Model{
	public function login($post){
		$this->db->select('*');
		$this->db->from('manlan_admin');
		$this->db->where('npm',$post['npm']);
		$this->db->where('password',sha1($post['password']));
		$query = $this->db->get();
		return $query;
	}

	public function get($id = null){
		$this->db->from('manlan_admin');
		if($id != null){
			$this->db->where('id_user',$id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function register(){

		$directoryName = './assets/upload/foto/'.$_POST['nama'].'/';
		/* Check if the directory already exists. */
		if (!is_dir($directoryName)) {
			/* Directory does not exist, so lets create it. */
			mkdir($directoryName, 0755);
		}
		$config['upload_path'] = $directoryName;
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size'] = 2048;


		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('foto'))
		{
			//$error = array('error' => $this->upload->display_errors());
			//$this->load->view('auth/register', $error);
			echo "<script>
						alert('Maaf, format foto yang anda masukan tidak sesuai. Coba lagi ya..');
    					window.location='".base_url('auth/register')."';
    				  </script>";
		}
		else
		{
			$data_foto = array('image_metadata' => $this->upload->data());
			$nama_foto = $this->upload->data('file_name');
			$query = $this->db->query('SELECT * FROM manlan_admin');
			$jumlah_data = $query->num_rows();
			$i = $jumlah_data + 1;
			$ql = $this->db->select('email')->from('manlan_admin')->where('npm',$_POST['npm'])->get();

			if( $ql->num_rows() > 0 ) {
				echo "<script>
						alert('Akun anda sudah ada, silahkan login');
    				  </script>";
			} else {
				$data = [
					'email' => $_POST['email'],
					'password' => sha1($_POST['signup-password']),
					'nama' => $_POST['nama'],
					'jurusan' => $_POST['jurusan'],
					'sebagai' => $_POST['level'],
					'foto' => $nama_foto,
					'npm' => $_POST['npm'],
					'kelas' => '',
					'telepon' => '',
					'region' => '',
					'angkatan'  => '',
					'lahir'  => '',
					'alamat'  => '',
					'cv'  => '',
					'surat_lamaran'  => '',
					'rangkuman_nilai' => '',
					'krs_upload' => '',
					'ktm_upload' => '',
					'sertifikat' => '',
					'status_peserta' => 'proses',
					'seleksi_berkas' => ' ',
					'seleksi_ujian' => ' ',
					'seleksi_wawancara' => ' ',
					'seleksi_staff'=> ' ',
				];

				$this->db->insert('manlan_admin', $data);
				echo "<script>
						alert('Selamat, anda berhasil membuat akun');
    				  </script>";
			}
		}
	}
	public function forgotpassword(){

		if ($_POST['passwordold'] == sha1($_POST['oldpassword'])){
			$this->db->set('password', sha1($_POST['newpassword']));
			$this->db->where('id_user', $_POST['id_user']);
			$this->db->update('manlan_admin');
			echo "<script>alert('Password berhasil diupdate');</script>";
			redirect(base_url('oprec/admin'));
		}
		else{
			echo "<script>alert('Password lama salah');</script>";
			redirect(base_url('oprec/forgot'));
		}
	}
}
