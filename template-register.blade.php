@extends('app')

@section('content')
    <div class="max-w-7xl flex justify-center px-4 sm:px-6 lg:px-8 mt-20">
        <div class="h-130 w-1/3 border rounded-xl border-gray-950 shadow-2xl shadow-gray-950 ">
            <h2 class="text-3xl font-bold mb-10 text-center mt-3">Register</h2>

            <form action="" method="POST" class="space-y-6 text-center">
                <div>
                    <label for="judul" class="block text-lg">Username </label>
                    <input type="text" name="name" id="judul" value=""
                        class="w-4/5 p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600 @error('judul')border-red-500 @enderror">
                    @error('username')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="director" class="block text-lg ">Email</label>
                    <input type="text" name="email" id="director" value=""
                        class="w-4/5 p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600 @error('director')border-red-500 @enderror">
                    @error('director')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="year" class="block text-lg ">Password</label>
                    <input type="password" name="password" id="year" value=""
                        class="w-4/5 p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600 @error('year')border-red-500 @enderror">
                    @error('year')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="duration" class="block text-lg ">Confirm Password</label>
                    <input type="password" name="password_confirm" id="duration" value=""
                        class="w-4/5 p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600 @error('duration')border-red-500 @enderror">
                    @error('duration')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="text-md">
                    <a href="">sudah punya akun? login</a>
                </div>
                <div>
                    <button type="submit" class="bg-blue-600 px-6 py-2 rounded hover:bg-blue-500">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
