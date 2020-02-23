  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Kultum Santri</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/kultum')); ?>"><i class="fas fa-home"></i>&nbsp;Kultum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/about')); ?>"><i class="fas fa-users"></i>&nbsp;Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/contact')); ?>"><i class="fas fa-address-book"></i>&nbsp;Kontak</a>
          </li>
          <div class="topbar-divider d-none d-sm-block"></div>
          <?php if(Auth::check()): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;
              <?php echo e(Auth::user()->name); ?>

              <img class="img-profile rounded-circle" src="<?php echo e(asset('img/avatar/'.Auth::user()->avatar)); ?>"> 
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="<?php echo e(route('kultum.create')); ?>"><i class="fas fa-plus-circle"></i>&nbsp;Buat Kultum</a>
              <a class="dropdown-item" href="#"><i class="fas fa-user-circle"></i>&nbsp;Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt"></i>&nbsp;<?php echo e(__('Logout')); ?>

            </a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
              <?php echo csrf_field(); ?>
            </form>
          </div>
        </li>
        <?php else: ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-users"></i>&nbsp;Account 
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="<?php echo e(route('login')); ?>"><i class="fas fa-sign-in-alt"></i>&nbsp;<?php echo e(__('Login')); ?></a>
            <a class="dropdown-item" href="<?php echo e(route('register')); ?>"><i class="fas fa-edit fa-regular"></i>&nbsp;<?php echo e(__('Register')); ?></a>
          </div>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </div>
</nav><?php /**PATH C:\xampp\htdocs\lavkultum\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>