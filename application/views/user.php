<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Admin</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="<?=base_url()?>">Home</a></li>
        <li class="breadcrumb-item "><a href="#">User</a></li>
    </ol>
  </div>
  <?php echo $this->session->flashdata('pesan')?>

  <?php echo anchor('user/add_user','<button class="btn btn-primary btn-sm mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Username</button>') ?>

  <table class="table table-striped table-bordered table-hover">
    <tr>
      <th>No</th>
      <th>nama akun</th>
    </tr>

    <?php
      $no = 1;
      foreach ($data as $d) {
     ?>
    <tr>
      <td width="40px"><?php echo $no++ ?></td>
      <td><?php echo $d->nik?></td>
    </tr>
    <?php
    }
    ?>
  </table>
