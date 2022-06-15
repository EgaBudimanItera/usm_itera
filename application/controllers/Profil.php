<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

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

	public function index()
	{

		$data=array(
		  'page'=>'biodata',
		  'link'=>'biodata',

		);
		$this->load->view('template/wrapper', $data);
	}
}
