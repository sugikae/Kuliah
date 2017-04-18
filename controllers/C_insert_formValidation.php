<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_insert_formValidation extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->load->model('model_penghuni'); //untuk menampilkan kembali data yang sudah ditambah
		}

		public function index()
		{
			$paket['objek']=$this->model_penghuni->query_objek();
			$this->load->view('view_koneksi', $paket);
		}

		public function insert()
		{

			$this->form_validation->set_rules('in_nama', 'Nama', 'trim|required');
			$this->form_validation->set_rules('in_alamat', 'Alamat', 'trim|required');
			$this->form_validation->set_rules('in_nope', 'Nomer hp', 'trim|required');
			$this->form_validation->set_rules('in_ortu', 'Nama Orang Tua', 'trim|required');


			if($this->form_validation->run()==FALSE)
			{
				$paket['last']=$this->model_penghuni->getlast();
				$this->load->view('view_insert', $paket);
			}else
			{
				$send['nama'] = $this->input->post('in_nama');
				$send['alamat'] = $this->input->post('in_alamat');
				$send['ortu'] = $this->input->post('in_ortu');
				$send['nope'] = $this->input->post('in_nope');
				
				$kembalian['jumlah']=$this->model_penghuni->insertdata($send); //insert data


				$kembalian['objek']=$this->model_penghuni->query_objek();	//mengambil data kembali
				$this->load->view('view_koneksi', $kembalian);		
			}
		}
}

/* End of file C_insert_formValidation.php */
/* Location: ./application/controllers/C_insert_formValidation.php */