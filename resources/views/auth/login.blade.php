<x-guest-layout>
<x-auth-card>
    <x-slot name="logo">
        <div>
            <img class="mx-auto h-12 w-auto" src="https://mker.site/assets/img/favicon.jpg" alt="Workflow">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
              Zaloguj się
            </h2>
          </div>

    </x-slot>
<div class="flex items-center justify-center bg-gray-50">
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="max-w w-full space-y-8">
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="hidden" name="remember" value="true">
        <div class="rounded-md shadow-sm">
          <div>
            <x-label for="email" :value="__('Email')" />
            <x-input id="email" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Adres email" type="email" name="email" :value="old('email')" required autofocus />

          </div>
          <div>
            <x-label for="password" :value="__('Hasło')" />
            <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
          </div>
        </div>
  
        <div class="flex items-center justify-between mt-5">
            <div class="text-sm">
                <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                  Załóż konto
                </a>
              </div>
          <div class="flex items-center">
            <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
            <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                Zapamiętaj mnie
            </label>
          </div>
  
        </div>
  
        <div class="mt-5">
          <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
              <!-- Heroicon name: lock-closed -->
              <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
              </svg>
            </span>
           Zaloguj
          </button>
        </div>
      </form>
    </div>
    </div>
    
  </div>
</x-auth-card>
</x-guest-layout>