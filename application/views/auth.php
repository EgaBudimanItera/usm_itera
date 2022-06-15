
<!doctype html>
<html lang="en">
  <head>
  	<title>USM Itera</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="<?=base_url()?>assets/itera.png" rel="icon">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?=base_url()?>asset/css/style.css">

	</head>
	<body>
	<section class="ftco-section">

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="login-wrap p-4 p-md-5">
              <?php echo $this->session->flashdata('pesan')?>
			      	<div class="d-flex">
			      		<div class="w-100">
                  <img src="<?=base_url()?>asset/images/Logo_ITERA.png" height="40px" weight="40px">
			      			<h3 class="mb-4">Login Peserta</h3>
			      		</div>
			      	</div>

							<form action="<?php echo base_url('login/cek_login') ?>" method="POST" >
			      		<div class="form-group mt-3">
			      			<input type="text" name="nik" class="form-control" required>
			      			<label class="form-control-placeholder" name="nik">NIK</label>
			      		</div>

		            <div class="form-group">
		              <input id="password" type="password" name="password" class="form-control" required>
		              <label class="form-control-placeholder" name="password">Password</label>
		              <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>

		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
		            </div>

		          </form>
		          <p class="text-center">belum memiliki akun ? <a data-toggle="tab" href="#signup">Register</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?=base_url()?>asset/js/jquery.min.js"></script>
  <script src="<?=base_url()?>asset/js/popper.js"></script>
  <script src="<?=base_url()?>asset/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>asset/js/main.js"></script>

	</body>
</html>
