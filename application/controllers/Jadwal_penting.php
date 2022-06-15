<?php

class Jadwal_penting extends CI_Controller{

  public function index(){

    $data = array(
      'page' => 'd_jadwal_penting',
      'link' => 'd_jadwal_penting',
      'data' => $this->Model->kueri("SELECT * FROM tb_jadwal_penting order by urutan asc")->result()
    );
    $this->load->view('template/wrapper', $data);
  }

  public function add_jadwal(){
    $data = array(
      'page' => 'jadwal_penting',
      'link' => 'jadwal_penting',
    );
    $this->load->view('template/wrapper', $data);
  }

  public function proses_add(){
    $keterangan = $this->input->post('keterangan', TRUE);
    $tgl_jadwal = $this->input->post('tgl_jadwal', TRUE);
    $urutan = $this->input->post('urutan', TRUE);

    $data = array(
      // 'id_jadwal_penting' => $id,
      'keterangan' => $keterangan,
      'tgl_jadwal' => $tgl_jadwal,
      'urutan' => $urutan,
    );

    $simpan = $this->Model->simpan_data($data, 'tb_jadwal_penting');
    $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                                              data Jadwal berhasil di tambahkan
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                              </div>');
      redirect ('jadwal_penting');

  }

  public function ubah_jadwal($id_jadwal_penting){
    $data = array(
      'page' => 'u_jadwal_penting',
      'link' => 'u_jadwal_penting',
      'data' => $this->Model->kueri("SELECT * FROM tb_jadwal_penting where id_jadwal_penting='$id_jadwal_penting'")->row()
    );
    $this->load->view('template/wrapper', $data);
  }

  public function proses_edit(){
    $id_jadwal_penting = $this->input->post('id_jadwal_penting');

    $data = array(
      'keterangan' => $this->input->post('keterangan'),
      'tgl_jadwal' => $this->input->post('tgl_jadwal'),
      'urutan' => $this->input->post('urutan'),
    );

    $ubah = $this->Model->update('id_jadwal_penting', $id_jadwal_penting, 'tb_jadwal_penting', $data);
    if($ubah){
      $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                data Jadwal berhasil di ubah
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>');
        redirect ('jadwal_penting');
    }else{
      $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                data Jadwal gagal di ubah
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>');
        redirect ('jadwal_penting');
    }
  }

}
 ?>
