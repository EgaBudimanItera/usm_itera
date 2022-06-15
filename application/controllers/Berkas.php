<?php

class Berkas extends CI_Controller{

    public function index(){
        $data = array(
            'page' => 'file_upload',
            'link' => 'file_upload',
        );
        $this->load->view('template/wrapper', $data);
    }
}
?>