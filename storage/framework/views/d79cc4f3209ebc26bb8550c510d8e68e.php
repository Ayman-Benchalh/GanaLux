<?php $__env->startSection('title', 'Admin Dashboard'); ?>

<?php $__env->startSection('page-title', 'Welcome to the Dashboard'); ?>
<?php $__env->startSection('dataUser'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<div class="flex-1 p-5 md:p-10">
    <header class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-semibold text-gray-800">Dashboard</h2>
        
    </header>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <h3 class="text-lg font-semibold text-gray-700 flex items-center gap-2"><i class="ph ph-list-dashes"></i> Total Orders</h3>
            <p class="text-2xl font-bold text-blue-600">1,250</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <h3 class="text-lg font-semibold text-gray-700 flex items-center gap-2"><i class="ph ph-currency-circle-dollar"></i> Total Sales</h3>
            <p class="text-2xl font-bold text-green-600">$25,000</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <h3 class="text-lg font-semibold text-gray-700 flex items-center gap-2"><i class="ph ph-clock-counter-clockwise"></i> Pending Orders</h3>
            <p class="text-2xl font-bold text-yellow-600">320</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <h3 class="text-lg font-semibold text-gray-700 flex items-center gap-2"><i class="ph ph-currency-dollar"></i> Cash on Delivery</h3>
            <p class="text-2xl font-bold text-red-600">$10,000</p>
        </div>
    </div>

    <div class="mt-10 bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-lg font-semibold text-gray-700">Sales Overview</h3>
        <canvas id="salesChart"></canvas>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.themeDsh', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Ayman code\All code\laravel-php\Ganalux\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>