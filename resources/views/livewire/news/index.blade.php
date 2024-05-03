<div>
    <!-- Navbar -->
    <x-topnav />
    <!-- Hero Section -->
    <section class="bg-blue-900 text-white py-20 px-4">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Latest News Headlines</h2>
            <p class="text-lg mb-8">Stay updated with the latest news from around the world.</p>
            <!-- <a href="#" class="bg-white text-blue-900 py-2 px-6 rounded-full uppercase font-semibold hover:bg-gray-200">Read More</a> -->
        </div>
    </section>

    <!-- News Section -->
    <section class="container mx-auto my-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($news as $data)
            <!-- News Card 1 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <!-- <img src="https://via.placeholder.com/500x300" alt="News Image" class="w-full"> -->
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">{{ $data->title }}</h3>
                    <h2 class="text-sm text-gray-500 mb-2">{{ $data->category->name }}</h3>
                    <p class="text-gray-600">{{ substr($data->content, 0, 15) }}...</p>
                    <a href="{{ route('news.show', ['news'=>$data->id]) }}" class="text-blue-500 font-semibold hover:text-blue-700">Read More</a>
                </div>
            </div>
            @endforeach

            <div class="p-4">
                {{ $news->links() }}
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
