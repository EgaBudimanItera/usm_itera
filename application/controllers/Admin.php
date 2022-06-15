<?php

class Admin extends CI_Controller{
  public function __construct(){
		parent::__construct();

		if($this->session->userdata('level') != "admin"){
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
    $data = array(
      'page' => 'data_peserta',
      'link' => 'data_peserta',
    );
    $this->load->view('template/wrapper', $data);
  }

  public function download(){
    $data = array(
      'page' => 'filter',
      'link' => 'filter',
    );
    $this->load->view('template/wrapper', $data);
  }

  public function detail(){
    $data = array(
      'page' => 'filter_detail',
      'link' => 'filter_detail',
    );
    $this->load->view('template/wrapper', $data);
  }
}
 ?>
