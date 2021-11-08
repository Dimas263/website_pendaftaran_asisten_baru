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
        $this->load->view('bagian/kepala');
        $this->load->view('utama');
        $this->load->view('bagian/bawah');
    }

    public function addData()
    {
        $this->load->model('Modeldata');
        $this->Modeldata->addData();
        redirect('Kontenweb/dataMahasiswa');
    }

    public function dataMahasiswa()
    {
        $data['mahasiswa'] = $this->Modeldata->getdata();
        $this->load->view('bagian/kepala');
        $this->load->view('dataMahasiswa', $data);
	$this->load->view('bagian/bawah');
    }

    public function editData()
    {
        $this->Modeldata->editData();
        redirect('Kontenweb/dataMahasiswa');
    }
	public function deleteData()
	{
		$id = $_GET['id'];
		$this->Modeldata->deleteData($id);
		redirect('Kontenweb/dataMahasiswa');
	}
}
