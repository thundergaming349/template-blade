@extends('app')

@section('content')
    <div class="border-t border-b border-gray-500 text-white mb-4">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-center mb-4">Daftar Film</h1>
            <input type="text" name="search" id="search" placeholder="🔍︎ Mau nonton apa hari ini?"
                class="w-full p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
        </div>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-5 ">
        @foreach ($movie as $item)
            <div class="bg-gray-800 p-4 rounded-lg relative group ">
                <a href="{{ route('showid', $loop->index) }}">
                    <img src="{{ $item['poster'] }}" alt="" class="w-full rounded-md">
                    <h3 class="text-lg mt-2">{{ $item['name'] }}</h3>
                    <p class="text-sm text-gray-400">{{ $item['year'] }}</p>
                    <p class="text-sm text-gray-400">{{ $item['duration'] }} Minutes</p>


                    <div class="absolute top-2 right-2 space-x-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="{{ route('edit', $loop->index) }}"
                            class="bg-green-600 p-1 rounded hover:bg-green-100">✏️</a>
                        <form id="delete-form-{{ $loop->index }}" action="{{ route('destroy', $loop->index) }}"
                            style="display: none" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                        <a href="{{ route('destroy', $loop->index) }}"
                            onclick="event.preventDefault(); confirm('yakin?'); document.getElementById('delete-form-{{ $loop->index }}').submit()"
                            class="bg-red-600 p-1 rounded hover:bg-red-100">🗑️</a>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <hr class="text-gray-200 opacity-70 mb-7 mt-10">
    <div class="w-full align-center">
        <p class="text-white-400 text-lg mb-2">ingin tambah film?</p>
        <a href="{{ route('create') }}">
            <button class="bg-blue-600 px-4 py-2 align-center rounded hover:bg-blue-500">Tambah Film</button>
        </a>
    </div>
@endsection
