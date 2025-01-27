<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern E-commerce</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-gray-800">Espada</a>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-gray-600 hover:text-gray-900">Home</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900">Products</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900">Categories</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900">About</a>
                </div>

                <div class="flex items-center space-x-4">
                    <a href="#" class="text-gray-600 hover:text-gray-900">
                        <i class="fas fa-search"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-gray-900 relative">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs">3</span>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-gray-900">
                        <i class="fas fa-user"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="pt-16">
        <div class="relative bg-gray-900 h-[500px]">
            <div class="absolute inset-0 bg-center bg-cover" style="background-image: url('https://images.unsplash.com/photo-1441986300917-64674bd600d8');">
                <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
            </div>
            <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">New Collection</h1>
                <p class="mt-6 text-xl text-gray-300 max-w-3xl">Discover our latest arrivals and trending items.</p>
                <div class="mt-10">
                    <a href="#" class="inline-block bg-white py-3 px-8 rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">Shop Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Products -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-8">Featured Products</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Product Card -->
            @for ($i = 1; $i <= 4; $i++)
            <div class="bg-white rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300">
                <div class="relative">
                    <img src="https://via.placeholder.com/300" alt="Product" class="w-full h-64 object-cover rounded-t-lg">
                    <button class="absolute top-4 right-4 bg-white rounded-full p-2 hover:bg-gray-100">
                        <i class="fas fa-heart text-gray-400 hover:text-red-500"></i>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-medium text-gray-900">Product Name</h3>
                    <p class="text-sm text-gray-500 mt-1">Category</p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold text-gray-900">$99.99</span>
                        <button class="bg-gray-900 text-white px-4 py-2 rounded-md hover:bg-gray-800">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>

    <!-- Categories -->
    <div class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-8">Shop by Category</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach(['Electronics', 'Fashion', 'Home & Living', 'Sports'] as $category)
                <div class="relative rounded-lg overflow-hidden group">
                    <img src="https://via.placeholder.com/300x200" alt="{{ $category }}" class="w-full h-48 object-cover">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-40 group-hover:bg-opacity-50 transition-all duration-300"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <h3 class="text-xl font-bold text-white">{{ $category }}</h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Newsletter -->
    <div class="bg-gray-900 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-white">Subscribe to our newsletter</h2>
                <p class="mt-4 text-gray-300">Get the latest updates about new products and special offers.</p>
                <form class="mt-8 flex max-w-md mx-auto">
                    <input type="email" class="w-full px-5 py-3 text-base text-gray-900 placeholder-gray-500 border border-transparent rounded-l-md focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-900" placeholder="Enter your email">
                    <button class="flex-shrink-0 px-5 py-3 border border-transparent text-base font-medium rounded-r-md text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-900">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Company</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-500 hover:text-gray-900">About</a></li>
                        <li><a href="#" class="text-base text-gray-500 hover:text-gray-900">Careers</a></li>
                        <li><a href="#" class="text-base text-gray-500 hover:text-gray-900">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Products</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-500 hover:text-gray-900">New Arrivals</a></li>
                        <li><a href="#" class="text-base text-gray-500 hover:text-gray-900">Best Sellers</a></li>
                        <li><a href="#" class="text-base text-gray-500 hover:text-gray-900">Sale</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Support</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-500 hover:text-gray-900">Help Center</a></li>
                        <li><a href="#" class="text-base text-gray-500 hover:text-gray-900">Shipping</a></li>
                        <li><a href="#" class="text-base text-gray-500 hover:text-gray-900">Returns</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Connect</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-500 hover:text-gray-900">Facebook</a></li>
                        <li><a href="#" class="text-base text-gray-500 hover:text-gray-900">Instagram</a></li>
                        <li><a href="#" class="text-base text-gray-500 hover:text-gray-900">Twitter</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-200 pt-8">
                <p class="text-base text-gray-400 text-center">&copy; 2025 ShopModern. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>