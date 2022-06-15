<?php
class Bukti_bayar extends CI_Controller{

  public function __construct(){
		parent::__construct();

		if($this->session->userdata('level') != "peserta"){
      $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                              akses di tolak, silahkan login !!
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                              </div>');
      redirect('login');
      }
		}

  public function index(){
    $nik = $this->session->userdata('nik');
    $data = array(
      'page'=>'upload_bukti_bayar',
		  'link'=>'upload_bukti_bayar',
    );
    $this->load->view('template/wrapper', $data);
  }

  public function upload(){
    $nik = $this->input->post('nik');
    $nama_lengkap = $this->input->post('nama_lengkap');

  }

}
 ?>
