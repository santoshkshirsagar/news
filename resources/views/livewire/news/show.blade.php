<div>
    <!-- Navbar -->
    <x-topnav />

    <!-- News Section -->
    <section class="container mx-auto my-8">
            <!-- News Card 1 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <!-- <img src="https://via.placeholder.com/500x300" alt="News Image" class="w-full"> -->
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">{{ $news->title }}</h3>
                    <h2 class="text-sm text-gray-500 mb-2">{{ $news->category->name }}</h3>
                    <p class="text-gray-600">{{ $news->content }}</p>
                </div>
            </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 News Portal. All rights reserved.</p>
        </div>
    </footer>
</div>
