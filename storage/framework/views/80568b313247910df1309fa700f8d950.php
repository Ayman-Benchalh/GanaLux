<?php $__env->startSection('title', 'Add Product'); ?>
<?php $__env->startSection('page-title', 'Add New Product'); ?>

<?php $__env->startSection('content'); ?>
<div class="p-8 bg-white rounded-lg shadow-md mx-auto">
    <!-- Success Message -->
    <?php if(session('success')): ?>
        <div class="mb-6 flex items-center p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg" role="alert">
            <span class="material-icons mr-2">check_circle</span>
            <p class="text-sm"><?php echo e(session('success')); ?></p>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('admin.products.store')); ?>" method="POST" enctype="multipart/form-data" onsubmit="return validateImages()">
        <?php echo csrf_field(); ?>

        <!-- Nom du produit -->
        <div class="mb-6 relative">
            <label for="name" class="block text-sm font-medium text-gray-700">Nom du Produit</label>
            <div class="relative mt-1">
                <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" placeholder="Saisissez le nom du produit"
                       class="w-full pl-10 px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <span class="absolute left-3 top-3 text-gray-400">📝</span>
            </div>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-red-500 text-sm"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Description -->
        <div class="mb-6 relative">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea id="description" name="description" rows="4" placeholder="Entrez une description du produit"
                      class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring focus:ring-blue-300 <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('description')); ?></textarea>
            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-red-500 text-sm"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Prix -->
        <div class="mb-6 relative">
            <label for="price" class="block text-sm font-medium text-gray-700">Prix</label>
            <div class="relative mt-1">
                <input type="number" id="price" name="price" step="0.01" value="<?php echo e(old('price')); ?>" placeholder="0.00"
                       class="w-full pl-10 px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300 <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <span class="absolute left-3 top-3 text-gray-400">💰</span>
            </div>
            <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-red-500 text-sm"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Quantité -->
        <div class="mb-6 relative">
            <label for="quantity" class="block text-sm font-medium text-gray-700">Quantité</label>
            <div class="relative mt-1">
                <input type="number" id="quantity" min="0" max="500" name="quantity" value="<?php echo e(old('quantity')); ?>" placeholder="0"
                       class="w-full pl-10 px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300 <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <span class="absolute left-3 top-3 text-gray-400">📦</span>
            </div>
            <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-red-500 text-sm"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Upload Images -->
        <div class="mb-6 flex flex-col gap-2">
            <h2 class="block text-sm font-medium text-gray-700">Télécharger les Images</h2>
            <label for="images" class="flex justify-center items-center h-32 bg-blue-100 border-dashed border-2 border-blue-600 rounded-lg cursor-pointer">
                <span class="text-blue-600 font-medium">Choisir des images (max: 7)</span>
            </label>
            <input type="file" id="images" name="images[]" class="hidden" accept="image/*" multiple onchange="previewImages(event)">
            <small class="text-gray-500">Sélectionnez entre 1 et 7 images.</small>
            <?php $__errorArgs = ['images'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-red-500 text-sm"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <?php $__errorArgs = ['images.*'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-red-500 text-sm"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Image Preview Section -->
        <div id="image-preview" class="grid grid-cols-4 gap-4 mt-4 text-white"></div>

        <!-- Submit Button -->
        <button type="submit" class="w-full px-4 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring focus:ring-blue-300">
            Enregistrer le Produit
        </button>
    </form>
</div>

<script>
    function previewImages(event) {
        const previewContainer = document.getElementById('image-preview');
        previewContainer.innerHTML = ''; // Clear previous previews

        const files = event.target.files;

        if (files.length > 7) {
            alert('Vous pouvez sélectionner un maximum de 7 images.');
            return;
        }

        Array.from(files).forEach((file, index) => {
            const reader = new FileReader();

            reader.onload = function (e) {
                const imageWrapper = document.createElement('div');
                imageWrapper.classList.add('relative', 'border', 'p-2', 'rounded-lg', 'shadow-md');

                // Image
                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('w-full', 'h-48', 'object-contain', 'border-blue-400', 'rounded-md');

                // Delete Button
                const deleteButton = document.createElement('button');
                deleteButton.classList.add('absolute', 'top-1', 'right-1', 'border-red-500', 'text-white', 'text-xs', 'p-1', 'rounded-full', 'hover:bg-red-600');
                deleteButton.innerText = '✖';
                deleteButton.onclick = function () {
                    previewContainer.removeChild(imageWrapper);
                };

                imageWrapper.appendChild(img);
                imageWrapper.appendChild(deleteButton);
                previewContainer.appendChild(imageWrapper);
            };

            reader.readAsDataURL(file);
        });
    }

    function validateImages() {
        const imagesInput = document.getElementById('images');
        const files = imagesInput.files;

        if (files.length > 7) {
            alert('Vous devez sélectionner un maximum de 7 images.');
            return false;
        }

        if (files.length === 0) {
            alert('Veuillez sélectionner au moins une image.');
            return false;
        }

        return true;
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.themeDsh', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Ayman code\All code\laravel-php\Ganalux\resources\views/admin/product/addProduct.blade.php ENDPATH**/ ?>