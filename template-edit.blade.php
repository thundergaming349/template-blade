@extends('app')


@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold mb-6">Tambah Film</h2>

        <form action="{{ route('update', $id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            <div>
                <label for="judul" class="block text-lg mb-2">Judul </label>
                <input type="text" name="judul" id="judul" value="{{ $movie['name'] }}"
                    class="w-full p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div>
                <label for="director" class="block text-lg mb-2">Director</label>
                <input type="text" name="director" id="director" value="{{ $movie['director'] }}"
                    class="w-full p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div>
                <label for="year" class="block text-lg mb-2">Tahun</label>
                <input type="text" name="year" id="year" value="{{ $movie['year'] }}"
                    class="w-full p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div>
                <label for="duration" class="block text-lg mb-2">Durasi</label>
                <input type="text" name="duration" id="duration" value="{{ $movie['duration'] }}"
                    class="w-full p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div>
                <label for="synopsis" class="block text-lg mb-2">Sinopsis</label>
                <textarea name="synopsis" id="synopsis" cols="20" rows="5"
                    class="w-full p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600">{{ $movie['synopsis'] }}</textarea>
            </div>
            <div>
                <label for="genre" class="block text-lg mb-2">Genre</label>
                <input type="text" name="genre" id="genre" value="{{ $movie['genre'] }}"
                    class="w-full p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div>
                <label for="poster" class="block text-lg mb-2">Poster</label>
                <input type="text" name="poster" id="poster" value="{{ $movie['poster'] }}"
                    class="w-full p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>

            <div>
                <button type="submit" class="bg-blue-600 px-6 py-2 rounded hover:bg-blue-500">Ubah</button>
            </div>
        </form>
    </div>
@endsection

/*     Route::get('/{id}/edit', [MovieController::class, 'edit'])->name('edit');  */
/*     Route::get('/{$id}', [MovieController::class, 'update'])->name('update');  */
/* Tambahan pada router */
