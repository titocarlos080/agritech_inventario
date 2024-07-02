<li class="nav-item">
    <a class="nav-link" href="#" data-widget="control-sidebar"
        <?php if(!config('adminlte.right_sidebar_slide')): ?>
            data-controlsidebar-slide="false"
        <?php endif; ?>
        <?php if(config('adminlte.right_sidebar_scrollbar_theme', 'os-theme-light') != 'os-theme-light'): ?>
            data-scrollbar-theme="<?php echo e(config('adminlte.right_sidebar_scrollbar_theme')); ?>"
        <?php endif; ?>
        <?php if(config('adminlte.right_sidebar_scrollbar_auto_hide', 'l') != 'l'): ?>
            data-scrollbar-auto-hide="<?php echo e(config('adminlte.right_sidebar_scrollbar_auto_hide')); ?>"
        <?php endif; ?>>
        <i class="<?php echo e(config('adminlte.right_sidebar_icon')); ?>"></i>
    </a>
</li><?php /**PATH D:\SEMESTRE_1_2024\TALLER_DE_GRADO_1\taller_grado\vendor\jeroennoten\laravel-adminlte\src/../resources/views/partials/navbar/menu-item-right-sidebar-toggler.blade.php ENDPATH**/ ?>