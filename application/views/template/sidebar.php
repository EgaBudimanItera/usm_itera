<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url()?>">
    <div class="sidebar-brand-icon">
      <!-- <img src="<?=base_url()?>assets/img/logo/logo2.png"> -->
    </div>
    <div class="sidebar-brand-text mx-3">USM Itera</div>
  </a>

<?php if ($this->session->userdata('level') != 'peserta' && $this->session->userdata('level') != 'admin'){?>
  <hr class="sidebar-divider my-0">
  <li class="nav-item <?=empty($link) || $link=='dashboard'?'active':''?>">
    <a class="nav-link " href="<?=base_url()?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <li class="nav-item <?=empty($link) || $link=='dashboard'?'active':''?>">
    <a class="nav-link " href="<?=base_url()?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Informasi Penting</span></a>
  </li>

  <li class="nav-item <?=empty($link) || $link=='dashboard'?'active':''?>">
    <a class="nav-link " href="<?=base_url()?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Pengumuman</span></a>
  </li>

  <li class="nav-item <?=empty($link) || $link=='dashboard'?'active':''?>">
    <a class="nav-link " href="<?=base_url()?>">
      <i class="fas fa-money-check"></i>
      <span>Tata Cara Pembayaran</span></a>
  </li>

  <li class="nav-item <?=empty($link) || $link=='dashboard'?'active':''?>">
    <a class="nav-link " href="<?=base_url()?>">
      <i class="fad fa-money-bill-wave-alt"></i>
      <span>Biaya Seleksi</span></a>
  </li>

  <li class="nav-item <?=empty($link) || $link=='dashboard'?'active':''?>">
    <a class="nav-link " href="<?=base_url()?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Panduan Penggunaan</span></a>
  </li>

  <li class="nav-item <?=empty($link) || $link=='dashboard'?'active':''?>">
    <a class="nav-link " href="<?=base_url()?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Daftar Prodi</span></a>
  </li>

  <li class="nav-item <?=empty($link) || $link=='dashboard'?'active':''?>">
    <a class="nav-link " href="<?=base_url()?>">
      <i class="fas fa-calendar-alt"></i>
      <span>Jadwal Penting</span></a>
  </li>

  <li class="nav-item <?=empty($link) || $link=='dashboard'?'active':''?>">
    <a class="nav-link " href="<?=base_url()?>">
      <i class="fad fa-money-bill-wave-alt"></i>
      <span>Biaya Kuliah</span></a>
  </li>

  <li class="nav-item <?=empty($link) || $link=='dashboard'?'active':''?>">
    <a class="nav-link " href="<?=base_url()?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>FAQ</span></a>
  </li>

  <li class="nav-item <?=empty($link) || $link=='dashboard'?'active':''?>">
    <a class="nav-link " href="<?=base_url()?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Bantuan</span></a>
  </li>

<?php } ?>

  <!-- <hr class="sidebar-divider">
  <li class="nav-item <?=$link=='login'?'active':''?>">
    <a class="nav-link " href="<?=base_url()?>login">
      <i class="fas fa-user"></i>
      <span>Login</span></a>
  </li> -->


  <!-- <hr class="sidebar-divider">
  <li class="nav-item <?=$link=='login'?'active':''?>">
    <a class="nav-link " href="<?=base_url()?>admin">
      <i class="fas fa-user"></i>
      <span>Data Peserta 2022</span></a>
  </li> -->

<?php if ($this->session->userdata('level') == 'peserta'){?>

<!-- <?php echo '<pre>'; print_r($this->session->userdata());?> -->
<hr class="sidebar-divider my-0">
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url('pilih_usm')?>">
    <i class="fas fa-file"></i>
      <span>Pilih USM</span></a>
</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
      aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-user"></i>
          <span>Profil</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Sub Menu Profil:</h6>
          <a class="collapse-item" href="<?php echo base_url('profil')?>">Data Diri</a>
          <a class="collapse-item" href="<?php echo base_url('keluarga')?>">Data Keluarga</a>
          <a class="collapse-item" href="<?php echo base_url('sekolah')?>">Data Sekolah</a>
          <a class="collapse-item" href="<?php echo base_url('pilih_prodi')?>">Pilih Prodi</a>
          <a class="collapse-item" href="<?php echo base_url('berkas')?>">Upload Berkas</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('bukti_bayar')?>">
        <i class="fas fa-file"></i>
          <span>Upload Bukti Pembayaran</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="fas fa-file-alt"></i>
          <span>Cetak Kartu</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="fas fa-comment-dollar"></i>
          <span>Pembayaran</span></a>
    </li>

<?php }?>

<?php if ($this->session->userdata('level') == 'admin'){?>
<hr class="sidebar-divider">
  <li class="nav-item">
    <a class="nav-link" href="<?=base_url('admin')?>">
      <i class="fas fa-user"></i>
        <span>Data Peserta</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?=base_url('user')?>">
      <i class="fas fa-user-friends"></i>
        <span>Tambah Admin</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?=base_url('admin/download')?>">
      <i class="fas fa-user-alt"></i>
        <span>Peserta USM-PK</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?=base_url('jadwal_penting')?>">
      <i class="fas fa-calendar-alt"></i>
        <span>Ubah Jadwal Penting</span></a>
  </li>

<?php }?>

</ul>
<!-- Sidebar -->
