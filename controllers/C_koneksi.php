<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_koneksi extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_penghuni');
	}

	public function index(){
		$paket['array']=$this->model_penghuni->query_array();
		$paket['objek']=$this->model_penghuni->query_objek();
		$this->load->view('view_koneksi',$paket);
	}

	public function insert()
	{
		$this->load->view('view_insert');
	}
	public function proses_Insert()
	{
		$data['nama']=$this->input->post('nama');
		$data['alamat']=$this->input->post('alamat');
		$data['nama_ortu']=$this->input->post('nama_ortu');
		$data['nomer_hp']=$this->input->post('nomer_hp');
		$this->model_penghuni->insert($data);
		redirect(site_url('C_koneksi'));
	}

	public function select_edit_data($ID)
	{
		$data['ID']=$this->model_penghuni->select_by_id($ID)->row();
		$this->load->view('view_edit_data', $data);
	}

	public function proses_Edit()
	{
		$ID=$this->input->post('ID');
		$data['nama']=$this->input->post('nama');
		$data['alamat']=$this->input->post('alamat');
		$data['nama_ortu']=$this->input->post('nama_ortu');
		$data['nomer_hp']=$this->input->post('nomer_hp');
		$data['tanggal_masuk']=$this->input->post('tanggal_masuk');
		$eks=$this->model_penghuni->update_data($ID,$data);
		redirect('C_koneksi');	
	}
}

/* End of file Home */
/* Location: ./application/controllers/Home */