<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{

		$data=array(
		  'page'=>'user',
		  'link'=>'user',
			'data' => $this->Model->kueri("SELECT * FROM tb_login where level='Admin'")->result(),

		);
		$this->load->view('template/wrapper', $data);
	}

	public function add_user(){
		$data=array(
		  'page'=>'tambah_user',
		  'link'=>'tambah_user',

		);
		$this->load->view('template/wrapper', $data);
	}

	public function proses_add(){
		$nik = $this->input->post('nik', TRUE);
		$password = $this->input->post('password', TRUE);

		$data = array(
			'nik' => $nik,
			'password' => password_hash($password, PASSWORD_DEFAULT),
			'level' => 'admin',
			'tahun_daftar' => date('Y'),
		);

		$simpan = $this->Model->simpan_data($data, 'tb_login');

		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                                              data user berhasil di tambahkan
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                              </div>');
      redirect ('user');

	}
}
