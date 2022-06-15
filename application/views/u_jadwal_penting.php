<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ubah Jadwal Penting</h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="<?=base_url()?>">Home</a></li>
        <li class="breadcrumb-item "><a href="<?=base_url('jadwal_penting')?>">Jadwal Penting</a></li>
        <li class="breadcrumb-item "><a href="#">Ubah</a></li>

    </ol>
    </div>

    <div class="row mb-3">
         <div class="col-xl-12 col-md-6 mb-4">
            <div class="card h-100">
                <br>
                <form class="form-horizontal" action="<?=base_url()?>jadwal_penting/proses_edit" method="POST" role="form">

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Keterangan : </label>
                    <div class="col-sm-4">
                      <textarea class="form-control" name="keterangan" rows="3" placeholder="tulis keterangan"><?php echo $data->keterangan?></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Jadwal :</label>
                      <div class="col-sm-4">
                         <input type="text" class="form-control" name="tgl_jadwal" placeholder="tulis jadwal penting" value="<?php echo $data->tgl_jadwal?>" require>
                         <input type="hidden" class="form-control" name="id_jadwal_penting" value="<?php echo $data->id_jadwal_penting?>">
                      </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Urutan :</label>
                      <div class="col-sm-4">
                         <input type="text" class="form-control" name="urutan" placeholder="ex : 1 " value="<?php echo $data->urutan?>" require>
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
