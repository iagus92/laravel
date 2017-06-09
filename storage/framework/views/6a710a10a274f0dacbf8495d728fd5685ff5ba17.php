<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo e(trans('home.dashboard')); ?></div>

                <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success">
                        <p><?php echo e($message); ?></p>
                    </div>
                <?php endif; ?>

                <div class="panel-body">
                  <a href='<?php echo e(url('add')); ?>'>
                    <button class="btn btn-success">
                      <i class="fa fa-trash"></i> Añadir
                    </button>
                  </a>
                  <a href='<?php echo e(url('search')); ?>'>
                    <button class="btn btn-success">
                      <i class="fa fa-trash"></i> Buscar
                    </button>
                  </a>
                  <a href='<?php echo e(url('price')); ?>'>
                    <button class="btn btn-success">
                      <i class="fa fa-trash"></i> Ordenar por precio
                    </button>
                  </a>

                  <br>LISTA PRODUCTOS</br>
                  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href='<?php echo e(url('show',$product->id)); ?>'><?php echo e($product->name); ?></a> - <?php echo e($product->price); ?>€</li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php echo e($products->links()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>