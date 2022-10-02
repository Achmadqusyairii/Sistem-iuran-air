<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi extends CI_Controller {

  public function index()

  {
    $data['tbl_blok'] = $this->Modelprovinsi->SemuaData();
    $this->load->view('tamplate/header');
    $this->load->view('tamplate/sidebar');
    $this->load->view('tamplate/topbar');
    $this->load->view('provinsi', $data);
    $this->load->view('tamplate/footer'); 
  }
  public function tambah_data()
	{
		$data['tbl_blok'] = $this->Modelprovinsi->SemuaData();
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('tambah_data_provinsi', $data);
		$this->load->view('tamplate/footer');	
	}

	public function tambah_data_provinsi() // ini ambil dari nama model
	{
		$this->Modelprovinsi->tambah_data_blok(); // ini ambil dari fuction model
		redirect('provinsi'); //ini kembali ke view
	}

	public function hapus_data($id) // fungsi hapus data mengambil ID 
	{
		$this->Modelprovinsi->hapus_data ($id);// lihat di model lalu lakukan fuction hapus data
		redirect('provinsi'); // kembali ke view
	}
	public function edit_data ($id)
	{
		$data['tbl_provinsi']=$this->Modelprovinsi->ambil_id_provinsi($id);
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('edit_data_provinsi', $data);
		$this->load->view('tamplate/footer');
	}

	public function edit_data_provinsi ()
	{
	$this -> Modelprovinsi->proses_edit_provinsi();
	redirect('provinsi');
	}

	//kabupaten
	
}
?>