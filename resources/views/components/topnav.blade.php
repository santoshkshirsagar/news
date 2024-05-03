    <nav class="bg-gray-800 p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-xl font-bold">News Portal</a>
            <ul class="flex space-x-4">
                @auth
                    <li><a href="/dashboard" class="hover:text-gray-300">Dashboard</a></li>
                @else
                    <li><a href="/login" class="hover:text-gray-300">Login</a></li>
                    <li><a href="/register" class="hover:text-gray-300">register</a></li>
                @endauth
            </ul>
        </div>
    </nav>