<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontenweb extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Modeldata');
    }

    public function index()
    {
        $this->load->view('bagian/header');
        $this->load->view('home');
        $this->load->view('bagian/footer');
    }

    public function addData()
    {
        $this->load->model('Modeldata');
        $this->Modeldata->addData();
        redirect('Kontenweb/data_mahasiswa');
    }

    public function data_mahasiswa()
    {
        $data['mahasiswa'] = $this->Modeldata->getdata();
        $this->load->view('bagian/header');
        $this->load->view('data_mahasiswa', $data);
	$this->load->view('bagian/footer');
    }

    public function editData()
    {
        $this->Modeldata->editData();
        redirect('Kontenweb/data_mahasiswa');
    }
	public function deleteData()
	{
		$id = $_GET['id'];
		$this->Modeldata->deleteData($id);
		redirect('Kontenweb/data_mahasiswa');
	}
}
