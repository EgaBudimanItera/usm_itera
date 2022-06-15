<?php

class Keluarga extends CI_Controller{

    public function index(){
        $data = array(
            'page' => 'keluarga',
            'link' => 'keluarga',
        );
        $this->load->view('template/wrapper', $data);
    }
}
?>