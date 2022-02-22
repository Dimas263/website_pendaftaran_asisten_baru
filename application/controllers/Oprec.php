<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Oprec extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_m');
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }

	public function admin()
	{
		check_not_login();
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/oprec/home');
		$this->load->view('admin/oprec/include/footer');
	}
	public function search()
	{
		check_not_login();
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/oprec/search');
		$this->load->view('admin/oprec/include/footer');
	}
	public function profile()
	{
		check_not_login();
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/oprec/profile');
		$this->load->view('admin/oprec/include/footer');
	}
	public function berkas()
	{
		check_not_login();
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/oprec/berkas');
		$this->load->view('admin/oprec/include/footer');
	}
	public function ujian()
	{
		check_not_login();
		//if($this->auth_libs->user_login()->seleksi_berkas == 'ya' && $this->auth_libs->user_login()->seleksi_ujian == 'tidak' && $this->auth_libs->user_login()->seleksi_wawancara == 'tidak' && $this->auth_libs->user_login()->seleksi_staff == 'tidak'){

		//}
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/oprec/ujian');
		$this->load->view('admin/oprec/include/footer');
	}
	public function tutor()
	{
		check_not_login();
		//if($this->auth_libs->user_login()->seleksi_berkas == 'ya' && $this->auth_libs->user_login()->seleksi_ujian == 'ya' && $this->auth_libs->user_login()->seleksi_wawancara == 'tidak' && $this->auth_libs->user_login()->seleksi_staff == 'tidak'){

		//}
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/oprec/tutor');
		$this->load->view('admin/oprec/include/footer');
	}
	public function staff()
	{
		check_not_login();
		//if($this->auth_libs->user_login()->seleksi_berkas == 'ya' && $this->auth_libs->user_login()->seleksi_ujian == 'ya' && $this->auth_libs->user_login()->seleksi_wawancara == 'ya' && $this->auth_libs->user_login()->seleksi_staff == 'tidak'){

		//}
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/oprec/staff');
		$this->load->view('admin/oprec/include/footer');
	}
	public function sukses()
	{
		check_not_login();

		//if($this->auth_libs->user_login()->seleksi_berkas == 'ya' && $this->auth_libs->user_login()->seleksi_ujian == 'ya' && $this->auth_libs->user_login()->seleksi_wawancara == 'ya' && $this->auth_libs->user_login()->seleksi_staff == 'ya') {

		//}
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/oprec/final');
		$this->load->view('admin/oprec/include/footer');
	}
	public function upload_berkas(){
		check_not_login();
		$this->Data_m->upload_berkas();
		redirect(base_url('oprec/berkas'));
	}
	public function biodata(){
		check_not_login();
		$this->Data_m->biodata();
		redirect(base_url('oprec/berkas'));
	}
	public function seleksi_berkas(){
		check_not_login();
		$this->Data_m->seleksi_berkas();
		redirect(base_url('oprec/berkas'));
	}
	public function seleksi_ujian(){
		check_not_login();
		$this->Data_m->seleksi_ujian();
		redirect(base_url('oprec/ujian'));
	}
	public function seleksi_wawancaratutor(){
		check_not_login();
		$this->Data_m->seleksi_wawancaratutor();
		redirect(base_url('oprec/tutor'));
	}
	public function nilaiseleksi_ujian(){
		check_not_login();
		$this->Data_m->nilaiseleksi_ujian();
		redirect(base_url('oprec/ujian'));
	}
	public function nilai_tutor(){
		check_not_login();
		$this->Data_m->seleksi_wawancara();
		redirect(base_url('oprec/tutor'));
	}
	public function nilai_wawancara(){
		check_not_login();
		$this->Data_m->seleksi_wawancara2();
		redirect(base_url('oprec/tutor'));
	}
	public function nilai_programmer(){
		check_not_login();
		$this->Data_m->seleksi_wawancara3();
		redirect(base_url('oprec/tutor'));
	}
	public function nilai_staff(){
		check_not_login();
		$this->Data_m->seleksi_staff();
		redirect(base_url('oprec/staff'));
	}
	public function forgot(){
		check_not_login();
		$this->load->view("admin/auth/forgot");
	}
}
