<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo e(trans('home.dashboard')); ?></div>

                <div class="panel-body">
                  <br>PRODUCTO</br>
                    <div><?php echo e($product->name); ?> - <?php echo e($product->price); ?>€</div>
                    
                    <a href='<?php echo e(url('edit',$product->id)); ?>'>
                      <button class="btn btn-success">
                        <i class="fa fa-trash"></i> Editar
                      </button>
                    </a>

                    <form action="<?php echo e(url('delete/'.$product->id)); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('DELETE')); ?>


                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i> Eliminar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>