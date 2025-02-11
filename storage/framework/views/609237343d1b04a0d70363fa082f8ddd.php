<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <title>GanaLux | Login</title>

    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
  </head>
  <body class="bg-[#3b2f2f] font-roboto">

    <div class="flex w-screen h-screen">
      <!-- Login Form -->
      <div class="flex justify-center items-center w-full md:w-1/2 bg-[#4a3939]">
        <div class="max-w-md w-full px-4 py-12">
          <h3 class="text-3xl font-semibold text-left mb-4 text-[#f5e6ca]">Login to <strong>GanaLux</strong></h3>
          <p class="text-left text-[#f5e6ca] mb-6">Authentication to Management Store</p>

          <form action="<?php echo e(route('admin.login.submit')); ?>" method="post">
            <?php echo csrf_field(); ?>

            <!-- Email -->
            <div class="mb-4">
              <label for="email" class="block text-[#d6c2aa] mb-2 font-medium">Email</label>
              <input
                type="email"
                id="email"
                name="email"
                value="<?php echo e(old('email')); ?>"
                placeholder="example@gmail.com"
                class="w-full px-3 py-3 bg-[#5a4747] border-[#b2978b] text-[#f5e6ca] placeholder-[#e1d2b3] rounded-md shadow-sm focus:ring-[#b85c38] focus:border-[#b85c38] <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                required
              >
              <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Password -->
            <div class="mb-4">
              <label for="password" class="block text-[#d6c2aa] mb-2 font-medium">Password</label>
              <input
                type="password"
                id="password"
                name="password"
                placeholder="Your Password"
                class="w-full px-3 py-3 bg-[#5a4747] border-[#b2978b] text-[#f5e6ca] placeholder-[#e1d2b3] rounded-md shadow-sm focus:ring-[#b85c38] focus:border-[#b85c38] <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                required
              >
              <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Remember me -->
            <div class="flex items-center mb-6">
              <label class="flex items-center text-[#d6c2aa]">
                <input
                  type="checkbox"
                  name="remember"
                  <?php echo e(old('remember') ? 'checked' : ''); ?>

                  class="form-checkbox h-4 w-4 text-[#b85c38]"
                >
                <span class="ml-2 text-sm">Remember me</span>
              </label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full py-3 bg-[#b85c38] text-[#f5e6ca] rounded-md hover:bg-[#8c4028] transition duration-200">
              Log In
            </button>
          </form>
        </div>
      </div>

      <!-- Background Image -->
      <div class="w-1/2 h-full bg-cover bg-center hidden md:block relative">
        <!-- Overlay -->
        <div class="w-full h-full bg-[#3b2f2f]/60 absolute top-0 left-0 z-10"></div>
        <!-- Background image -->
        <div class="w-full h-full absolute top-0 left-0" style="background-image: url('<?php echo e(asset('assets/images/login/ganalux.png')); ?>'); background-size: cover; background-position: center;"></div>
      </div>
    </div>

  </body>
</html>
<?php /**PATH D:\Ayman code\All code\laravel-php\Ganalux\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>