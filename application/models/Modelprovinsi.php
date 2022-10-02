<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelprovinsi extends CI_Model 
{
	public function SemuaData()
	{
		return $this->db->get('tbl_blok')->result_array(); //banyak data kepanggil ya select * from
	}
	public function tambah_data_blok() // ini lari ke kontroler
	{
		$data =[
			"kd_blok"=> $this->input->post('kd'), // ini ada di name inputan
			"nm_blok"=> $this->input->post('blok'), // ini ada di name inputan
		];
		$this->db->insert('tbl_blok', $data); // ini query masukin ke database atau query insert
	}

	public function hapus_data ($id) // buat funcion yang nanti di panggi di ctrl dan ambil id
	{
		$this->db->where('id', $id); // cari nama id lalu lakukan ambil id 
		$this->db->delete('tbl_blok'); // lalu delete data id yang adan di tbl_blok
	}

	public function ambil_id_provinsi($id)
	{
		return $this->db->get_where('tbl_provinsi', ['id' => $id])
		->row_array();
	}

	public function proses_edit_provinsi ()
	{
		$data =[
			"kd_prov"=> $this->input->post('kd'),
			"provinsi"=> $this->input->post('provinsi'),
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tbl_provinsi', $data);
	}

	//kabupaten
	

	
}