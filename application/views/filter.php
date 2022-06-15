<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Filter Data</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="<?=base_url()?>">Home</a></li>
        <li class="breadcrumb-item "><a href="#">Filter</a></li>
    </ol>
  </div>
  <div class="row mb-3">
       <div class="col-xl-12 col-md-6 mb-4">
          <div class="card h-100">
              <br>
              <form class="form-horizontal" action="<?=base_url()?>loginadmin/proses" method="POST" role="form">
                  <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Nama Peserta :</label>
                      <div class="col-sm-4">
                          <input type="text" class="form-control" name="nama_lengkap" placeholder="masukkan Nama Peserta">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Tahun :</label>
                      <div class="col-sm-4">
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>--pilih tahun pendaftaran--</option>
                          <option>2022</option>
                          <option>2021</option>
                        </select>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Status Pembayaran :</label>
                      <div class="col-sm-4">
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>--pilih status pembayaran--</option>
                          <option>Belum Bayar</option>
                          <option>Sudah Bayar</option>
                        </select>
                      </div>
                  </div>

                  <div class="form-group">
                    <div class="row col-sm-8">
                      <div>
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                      </div>
                      <div>
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-secondary">Reset</button>
                        </div>
                    </div>
                  </div>

              </form>
          </div>

      </div>
  </div>
</div>

<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Filter Data</h1>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
      <tr>
        <th>NO</th>
        <th>NIK</th>
        <th>No Peserta</th>
        <th>Nama Lengkap</th>
        <th>Tahun Daftar</th>
        <th>detail</th>
      </tr>
      <?php $no = 1; ?>
      <tr>
        <td width="20px"><?php echo $no++;?></td>
        <td width="150px">1472045803000022</td>
        <td width="150px">2022120212</td>
        <td width="150px">Jhon Doe</td>
        <td width="50px">2022</td>
        <td width="20px"><?php echo anchor('admin/detail', '<div class="btn btn-primary"><i class="fa fa-eye"></i></div>')?></td>
      </tr>
    </table>
  </div>
</div>
