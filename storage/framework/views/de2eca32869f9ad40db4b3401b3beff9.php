<?php $__env->startSection('title', 'Admin Dashboard'); ?>

<?php $__env->startSection('page-title', 'Welcome to the Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mx-auto mt-10">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-700 mb-6">Product List</h2>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-3 px-6 text-left text-sm font-medium text-gray-600 border-b">ID</th>
                    <th class="py-3 px-6 text-left text-sm font-medium text-gray-600 border-b">Name</th>
                    <th class="py-3 px-6 text-left text-sm font-medium text-gray-600 border-b">Description</th>
                    <th class="py-3 px-6 text-left text-sm font-medium text-gray-600 border-b">Price</th>
                    <th class="py-3 px-6 text-left text-sm font-medium text-gray-600 border-b">Quantity</th>
                    <th class="py-3 px-6 text-left text-sm font-medium text-gray-600 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="hover:bg-gray-50">
                        <td class="py-4 px-6 border-b"><?php echo e($product->id); ?></td>
                        <td class="py-4 px-6 border-b"><?php echo e($product->name); ?></td>
                        <td class="py-4 px-6 border-b"><?php echo e($product->description); ?></td>
                        <td class="py-4 px-6 border-b">$<?php echo e(number_format($product->price, 2)); ?></td>
                        <td class="py-4 px-6 border-b"><?php echo e($product->quantity); ?></td>
                        <td class="py-4 px-6 border-b">
                            <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="text-blue-500 hover:underline">Edit</a> |
                            <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST" class="inline-block">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.themeDsh', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Ayman code\All code\laravel-php\Ganalux\resources\views/admin/products.blade.php ENDPATH**/ ?>