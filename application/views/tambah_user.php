<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah User</h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="<?=base_url()?>">Home</a></li>
        <li class="breadcrumb-item "><a href="<?=base_url('user')?>">User</a></li>
        <li class="breadcrumb-item "><a href="#">Tambah User</a></li>

    </ol>
    </div>

    <div class="row mb-3">
         <div class="col-xl-12 col-md-6 mb-4">
            <div class="card h-100">
                <br>
                <form class="form-horizontal" action="<?=base_url()?>user/proses_add" method="POST" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Username :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="nik" placeholder="masukkan username" require>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Password :</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" name="password" placeholder="masukkan password" require>
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
