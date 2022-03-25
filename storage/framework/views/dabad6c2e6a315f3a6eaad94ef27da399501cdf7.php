<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginal70a6ffa79f8a7635975c0a8851a7fc1cc93b1401 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AuctionList::class, []); ?>
<?php $component->withName('auction-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal70a6ffa79f8a7635975c0a8851a7fc1cc93b1401)): ?>
<?php $component = $__componentOriginal70a6ffa79f8a7635975c0a8851a7fc1cc93b1401; ?>
<?php unset($__componentOriginal70a6ffa79f8a7635975c0a8851a7fc1cc93b1401); ?>
<?php endif; ?>    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?><?php /**PATH /var/www/livewire-app/resources/views/auction.blade.php ENDPATH**/ ?>