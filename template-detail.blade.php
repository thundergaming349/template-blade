@extends('app')


@section('content')
    <div class="flex flex-col md:flex-row items-start">
        <div class="w-full md:w-1/4 ml-30">
            <img src="{{ $movie['poster'] }}" alt="" class="rounded-lg shadow-lg size-lg">
        </div>
        <div class="md:ml-10 mt-5 md:mt-0 w-full md:w-2/3">
            <h2 class="text-4xl font-bold mb-4">{{ $movie['name'] }}</h2>
            <p class="text-gray-400 text-lg mb-4">Release: <span class="text-white">{{ $movie['year'] }}</span></p>
            <p class="text-gray-400 text-lg mb-4">
                Duration: <span class="text-white">{{ $movie['duration'] }}</span> Minutes.
            </p>


            <hr class="text-gray-200 opacity-70 mb-7">
            <p class="text-lg mb-4">{{ $movie['synopsis'] }}</p>
            <hr class="text-gray-200 opacity-70 mt-7 mb-4">


            <h3 class="text-xl font-semibold mb-2">Genre</h3>
            <p class="text-gray-400 mb-4">
                @foreach ($movie['genre'] as $genre)
                    @if ($genre !== end($movie['genre']))
                        {{ $genre }},
                    @else
                        {{ end($movie['genre']) }}
                    @endif
                @endforeach
            </p>
        </div>
    </div>
@endsection
