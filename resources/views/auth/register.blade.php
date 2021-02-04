<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div>
                <img class="mx-auto h-12 w-auto" src="https://mker.site/assets/img/favicon.jpg" alt="Workflow">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                  Zarejestruj się
                </h2>
              </div>

        </x-slot>

            <div class="flex items-center justify-center bg-gray-50">
                <div class="max-w-md w-full space-y-8">

                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <input type="hidden" name="remember" value="true">
                    <div class="rounded-md shadow-sm max-w-md ">

                        <div>
                            <x-label for="name" :value="__('Nazwa')" />
            
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                        </div>
            
                        <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('Email')" />
            
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                        </div>
            
                        <!-- Password -->
                        <div>
                            <x-label for="password" :value="__('Hasło')" />
            
                            <x-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />
                        </div>
            
                        <!-- Confirm Password -->
                        <div>
                            <x-label for="password_confirmation" :value="__('Potwierdź hasło')" />
            
                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required />
                        </div>
                    </div>
              
                    <div>
                        <div class="text-sm">
                            <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                              Posiadasz już konto?
                            </a>
                          </div>
                      <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                          <!-- Heroicon name: lock-closed -->
                          <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                          </svg>
                        </span>
                       Załóż konto
                      </button>
                    </div>
                  </form>
                </div>
              </div>
  

    </x-auth-card>
</x-guest-layout>
