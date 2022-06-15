<?php
	$nik = $this->session->userdata('nik');
	// $no_pendaftaran=$this->session->userdata('no_pendaftaran');
	$query = $this->Model->ambil_banyak_kondisi('tb_peserta', array('nik' => $nik));
	// $nama_lengkap = @$query->row()->nama_lengkap;
?>

<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">History Daftar</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="<?=base_url()?>">Home</a></li>
        <li class="breadcrumb-item "><a href="#">USM</a></li>
    </ol>
  </div>

  <?php echo $this->session->flashdata('pesan')?>

 <?php echo anchor('pilih_usm/pilih_seleksi','<button class="btn btn-primary btn-sm mb-3"><i class="fas fa-plus fa-sm"></i> pilih jenis USM</button>') ?>

    
  <table class="table table-hover table-striped table-bordered">
    <tr>
      <th>No</th>
      <th>NIK</th>
      <th>Nama Lengkap</th>
      <th>Jenis USM</th>
      <th>Status</th>
      <th>Detail</th>
    </tr>

    <?php
      $no = 1;
      foreach ($peserta as $d) {
        
    ?>

    <tr>
      <td width="40px"><?php echo $no++?></td>
      <td width="250px"><?php echo $d->nik?></td>
      <td width="250px"><?php echo $d->nama_lengkap?></td>
      <td width="200px"><?php echo $d->jenis_usm?></td>
      <td width="100px">
        <?php if($d->status == '1'){?>
          <button class="btn btn-success">aktif</button>
        <?php }else{ ?>
          <button class="btn btn-warning">tidak aktif</button>
        <?php } ?>

       </td>
      <td width="20px">
      <?php if($d->status_bayar == '1') {?>  
      <?php echo anchor('jadwal_penting/ubah_jadwal/', '<div class="btn btn-primary"><i class="fa fa-edit"></i></div>')?></td>
      <? } else { ?>
        
      </td>
      <?php } ?>
      </tr>
    <?php } ?>

  </table>
      </div>
