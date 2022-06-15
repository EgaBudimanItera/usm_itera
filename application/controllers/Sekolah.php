<?php

class Sekolah extends CI_Controller{

    public function index(){
        $data = array(
            'page' => 'sekolah',
            'link' => 'sekolah',
        );
        $this->load->view('template/wrapper', $data);
    }
}
?>