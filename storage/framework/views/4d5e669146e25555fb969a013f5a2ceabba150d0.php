<?php $__env->startSection('content'); ?>


<div class="container">

    <input class="typeahead form-control" style="width:300px; " type="text">

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<script type="text/javascript">

    var path = "<?php echo e(route('autocomplete')); ?>";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>