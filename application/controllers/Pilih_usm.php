<?php

class Pilih_usm extends CI_Controller{

  public function index(){
    $nik = $this->session->userdata('nik');
    $query = $this->Model->ambil_banyak_kondisi('tb_peserta', array('nik'=>$nik));
    $id = $query->row()->nik;
    $tampil = $this->Model->kueri("SELECT tb_pilih_usm.nik, tb_peserta.nama_lengkap, tb_pilih_usm.jenis_usm, tb_pilih_usm.status, tb_peserta.status_bayar
    FROM tb_pilih_usm
    JOIN tb_peserta ON tb_pilih_usm.nik = tb_peserta.nik
    WHERE tb_pilih_usm.nik = $nik")->result();
    $data = array(
      'page' => 'pilih_usm',
      'link' => 'pilih_usm',
      'peserta' => $tampil,
      // 'jenis_usm' => $this->Model->kueri("SELECT * FROM tb_pilih_usm")->result(),
    );
    $this->load->view('template/wrapper', $data);
  }

  public function pilih_seleksi(){
    $data = array(
      'page' => 'form_pilih_usm',
      'link' => 'form_pilih_usm',
    );
    $this->load->view('template/wrapper', $data);
  }

  public function pilih_usm_pk(){
    $nik = $this->session->userdata('nik');
    // $nama = $this->session->userdata('nama_lengkap');

    $field_usm = array(
      'nik' => $nik,
      'nama_lengkap' => $nama,
      'jenis_usm' => 'usm_pk',
      'status' => '1',
    );

    $kondisi = array(
      'nik' => $nik,
    );

    $cek = $this->Model->ambil_banyak_kondisi('tb_pilih_usm',$kondisi)->row();

    if(!isset($cek->nik) OR trim($cek->nik) == ""){
      $simpan_register = $this->Model->simpan_data($field_usm, 'tb_pilih_usm');
      $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                      berhasil memilih, silahkan lakukan pembayaran !!!
                                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                      </div>');
      redirect('pilih_usm');
    }else{
      $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                      nik sudah terdaftar !!
                                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                      </div>');
      redirect('pilih_usm');
    }
  }

  public function pilih_usm_u(){
    $nik = $this->session->userdata('nik');
    // $nama = $this->session->userdata('nama_lengkap');

    $field_usm = array(
      'nik' => $nik,
      'nama_lengkap' => $nama,
      'jenis_usm' => 'usm_u',
      'status' => '1',
    );

    $kondisi = array(
      'nik' => $nik,
    );

    $cek = $this->Model->ambil_banyak_kondisi('tb_pilih_usm',$kondisi)->row();

    if(!isset($cek->nik) OR trim($cek->nik) == ""){
      $simpan_register = $this->Model->simpan_data($field_usm, 'tb_pilih_usm');
      $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                      berhasil memilih, silahkan lakukan pembayaran !!!
                                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                      </div>');
      redirect('pilih_usm');
    }else{
      $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                      nik sudah terdaftar !!
                                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                      </div>');
      redirect('pilih_usm');
    }
  }
}
 ?>
