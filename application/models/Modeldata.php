<?php

class Modeldata extends CI_Model
{
    public function addData()
    {
		$query = $this->db->query('SELECT * FROM mahasiswa');
		$jumlah_data = $query->num_rows();
		$i = $jumlah_data + 1;

        $data = [
			'id_mahasiswa' => $i,
            'nama' => $_POST['nama'],
            'jenis_kelamin' => $_POST['jenis_kelamin'],
            'tanggal_lahir' => $_POST['tanggal_lahir'],
            'kota_lahir' => $_POST['kota_lahir'],
            'alamat' => $_POST['alamat']
        ];

        $this->db->insert('mahasiswa', $data);
    }

    public function getData()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function editData()
    {
        $this->db->set('nama', $_POST['nama']);
        $this->db->set('jenis_kelamin', $_POST['jenis_kelamin']);
        $this->db->set('tanggal_lahir', $_POST['tanggal_lahir']);
        $this->db->set('kota_lahir', $_POST['kota_lahir']);
        $this->db->set('alamat', $_POST['alamat']);
        $this->db->where('id_mahasiswa', $_POST['id_mahasiswa']);
        $this->db->update('mahasiswa');
    }
	public function deleteData($id)
	{
		$this->db->where('id_mahasiswa', $id);
		$this->db->delete('mahasiswa');
	}
}
