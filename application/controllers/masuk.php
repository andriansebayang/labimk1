<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
class Masuk extends CI_Controller{

	function __construct(){
		parent::__construct();
	} 
 
	public function index(){
		$this->load->view('masuk_view');
	}
	public function tambah(){
		$data['data'] = $this->model_data->tampil_data()->result(); 
		$this->load->view('v_tambah',$data);
	}

	public function tambah_aksi(){

		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
	$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');

 
		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat
			); 
		$this->model_data->tambah_data($data,'data');
		redirect('masuk/tambah');
	}
	public function hapus($nim){
		$where = array('nim' => $nim);
		$this->model_data->hapus_data($where,'data');
		redirect('masuk/tambah');
	}
	public function edit($nim){
	$where = array('nim' => $nim);
	$data['data'] = $this->model_data->edit_data($where,'data')->result();
	$this->load->view('v_edit',$data);
	}

	 

	public function update(){
	$nim = $this->input->post('nim');
	$nama = $this->input->post('nama');
	$jenis_kelamin = $this->input->post('jenis_kelamin');	
		$alamat = $this->input->post('alamat');

	$data = array(
		'nim' => $nim,
		'nama' => $nama,
		'jenis_kelamin' => $jenis_kelamin,		
		'alamat' => $alamat
	);
 
	$where = array(
		'nim' => $nim
	);
 
	$this->model_data->update_data($where,$data,'data');
	redirect('masuk/tambah');
	}
}