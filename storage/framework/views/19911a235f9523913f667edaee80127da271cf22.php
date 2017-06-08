<?php $__env->startSection('content'); ?>

<script src="jquery.js"></script>
<script src="bootstrap3-typeahead.min.js"></script>

<div class="container">

    <input class="typeahead form-control" style="width:300px; " type="text">

</div>

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