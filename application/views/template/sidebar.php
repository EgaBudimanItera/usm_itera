<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url()?>">
    <div class="sidebar-brand-icon">
      <!-- <img src="<?=base_url()?>assets/img/logo/logo2.png"> -->
    </div>
    <div class="sidebar-brand-text mx-3">DIM ADMIN</div>
  </a>
  <hr class="sidebar-divider my-0">
  <li class="nav-item <?=empty($link) || $link=='dashboard'?'active':''?>">
    <a class="nav-link " href="<?=base_url()?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  <hr class="sidebar-divider">
  <li class="nav-item <?=$link=='login'?'active':''?>">
    <a class="nav-link " href="<?=base_url()?>login">
      <i class="fas fa-user"></i>
      <span>Login</span></a>
  </li>
  
  
  
</ul>
<!-- Sidebar -->