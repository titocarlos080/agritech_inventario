

<?php $__env->startSection('title', 'agritech'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>ESTADISTICAS</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split("estadisticas.index");

$__html = app('livewire')->mount($__name, $__params, 'lw-1769299810-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTRE_1_2024\TALLER_DE_GRADO_1\taller_grado\resources\views/admin/estadisticas.blade.php ENDPATH**/ ?>