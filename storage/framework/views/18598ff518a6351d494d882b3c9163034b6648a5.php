<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
    <?php echo \Livewire\Livewire::styles(); ?>

    <!-- Scripts -->
    <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
    <h1 class="text-center text-white bg-gray-900">       Focus on work </h1>
</head>
<body class="font-sans antialiased">
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.banner','data' => []]); ?>
<?php $component->withName('jet-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-700">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navigation-menu')->html();
} elseif ($_instance->childHasBeenRendered('v88Kbty')) {
    $componentId = $_instance->getRenderedChildComponentId('v88Kbty');
    $componentTag = $_instance->getRenderedChildComponentTagName('v88Kbty');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('v88Kbty');
} else {
    $response = \Livewire\Livewire::mount('navigation-menu');
    $html = $response->html();
    $_instance->logRenderedChild('v88Kbty', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <!-- Page Heading -->
        <?php if(isset($header)): ?>
        <header class="bg-white shadow">
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <?php echo e($header); ?>

            </div>
        </header>
        <?php endif; ?>
        <?php if(session()->has('success')): ?>
        <div class="fixed px-4 py-2 text-sm text-white bg-blue-500 rounded-xl bottom-3 right-3">
            <p><?php echo e(session('success')); ?></p>
        </div>
        <?php endif; ?>
        <!-- Page Content -->
        <main>
            <?php echo e($slot); ?>

        </main>
    </div>
    <?php echo $__env->yieldPushContent('modals'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html><?php /**PATH /var/www/livewire-app/resources/views/layouts/app.blade.php ENDPATH**/ ?>