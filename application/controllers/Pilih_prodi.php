<?php

class Pilih_prodi extends CI_Controller{

    public function index(){
        $data = array(
            'page' => 'pilih_prodi',
            'link' => 'pilih_prodi',
        );

        $this->load->view('template/wrapper', $data);
    }
}
?>