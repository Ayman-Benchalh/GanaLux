<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Admin Dashboard'); ?></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <!-- FontAwesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>
    <div class="min-h-screen flex flex-col md:flex-row">
        <!-- Sidebar -->
        <div class="w-full md:w-64 bg-blue-900 text-white p-5 space-y-6 transition-transform duration-300">
            <h1 class="text-2xl font-bold flex items-center gap-2">
                <i class="ph ph-storefront"></i> GanaLux
            </h1>
            <nav>
                <a href="<?php echo e(route('dashboard')); ?>" class="block py-2.5 px-4 rounded hover:bg-blue-700 flex items-center gap-2">
                    <i class="ph ph-gauge"></i> Dashboard
                </a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-700 flex items-center gap-2">
                    <i class="ph ph-shopping-cart"></i> Orders
                </a>
                <a href="<?php echo e(route('admin.products')); ?>" class="block py-2.5 px-4 rounded hover:bg-blue-700 flex items-center gap-2">
                    <i class="ph ph-package"></i> Products
                </a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-700 flex items-center gap-2">
                    <i class="ph ph-users-three"></i> Customers
                </a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-700 flex items-center gap-2">
                    <i class="ph ph-chart-bar"></i> Reports
                </a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-700 flex items-center gap-2">
                    <i class="ph ph-gear"></i> Settings
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Top Header -->
            <header class="bg-white shadow p-4 flex justify-between items-center">
                <!-- Search Bar -->
                <div class="flex items-center space-x-4">
                    <input type="text" placeholder="Search..." class="border rounded-lg px-4 py-2 w-72 focus:outline-none focus:ring focus:ring-blue-300">
                </div>

                <!-- Admin Profile -->
                
                <div class="flex items-center space-x-4">
                    <span class="text-gray-700 font-bold pl-2">Mr. <?php echo e(Auth::user()->name); ?></span>
                   <a href="/"><img src="<?php echo e(asset('assets/images/avatares/man.png')); ?>" alt="Admin Avatar" class="w-10 h-10 rounded-full"></a>
                </div>

            </header>

            <!-- Page Content -->
            <main class="p-6">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </div>


    <script>
        const ctx = document.getElementById('salesChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Sales',
                    data: [12000, 15000, 17000, 14000, 19000, 22000],
                    borderColor: 'rgb(59, 130, 246)',
                    borderWidth: 2,
                    fill: false
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false }
                }
            }
        });
    </script>
<?php echo $__env->yieldContent('scriptJS'); ?>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH D:\Ayman code\All code\laravel-php\Ganalux\resources\views/layouts/themeDsh.blade.php ENDPATH**/ ?>