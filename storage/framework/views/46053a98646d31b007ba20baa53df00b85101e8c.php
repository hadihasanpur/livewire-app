<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginal5258a486f85fc89b3c8883dc718f8e6786ddb565 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PostList::class, []); ?>
<?php $component->withName('post-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5258a486f85fc89b3c8883dc718f8e6786ddb565)): ?>
<?php $component = $__componentOriginal5258a486f85fc89b3c8883dc718f8e6786ddb565; ?>
<?php unset($__componentOriginal5258a486f85fc89b3c8883dc718f8e6786ddb565); ?>
<?php endif; ?>    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?><?php /**PATH /var/www/livewire-app/resources/views/welcome.blade.php ENDPATH**/ ?>