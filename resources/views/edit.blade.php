
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edytuj uzytkownika') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-12">
                <div class="p-6 bg-white border-b border-gray-200">
                    Dane użytkownika
                </div>


                <form method="POST" action="{{route('editSave', $customer->id)}}">
                    @csrf

                    <div>
                        <x-label for="name" :value="__('Nazwa')" />
        
                        <x-input id="name" class="block mt-1 w-full"
                                        type="text"
                                        name="name" value="{{$customer->name}}"/>
                    </div>
                    <div>
                        <x-label for="gender" :value="__('Płeć')" />
        
                        <x-input id="gender" class="block mt-1 w-full"
                                        type="text"
                                        name="gender" value="{{$customer->gender}}" />
                    </div>

                    <div>
                        <x-label for="culture" :value="__('Kultura')" />
        
                        <x-input id="culture" class="block mt-1 w-full"
                                        type="text"
                                        name="culture" value="{{$customer->culture}}" />
                    </div>

                    <div>
                        <x-label for="born" :value="__('Urodzony')" />
        
                        <x-input id="born" class="block mt-1 w-full"
                                        type="text"
                                        name="born" value="{{$customer->born}}" />
                    </div>

                    <div>
                        <x-label for="died" :value="__('Zmarł')" />
        
                        <x-input id="died" class="block mt-1 w-full"
                                        type="text"
                                        name="died" value="{{$customer->died}}" />
                    </div>
                    
                    <div>
                        <x-label for="father" :value="__('Ojciec')" />
        
                        <x-input id="father" class="block mt-1 w-full"
                                        type="text"
                                        name="father" value="{{$customer->father}}" />
                    </div>

                    <div>
                        <x-label for="mother" :value="__('Matka')" />
        
                        <x-input id="mother" class="block mt-1 w-full"
                                        type="text"
                                        name="mother" value="{{$customer->mother}}"  />
                    </div>

                    <div class="mt-5">
                        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <!-- Heroicon name: lock-closed -->
                            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                          </span>
                         Edytuj
                        </button>
                    </div>

                    <div class="text-sm">
                        <a href="{{ route('dashboard') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                          Wróć
                        </a>
                      </div>

                </form>
            </div>

        
        </div>
    </div>
</x-app-layout>
