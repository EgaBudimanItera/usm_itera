<?php 

class Input_peserta extends CI_Controller{

    public function index(){
        $data = array(
            'page' => 'profil_form',
            'link' => 'profil_form',
        );
        $this->load->view('template/wrapper', $data);
    }
}
?>