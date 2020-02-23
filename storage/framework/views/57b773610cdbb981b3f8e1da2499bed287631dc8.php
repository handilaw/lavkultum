<?php $__env->startSection('main'); ?>
<!-- Page Header -->
<?php $__currentLoopData = $ar_kultum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kultum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<header class="masthead" style="background-image: url(<?php echo e(asset('img/kultum.jpg')); ?>)">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1><?php echo e($kultum->judul); ?></h1>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Post Content -->
<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p class="text-justify text-big"><?php echo nl2br(e($kultum->isi)); ?><p>
        </div>
      </div>
    </div>
  </article>
  <center>
    <?php if(Auth::check()): ?>
      <form action="<?php echo e(Auth::route('kultum.destroy', $kultum->id)); ?>" method="POST">
      <a href="<?php echo e(Auth::route('kultum.edit', $kultum->id)); ?>" class="btn btn-warning"><i class='fas fa-pen' ></i> Edit</a>&nbsp;
      <?php echo csrf_field(); ?>
      <?php echo method_field('DELETE'); ?>
      <button type="submit" class="btn btn-danger" onclick="return confirm('Apa anda yakin ingin menghapus data?')"><i class="fas fa-eraser"></i> Hapus</button>
    </form>
    <?php endif; ?>
    <span class="meta">Dibuat oleh
    <a href="#"><?php echo e($kultum->santri); ?></a>
  pada <?php echo e($kultum->tanggal); ?></span></center>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lavkultum\resources\views/kultum/show.blade.php ENDPATH**/ ?>