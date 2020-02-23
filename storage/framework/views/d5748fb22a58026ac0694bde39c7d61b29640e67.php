<?php $__env->startSection('main'); ?>

<!-- Page Header -->
  <header class="masthead" style="background-image: url(<?php echo e(asset('img/home.png')); ?>); background-size: fill;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Kultum Santri</h1>
            <span class="subheading">Web yang berisi kumpulan kultum santri</span>
          </div>
        </div>
      </div>
    </div>
  </header>


  <!-- Main Content -->

  <section class="page-section mb-0" id="about">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase">Kultum Terbaru</h2>

      <!-- About Section Content -->
      <div class="row grid-divider">
        <?php $__currentLoopData = $ar_kultum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kultum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-6 ml-auto text-justify post-preview">
          <a href="<?php echo e(route('kultum.show', $kultum->judul)); ?>">
            <h5 class="post-title">
              <?php echo e($kultum->judul); ?>

            </h5>
            <h6 class="post-subtitle">
              <?php echo e(substr($kultum->isi, 0, 100)); ?>...
              <small>Selengkapnya</small>
            </h6>
          </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </section>

  <hr>

<?php $__env->stopSection(); ?>

  
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lavkultum\resources\views/layouts/home.blade.php ENDPATH**/ ?>