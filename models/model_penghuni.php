<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_penghuni extends CI_Model {
	public function __construct(){
		parent::__construct();
	}	

	public function getlast()
	{
		$last=$this->db->query('SELECT * FROM penghuni ORDER BY ID DESC LIMIT 1');
		return $last->row();
	}

	public function query_array(){
		$query = $this->db->query('SELECT * FROM penghuni ORDER BY ID ASC');
		return $query->result_array();
	}

	public function query_objek(){
		$query = $this->db->query('SELECT * FROM penghuni ORDER BY ID DESC' );
		return $query->result();
	}

	public function insert($data)
	{
		$this->db->insert('penghuni',$data);
	}

	public function insertdata($raw)
	{
		$sql="INSERT IGNORE INTO penghuni(nama,alamat,nomer_hp,nama_ortu) VALUES(?,?,?,?);";
		$this->db->query($sql, array($raw['nama'],$raw['alamat'],$raw['nope'],$raw['ortu']));
		return $this->db->affected_rows();
	}

	function select_all()
	{
		$this->db->select('*');
		$this->db->from('penghuni');
	
		return $this->db->get();
	}

	function select_by_id($ID)
	{
		$this->db->select('*');
		$this->db->from('penghuni');
		$this->db->where('ID',$ID);
	
		return $this->db->get();
	}

	function update_data($ID, $data)
	{
		$this->db->where('ID',$ID);
		$this->db->update('penghuni',$data);
	}
}

/* End of file model_penghuni.php */
/* Location: ./application/models/model_penghuni.php */