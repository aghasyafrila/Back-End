<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$data['data'] = $this->M_Welcome->getDataSiswa()->result();
		$this->load->view('welcome_message', $data);
	}

	public function keHalamanTambah(){
		$this->load->view('form_tambah');
	}

	public function prosesTambah(){
		$data = array(
			'nama_siswa' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas'),
			'alamat' => $this->input->post('alamat'),
			'jk' => $this->input->post('jk'),
			'tanggal_lahir' => $this->input->post('tgl'),
		);

		$input = $this->M_Welcome->inputData($data);

		if($input){
			redirect(base_url());
		}else{
			echo "gagal";
		}
	}

	public function kehalamanEdit($id){
		$data['data'] = $this->M_Welcome->getDataWhere($id)->row();

		$this->load->view('form_edit', $data);
	}

	public function editSiswa(){
		$data = array(
			'nama_siswa' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas'),
			'alamat' => $this->input->post('alamat'),
			'jk' => $this->input->post('jk'),
			'tanggal_lahir' => $this->input->post('tgl'),
		);

		$id = $this->input->post('id');
		$update = $this->M_Welcome->updateSiswa($id, $data);

		if($update){
			redirect(base_url());
		}else{
			echo "Gagal";
		}
	}

	public function proseshapus($id){
		$this->db->where('id',$id);
		$this->db->delete('data');

		redirect(base_url());
	}
}
