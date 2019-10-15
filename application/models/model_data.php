<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data extends CI_Model {



	public function tampil_data()
	{
		$data=$this->db->get("data");
		return $data;
	}
	public function tambah_data($data){
		$this->db->insert('data', $data);
	}
	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	public function edit_data($where,$table)
	{
		$data = $this->db->get_where($table,$where);		
		return $data;
	} 
}
?>