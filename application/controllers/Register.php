<?php

class Register extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('Model');
  }

  public function index(){
    $this->load->view('registrasi');
    $this->load->view('template/footer');
  }

  public function tambah_register(){

    $this->form_validation->set_rules('nik', 'nik', 'required');
    $this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'required');
    $this->form_validation->set_rules('email', 'email', 'required');
    $this->form_validation->set_rules('password', 'password', 'required|min_length[6]|max_length[40]');
    $this->form_validation->set_rules('confirm_password', 'confirm_password', 'required|matches[password]');

    if($this->form_validation->run() == FALSE){
      $this->load->view('registrasi');
      $this->load->view('template/footer');
    }else{
      $nik = $this->input->post('nik', TRUE);
      $nama_lengkap = $this->input->post('nama_lengkap', TRUE);
      $email = $this->input->post('email', TRUE);
      $password = $this->input->post('password', TRUE);
      $confirm_password = $this->input->post('confirm_password', TRUE);

      if($nik=="" || strlen($nik) < 16){
        $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                Periksa lagi nik anda !!!
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>');
        redirect('register');
      }
      else{
        if($password !=  $confirm_password){
          $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                  password harus sama !!!
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                  </div>');
          redirect('register');
        }
        else{
          $field_login = array(
            'nik' => $nik,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'level' => 'peserta',
            'tahun_daftar' => date('Y'),
            'waktu_daftar' => date("Y-m-d H:i:s"),
          );

          // $kode = $this->Model->buat_kode();

          // $no_peserta = array(
          //   'nik' => $nik,
          //   'no_pendaftaran' => date('Y')."USM".$kode
          // );
          // var_dump($field_login);
          // die();

          $peserta = array(
            'nik' => $nik,
            'nama_lengkap' => $nama_lengkap,
            'email' => $email,
            'tahun_daftar' => date('Y'),
          );

          $kondisi = array(
            'nik' => $nik,
            'tahun_daftar' => date('Y'),
          );

          $cek_user = $this->Model->ambil_banyak_kondisi('tb_login',$kondisi)->row();

          // var_dump($cek_user);
          // die();

          if(!isset($cek_user->nik) OR trim($cek_user->nik) == ""){
					   $simpan_register = $this->Model->simpan_data($field_login, 'tb_login');
					   $simpan_register = $this->Model->simpan_data($peserta, 'tb_peserta');

					if($simpan_register){
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    registrasi berhasil, silahkan buka form login anda
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>');
              redirect('register');

					}else{
            $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    registrasi gagal !!!
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>');
						redirect('register');
					}
				}else{
          $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                  nik sudah terdaftar
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                  </div>');
					redirect('register');
        }
        }
      }
    }


  }


}
 ?>
