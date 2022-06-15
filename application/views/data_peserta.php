<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Peserta</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="<?=base_url()?>">Home</a></li>
        <li class="breadcrumb-item "><a href="#">Data Peserta</a></li>
    </ol>
  </div>

  <table class="table table-bordered table-hover table-striped">
    <tr>
      <th>No</th>
      <th>No Pendaftaran</th>
      <th>NIK</th>
      <th>Nama Lengkap</th>
      <th>Tahun Daftar</th>
      <th>Status</th>
    </tr>

    <?php
    $no = 1;
    ?>

    <tr>
      <td width="20px"><?php echo $no++?></td>
      <td width="100px">2022011002</td>
      <td width="150px">1898754525212365</td>
      <td width="150px">Jhon Doe</td>
      <td width="50px">2022</td>
      <td width="200px">
        <center>
          <button  class="btn btn-xs btn-warning" >Cetak Data Peserta</button> |
          <button  class="btn btn-xs btn-info" >KTP Kosong</button> |
          <button  class="btn btn-xs btn-info" >Bukti Bayar Kosong</button> |
          <button  class="btn btn-xs btn-info" >KK Kosong</button> |
          <button  class="btn btn-xs btn-info" >KTP Kosong</button> |
          <button  class="btn btn-xs btn-info" >Ijazah Kosong</button> |
          <button  class="btn btn-xs btn-info" >Surat bersedia aturan kampus Kosong</button>
      </td>
    </tr>
  </table>

</div>
