<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Oprec extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Modeldata');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }

	public function admin()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/home');
		$this->load->view('admin/footer');
	}

	/**
    public function addData()
    {
        $this->load->model('Modeldata');
        $this->Modeldata->addData();
        redirect('Oprec/data_mahasiswa');
    }

    public function data_mahasiswa()
    {
        $data['mahasiswa'] = $this->Modeldata->getdata();
        $this->load->view('header');
        $this->load->view('data_mahasiswa', $data);
		$this->load->view('footer');
    }

    public function editData()
    {
        $this->Modeldata->editData();
        redirect('Oprec/data_mahasiswa');
    }
	public function deleteData()
	{
		$id = $_GET['id'];
		$this->Modeldata->deleteData($id);
		redirect('Oprec/data_mahasiswa');
	}
	 **/
}
