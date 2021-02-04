
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Strona główna') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Lista użytkowników z api
                </div>
                <div class="p-12 max-w-md">
                <form action="{{ route('dashboard') }}" method="get">
                    @csrf
                    <div>
                        <x-label for="name" :value="__('Szukaj nazwa')" />
        
                        <x-input id="name" class="block mt-1 w-full"
                                        type="text"
                                        name="name" value=""/>
                    </div>
                    <div class="pt-6">
                        <select class="appearance-none w-full" name="gender">
                            <option value="all">Wszystkie</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="pt-6">
                        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Szukaj
                        </button>
                    </div>
                </form>
                </div>
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">@sortablelink('name', 'Nazwa', ['filter' => 'active, visible'], ['class' => 'group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500', 'rel' => 'nofollow'])</th>
                            <th scope="col">@sortablelink('gender', 'Płeć')</th>
                            <th scope="col">Kultura</th>
                            <th scope="col">Daty</th>
                            <th scope="col">Rodzice</th>
                            <th scope="col">Tytuły</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customer as $data)
                        <tr class="border border-indigo-600">
                            <th scope="row">{{ $data->id }}</th>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->gender }}</td>
                            <td>{{ $data->culture }}</td>
                            <td>Urodzony: {{ $data->born }}<br>Zmarł: {{ $data->died }}</td>
                            <td>Ojciec: {{ $data->father }}<br>Matka: {{ $data->mother }}</td>
                            <td>
                            @foreach($data->titles as $key)
                                {{$key->name}},<br>
                            @endforeach
                            </td>
                            <td>
                                <a href="{{route('edit', $data->id)}}" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Edytuj
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        
                {{-- Pagination --}}
                <div class="d-flex justify-content-center">
                    {{$customer->appends(Request::capture()->except('page'))->links()}}
                </div>
            </div>

        
        </div>
    </div>
</x-app-layout>
