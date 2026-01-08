@extends('app')

@section('content')
    <div class="border-t border-b border-gray-500 text-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-center">Daftar Film</h1>
        </div>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-5">
        @foreach ($movie as $item)
            <div class="bg-gray-800 p-4 rounded-lg relative group">
                <img src="{{ $item['poster'] }}" alt="" class="w-full rounded-md">
                <h3 class="text-lg mt-2">{{ $item['name'] }}</h3>
                <p class="text-sm text-gray-400">{{ $item['year'] }}</p>
            </div>

            <div class="absolute top-2 right-2 space-x-2 opacity-0 group-hover:opacity-100 transition">
                <a href="" class="bg-green-600 p-1 rounded hover:bg-green-100">✏️</a href="">
                <button class="bg-red-600 p-1 rounded hover:bg-red-100">🗑️</button>
            </div>
        @endforeach
    </div>
@endsection
