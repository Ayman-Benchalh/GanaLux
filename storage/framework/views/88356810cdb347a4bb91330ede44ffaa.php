<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page non trouvée | Ganalux</title>

    <!-- Chart.js (Facultatif, si vous l'utilisez) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>

    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

    <!-- JS de l'application (si un script supplémentaire est nécessaire) -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
</head>
<body class="bg-white text-black font-sans">
    <div class="flex items-center justify-center h-screen bg-white px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <div class="flex justify-center mb-4">
                <!-- Icône Ganalux avec taille définie -->
                <phosphor-icon name="x-circle" size="72" color="black"></phosphor-icon>
            </div>
            <h1 class="text-6xl font-bold text-black mb-4">404</h1>
            <p class="text-xl text-gray-700 mb-4">Oups ! La page que vous recherchez n'existe pas sur <strong>Ganalux</strong>.</p>
            <p class="text-lg text-gray-500 mb-8">Elle a peut-être été supprimée, son nom a été modifié ou elle est temporairement indisponible.</p>
            <a href="/" class="inline-block bg-black text-white px-6 py-2 rounded-md text-lg font-medium hover:bg-gray-800 transition duration-300">
                Retour à l'accueil
            </a>
        </div>
    </div>
</body>
</html>
<?php /**PATH D:\Ayman code\All code\laravel-php\Ganalux\resources\views/errors/404.blade.php ENDPATH**/ ?>