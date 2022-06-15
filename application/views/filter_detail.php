<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="<?=base_url()?>">Home</a></li>
        <li class="breadcrumb-item "><a href="<?=base_url('admin/download')?>">Filter</a></li>
        <li class="breadcrumb-item "><a href="#">Detail</a></li>
    </ol>
  </div>

  <?php echo anchor('admin/ubah','<button class="btn btn-primary btn-sm mb-3"><i class="fas fa-edit fa-sm"></i> Ubah Data</button>') ?>

  <?php echo anchor('admin/download','<button class="btn btn-secondary btn-sm mb-3"><i class="fas fa-chevron-left fa-sm"></i> Kembali</button>') ?>

  <table class="table table-striped table-hover table-bordered">
    <tr align = "left">
      <td width="300px">NIK</td>
      <td>2345645</td>
    </tr>

    <tr align = "left">
      <td width="300px">No Peserta</td>
      <td>2345645</td>
    </tr>

    <tr align = "left">
      <td width="300px">Nama Lengkap</td>
      <td>Jhon Doe</td>
    </tr>

    <tr align = "left">
      <td width="300px">Tahun Daftar</td>
      <td>2022</td>
    </tr>

    <tr align = "left">
      <td width="300px">Jenis Kelamin</td>
      <td>Laki-Laki</td>
    </tr>

    <tr align = "left">
      <td width="300px">No Handphone</td>
      <td>08565xxxxxxx</td>
    </tr>

    <tr align = "left">
      <td width="300px">Email</td>
      <td>jhondoe@jhon.com</td>
    </tr>

    <tr align = "left">
      <td width="300px">No Handphone</td>
      <td>08565xxxxxxx</td>
    </tr>

    <tr align = "left">
      <td width="300px">Jalur Seleksi</td>
      <td>USM-K</td>
    </tr>

    <tr align = "left">
      <td width="300px"></td>
      <td>USM-PK</td>
    </tr>

    <tr align = "left">
      <td width="300px">Prodi Pilihan 1</td>
      <td>S1 Perencanaan Wilayah dan Kota</td>
    </tr>

    <tr align = "left">
      <td width="300px">Prodi Pilihan 1</td>
      <td>S1 Arsitektur dan Lansekap</td>
    </tr>

    <tr align = "left">
      <td width="300px">Status Payment</td>
      <td>Sudah Bayar</td>
    </tr>

  </table>
</div>
