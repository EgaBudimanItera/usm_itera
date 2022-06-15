<div id="content-wrapper" class="d-flex flex-column">
  <div id="content">
    <!-- TopBar -->
    <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
      <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
        <i class="fa fa-bars"></i>

      </button>
      <b style="color: #ffffff">Institut Teknologi Sumatera</b>
      <ul class="navbar-nav ml-auto">

        <?php if($this->session->userdata('level') != 'peserta' && $this->session->userdata('level') != 'admin' ) {?>
          <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="<?php echo base_url('login')?>" >
              Login
            </a>
          </li>

          <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="<?php echo base_url('register')?>" >
              Register
            </a>
          </li>

        <?php } else {?>

          <?php if($this->session->userdata('level') == 'peserta') { ?>
            <li>
              <a href="" target="_blank">
                <span class="glyphicon glyphicon-user"></span>
                <?php echo $this->session->userdata('nama_lengkap')?>
              </a>
            </li>
          <?php }else if($this->session->userdata('level') == 'admin'){ ?>
            <li>
              <a href="" target="_blank">
                <span class="glyphicon glyphicon-user"></span>
                  <?php echo $this->session->userdata('level')?>
              </a>
            </li>
          <?php } ?>

          <?php if($this->session->userdata('is_login')){ ?>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="<?=base_url()?>assets/img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small"><?=$this->session->userdata('nama_lengkap')?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?=base_url()?>login/logout">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          <?php } ?>
        <?php } ?>

        </li>

      </ul>
    </nav>
    <!-- Topbar -->
