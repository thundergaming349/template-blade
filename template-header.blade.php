    <header class="flex justify-between p-5 bg-gray-800 fixed w-full z-1000">
        <a href="{{ route('index') }}">
            <h1 class="text-2xl font-bold">Fathar Film</h1>
        </a>
        <div class="flex w-50 justify-evenly">
            @auth
                <form action="{{ route('logout') }}" method="POST">
                    <button class="bg-blue-600 px-4 py-2 rounded hover:bg-blue-500">Logout</button>
                </form>
            @endauth
            @guest
                <form action="{{ route('loginform') }}">
                    <button class="bg-gray-800 px-4 py-2 rounded border border-gray-600 hover:bg-gray-500">login</button>
                </form>
                <form action="{{ route('formregister') }}">
                    <button class="bg-blue-600 px-4 py-2 rounded hover:bg-blue-500">Register</button>
                </form>
            @endguest
        </div>

    </header>
