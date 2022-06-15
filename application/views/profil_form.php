<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Profil</h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="<?=base_url()?>">Home</a></li>
        <li class="breadcrumb-item "><a href="#">Profil</a></li>
    </ol>
    </div>

    <div class="row mb-3">
         <div class="col-xl-12 col-md-6 mb-4">
            <div class="card h-100">
                <br>
                <form class="form-horizontal" action="<?=base_url()?>loginadmin/proses" method="POST" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Nama Lengkap :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="nama_lengkap" placeholder="masukkan Nama Lengkap anda" require>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">No Pendaftaran :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="no_pendaftaran" placeholder="masukkan no pendaftaran anda" require>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">NIK :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="nik" placeholder="masukkan NIK anda" require>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Jenis Kelamin :</label>
                        <div class="col-sm-4">
                          <select class="form-control" id="exampleFormControlSelect1">
                            <option>--pilih jenis kelamin--</option>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                          </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Jenis Kelamin :</label>
                        <div class="col-sm-4">
                          <select class="form-control" id="exampleFormControlSelect1">
                            <option>--pilih agama--</option>
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Katolik</option>
                            <option>Hindu</option>
                            <option>Buddha</option>
                            <option>Konghucu</option>
                          </select>
                        </div>
                    </div>

                    <div class="form-group">
                      <div class="row col-sm-8">
                        <div class="col-sm-3">
                          <label class="control-label" for="email">Tempat Lahir</label>
                          <input type="text" class="form-control" placeholder="tempat lahir" require>
                        </div>
                        <div class="col-sm-3">
                          <label class="control-label" for="email">Tanggal Lahir</label>
                          <input type="date" class="form-control" placeholder="tanggal lahir" require>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Alamat : </label>
                      <div class="col-sm-4">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row col-sm-8">
                        <div class="col-sm-3">
                          <label class="control-label" for="email">RT</label>
                          <input type="text" class="form-control" placeholder="ex : 014" require>
                        </div>
                        <div class="col-sm-3">
                          <label class="control-label" for="email">RW</label>
                          <input type="text" class="form-control" placeholder="ex : 004" require>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Provinsi :</label>
                        <div class="col-sm-4">
                          <select class="form-control" id="exampleFormControlSelect1">
                            <option>--pilih Provinsi--</option>
                          </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Kabupaten / Kota :</label>
                        <div class="col-sm-4">
                          <select class="form-control" name="" id="exampleFormControlSelect1">
                            <option>--pilih Kabupaten / Kota--</option>
                          </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Kecamatan :</label>
                        <div class="col-sm-4">
                          <select class="form-control" name="" id="exampleFormControlSelect1">
                            <option>--pilih Kecamatan--</option>
                          </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Kelurahan :</label>
                        <div class="col-sm-4">
                          <select class="form-control" name="" id="exampleFormControlSelect1">
                            <option>--pilih Kelurahan--</option>
                          </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Kode Pos :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="kode_pos" placeholder="masukkan kode pos anda" require>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Kewarganegaraan :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="kewarganegaraan" placeholder="ex : Indonesia" require>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email :</label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control" name="email" placeholder="masukkan email anda" require>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Status Pernikahan :</label>
                        <div class="col-sm-4">
                          <select class="form-control" id="exampleFormControlSelect1">
                            <option>--pilih Status Pernikahan--</option>
                            <option>Menikah</option>
                            <option>Belum Menikah</option>
                          </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Golongan Darah :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="goldar" placeholder="masukkan golongan darah anda" require>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">No Handphone :</label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control" name="no_hp" placeholder="ex : 085423xxxxxx" require>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">No Telepon :</label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control" name="email" placeholder="ex : 07341xxxx (kosongkan jika tidak ada)" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">upload foto :</label>
                        <div class="col-sm-4">
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
<!---Container Fluid-->
