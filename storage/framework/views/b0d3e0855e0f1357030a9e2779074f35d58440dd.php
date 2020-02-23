<?php $__env->startSection('main'); ?>
<?php
$ar_kategori = App\Kategori::all();
$ar_santri = App\Santri::all();
?>
<header class="masthead" style="background-image: url(<?php echo e(asset('img/kultum.jpg')); ?>)">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Buat Kultum Baru</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

<!-- Post Content -->
<center>
  <article>
    <div class="container">
      <!-- Page Header -->
      <form method="POST" action="<?php echo e(route('kultum.store')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <fieldset>

          <!-- Form Name -->
          <legend>Form Kultum</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-8 control-label" for="judul">Judul</label>  
            <div class="col-md-8">
              <input id="judul" name="judul" type="text" placeholder="Judul Kultum" class="form-control input-md">
            </div>
          </div>

          <!-- Textarea -->
          <div class="form-group">
            <label class="col-md-8 control-label" for="isi">Isi</label>  
            <div class="col-md-8">
              <textarea id="isi" name="isi" cols="40" rows="10" class="form-control <?php $__errorArgs = ['isi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('isi')); ?></textarea>
            </div>
          </div>

          <!-- Button Drop Down -->
          <div class="form-group">
            <label class="col-md-8 control-label" for="kategori">Kategori Kultum</label>
            <div class="col-md-8">
              <select name="kategori" class="custom-select <?php $__errorArgs = ['kategori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <option value="">-- Pilih Kategori Kultum --</option>
                <?php $__currentLoopData = $ar_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($kat['id']); ?>" <?php if(old('kategori') == $kat['id']): ?> selected <?php endif; ?>> <?php echo e($kat['nama']); ?> </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-8 control-label" for="santri">Nama Santri</label>
            <div class="col-md-8">
              <select name="santri" class="custom-select <?php $__errorArgs = ['kategori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <?php $__currentLoopData = $ar_santri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $san): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($san['id']); ?>" <?php if(old('kategori') == $san['id']): ?> selected <?php endif; ?>> <?php echo e($san['nama']); ?> </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <button name="proses" type="submit" class="btn btn-primary" 
              value="simpan">Simpan</button>
            </div>
          </div>
        </fieldset>
      </form> 
    </div>
  </article>
</center>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lavkultum\resources\views/kultum/form.blade.php ENDPATH**/ ?>