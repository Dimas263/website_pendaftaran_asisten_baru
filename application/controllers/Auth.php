<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_m');
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
	}
	public function index()
	{
		check_already_login();
		$this->load->view('admin/auth/login');
	}
	public function login()
	{
		check_already_login();
		$this->load->view('admin/auth/login');
	}
	public function register()
	{
		$this->load->view('admin/auth/deadline');
	}
	public function process()
	{
		$post = $this->input->post(null,TRUE);
		if(isset($post['login'])){
			$this->load->model('auth_m');
			$query = $this->auth_m->login($post);
			if($query->num_rows()>0){
				$row = $query->row();
				$params = array(
					'id_user' => $row->id_user,
					'sebagai' => $row->sebagai,
				);
				$this->session->set_userdata($params);
				echo "<script>
						alert('selamat, login berhasil');
    					window.location='".base_url('oprec/admin')."';
    				  </script>";
			}
			else{
				echo "<script>
						alert('maaf login gagal, npm / password salah');
						window.location='".base_url('auth/login')."';
					  </script>";
			}
		}
	}

	public function create(){
		$this->Auth_m->register();
		redirect(base_url('auth/login'));
	}

	public function logout()
	{
		$params = array('id_user','sebagai');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
	public function forgot(){
		$this->Auth_m->forgotpassword();
	}
}

