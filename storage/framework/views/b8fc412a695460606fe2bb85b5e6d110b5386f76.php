<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
  <div class="col-md-12 mb-lg-0 mb-4">
    <div class="card mt-4">
      <div class="card-header pb-0 p-3">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <h6 class="mb-0">Profil Pengguna</h6>
          </div>
          <div class="col-6 text-end">
            <a class="btn bg-gradient-dark mb-0" href="<?php echo e(route('profil.create')); ?>"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Data</a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor Hp</th>
                <th class="text-end text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $profil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <p class="text-xs font-weight-bold mb-0"><?php echo e($loop->iteration); ?></p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0"><?php echo e($item->nama); ?></p>
                </td>
                <td class="align-middle text-center text-sm">
                  <img src="../assets/foto/profil/<?php echo e($item->gambar); ?>" class="avatar avatar-sm me-3">
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold"><?php echo e($item->no_hp); ?></span>
                </td>
                <td>
                  <div class="ms-auto text-end">
                    <form action="<?php echo e(route('profil.destroy', $item->id)); ?>" method="POST" style="display: inline">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field("DELETE"); ?>
                      <button type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0"><i class="far fa-trash-alt me-2">Delete</i></button>
                    </form>
                    <a class="btn btn-link text-dark px-3 mb-0" href="<?php echo e(route('profil.edit', $item->id)); ?>"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                  </div>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\Web-Admin\resources\views/admin/profil/index.blade.php ENDPATH**/ ?>