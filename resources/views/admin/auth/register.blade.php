<!doctype html>
<html lang="fr">
  <head>
    <!-- Meta Tags requis -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <title>GanaLux | Inscription</title>

    @vite('resources/css/app.css')
  </head>
  <body class="bg-[#3b2f2f] font-roboto">

    <div class="flex w-screen h-screen">
      <!-- Formulaire d'inscription -->
      <div class="flex justify-center items-center w-full md:w-1/2 bg-[#4a3939]">
        <div class="max-w-md w-full px-4 py-12">
          <h3 class="text-3xl font-semibold text-left mb-4 text-[#f5e6ca]">Inscrivez-vous sur <strong>GanaLux</strong></h3>
          <p class="text-left text-[#f5e6ca] mb-6">Gestion de votre magasin</p>

          <form action="{{ route('admin.register.submit') }}" method="POST">
            @csrf

            <!-- Nom complet -->
            <div class="mb-4">
              <label for="name" class="block text-[#d6c2aa] mb-2 font-medium">Nom complet</label>
              <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                placeholder="Ayman, Khalida, Houssam..."
                class="w-full px-3 py-3 bg-[#5a4747] border-[#b2978b] text-[#f5e6ca] placeholder-[#e1d2b3] rounded-md shadow-sm focus:ring-[#b85c38] focus:border-[#b85c38] @error('name') border-red-500 @enderror"
                required
              >
              @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>

            <!-- Email -->
            <div class="mb-4">
              <label for="email" class="block text-[#d6c2aa] mb-2 font-medium">Adresse e-mail</label>
              <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="exemple@gmail.com"
                class="w-full px-3 py-3 bg-[#5a4747] border-[#b2978b] text-[#f5e6ca] placeholder-[#e1d2b3] rounded-md shadow-sm focus:ring-[#b85c38] focus:border-[#b85c38] @error('email') border-red-500 @enderror"
                required
              >
              @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>

            <!-- Mot de passe -->
            <div class="mb-4">
              <label for="password" class="block text-[#d6c2aa] mb-2 font-medium">Mot de passe</label>
              <input
                type="password"
                id="password"
                name="password"
                placeholder="Votre mot de passe"
                class="w-full px-3 py-3 bg-[#5a4747] border-[#b2978b] text-[#f5e6ca] placeholder-[#e1d2b3] rounded-md shadow-sm focus:ring-[#b85c38] focus:border-[#b85c38] @error('password') border-red-500 @enderror"
                required
              >
              @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>

            <!-- Confirmation du mot de passe -->
            <div class="mb-4">
              <label for="password_confirmation" class="block text-[#d6c2aa] mb-2 font-medium">Confirmation du mot de passe</label>
              <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                placeholder="Confirmez votre mot de passe"
                class="w-full px-3 py-3 bg-[#5a4747] border-[#b2978b] text-[#f5e6ca] placeholder-[#e1d2b3] rounded-md shadow-sm focus:ring-[#b85c38] focus:border-[#b85c38] @error('password') border-red-500 @enderror"
                required
              >
              @error('password_confirmation')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>

            <!-- Se souvenir de moi -->
            <div class="flex items-center mb-6">
              <label class="flex items-center text-[#d6c2aa]">
                <input
                  type="checkbox"
                  name="remember"
                  {{ old('remember') ? 'checked' : '' }}
                  class="form-checkbox h-4 w-4 text-[#b85c38]"
                >
                <span class="ml-2 text-sm">Se souvenir de moi</span>
              </label>
            </div>

            <!-- Bouton de soumission -->
            <button type="submit" class="w-full py-3 bg-[#b85c38] text-[#f5e6ca] rounded-md hover:bg-[#8c4028] transition duration-200">
              S'inscrire
            </button>
          </form>
        </div>
      </div>

      <!-- Image d'arrière-plan -->
      <div class="w-1/2 h-full bg-cover bg-center hidden md:block relative">
        <!-- Overlay -->
        <div class="w-full h-full bg-[#3b2f2f]/60 absolute top-0 left-0 z-10"></div>
        <!-- Image d'arrière-plan -->
        <div class="w-full h-full absolute top-0 left-0" style="background-image: url('{{ asset('assets/images/login/ganalux.png') }}'); background-size: cover; background-position: center;"></div>
      </div>
    </div>

  </body>
</html>
