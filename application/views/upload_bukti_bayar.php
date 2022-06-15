<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Bukti Bayar</h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="<?=base_url()?>">Home</a></li>
        <li class="breadcrumb-item "><a href="#">Bukti Bayar</a></li>
    </ol>
  </div>

  <div class="row mb-3">
    <div class="col-xl-12 col-md-6 mb-4">
      <div class="card h-100">
        <br>
        <form class="" action="index.html" method="post">
          <div class="form-group">
              <label class="control-label col-sm-4" for="email">NIK :</label>
              <div class="col-sm-6">
                  <input type="text" class="form-control" name="nik" placeholder="masukkan NIK anda" required>
              </div>
          </div>

          <!-- <div class="form-group">
              <label class="control-label col-sm-2" for="email">No Pendaftaran :</label>
              <div class="col-sm-4">
                  <input type="text" class="form-control" name="no_pendaftaran" placeholder="masukkan no pendaftaran anda" required>
              </div>
          </div> -->

          <div class="form-group">
              <label class="control-label col-sm-4" for="email">Nama Lengkap :</label>
              <div class="col-sm-6">
                  <input type="text" class="form-control" name="nama_lengkap" placeholder="masukkan nama lengkap anda" required>
              </div>
          </div>

          <div class="form-group">
              <label class="control-label col-sm-4" for="email">Tanggal Bayar :</label>
              <div class="col-sm-6">
                  <input type="date" class="form-control" name="tgl_pendaftaran" placeholder="masukkan tanggal pendaftaran" required>
              </div>
          </div>

          <div class="form-group">
              <label class="control-label col-sm-4" for="email">Upload Bukti Pendaftaran :</label>
              <div class="col-sm-6">
                  <input type="file" class="form-control" name="no_pendaftaran" placeholder="upload bukti pendaftaran" required>
              </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
          </div>
        </form>
      </div>

    </div>

  </div>
</div>
