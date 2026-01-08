<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master Layout</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

    //ini bisa diubah menjadi @includ('header')
<body class="bg-gray-900 text-white">
    <header class="flex justify-between p-5 bg-gray-800">
        <h1 class="text-2xl font-bold">LK26</h1>
        <button class="bg-transparent px-4 py-2 rounded hover: bg-blue-500"></button>
    </header>

<div class="contaner mx-auto p-5">
    //ini bisa diubah menjadi @yield('?name?')
    <div class="border-t border-b border-gray-500 text-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-center">Daftar Film</h1>
        </div>
    </div>
</div>

</body>

</html>
