<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Jadwal Penting</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="<?=base_url()?>">Home</a></li>
        <li class="breadcrumb-item "><a href="#">Jadwal Penting</a></li>
    </ol>
  </div>

  <?php echo $this->session->flashdata('pesan')?>

  <?php echo anchor('jadwal_penting/add_jadwal','<button class="btn btn-primary btn-sm mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Jadwal</button>') ?>

  <table class="table table-bordered table-hover table-striped">
    <tr>
      <th>No</th>
      <th>Keterangan</th>
      <th>Jadwal</th>
      <th colspan="2">Urutan</th>
    </tr>

    <?php
    $no = 1;
    foreach ($data as $dt) {
    ?>
    <tr>
      <td width="20px"><?php echo $no++?></td>
      <td width="750px"><?php echo $dt->keterangan?></td>
      <td width="250px"><?php echo $dt->tgl_jadwal?></td>
      <td width="20px"><?php echo $dt->urutan?></td>
      <td width="20px"><?php echo anchor('jadwal_penting/ubah_jadwal/'.$dt->id_jadwal_penting, '<div class="btn btn-primary"><i class="fa fa-edit"></i></div>')?></td>
    </tr>
    <?php
    }
    ?>
  </table>
