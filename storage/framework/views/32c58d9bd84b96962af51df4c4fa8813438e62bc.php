<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo e(trans('home.dashboard')); ?></div>

                <?php echo e($errors->create); ?>


                <div class="panel-body">
                  <br>AÑADIR PRODUCTO</br>
                  <?php echo e(Form::open(array('url' => 'add', 'method' => 'post'))); ?>

                  <?php echo e(Form::text('name')); ?>

                  <?php echo e(Form::text('price')); ?>

                  <?php echo e(Form::submit('Añadir')); ?>

                  <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>