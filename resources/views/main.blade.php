<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fire Link Shrine</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
        }
        .game-card:hover .game-overlay {
            opacity: 1;
        }
    </style>
</head>
<body class="text-white">
    <!-- Sidebar Navigation -->
    <div class="fixed left-0 top-0 h-full w-16 bg-[#202020] z-50 flex flex-col items-center py-4">
        <div class="mb-8">
            <img src="images/fire link shrine.png" alt="Logo" class="w-10 h-10 rounded">
        </div>
        <nav class="flex flex-col items-center space-y-6">
            <a href="#" class="text-gray-400 hover:text-white"><i class="fas fa-home text-xl"></i></a>
            <a href="#" class="text-gray-400 hover:text-white"><i class="fas fa-store text-xl"></i></a>
            <a href="#" class="text-gray-400 hover:text-white"><i class="fas fa-library text-xl"></i></a>
            <a href="#" class="text-gray-400 hover:text-white"><i class="fas fa-users text-xl"></i></a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="ml-16">
        <!-- Top Navigation -->
        <nav class="bg-[#202020] p-4 flex justify-between items-center">
            <div class="flex items-center space-x-6">
                <a href="#" class="text-gray-400 hover:text-white">Store</a>
                <a href="#" class="text-gray-400 hover:text-white">News</a>
                <a href="#" class="text-gray-400 hover:text-white">Categories</a>
            </div>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <input type="text" placeholder="Search games..." class="bg-[#303030] text-white px-4 py-2 rounded-full w-64 focus:outline-none">
                    <i class="fas fa-search absolute right-4 top-3 text-gray-400"></i>
                </div>
                <button class="bg-[#ffffff] px-4 py-2 text-black rounded hover:bg-[#787a7d]">
                    Sign In
                </button>
            </div>
        </nav>

        <!-- Hero Carousel -->
        <div class="relative w-full h-[500px] bg-[#202020]">
            <div class="absolute inset-0 bg-center bg-cover w-full " style="background-image: url('{{ asset('images/bmm.jpg') }}'); background-size: 90%;">
                <div class="absolute inset-0 bg-gradient-to-r from-black/70"></div>
                <div class="relative h-full flex items-center px-12">
                    <div class="max-w-2xl">
                        <h1 class="text-5xl font-bold mb-4">Black Myth Wukong</h1>
                        <p class="text-lg text-gray-300 mb-6">Experience the untold story of Wukong, the Monkey King, as he battles mythical creatures and uncovers ancient secrets in a breathtaking open-world adventure.</p>                        
                        <div class="space-x-4">
                            <span class="text-2xl font-bold">Rp 699.999</span>
                            <button class="bg-[#ffffff] px-8 py-3 rounded font-medium text-black hover:bg-[#787a7d]">
                                Buy Now
                            </button>
                            <button class="bg-[#303030] px-8 py-3 rounded font-medium hover:bg-[#404040]">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Games Grid -->
        <div class="p-8 bg-[#121212]">
            <h2 class="text-2xl font-bold mb-6">Popular Games</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @php
                    // Array gambar untuk setiap game
                    $images = [
                        'images/elden ring.jpeg',
                        'images/sekiro.jpeg',
                        'images/re4.jpeg',
                        'images/lou.jpeg',
                        'images/re2.jpeg',
                        'images/aco.jpeg',
                        'images/fc25.jpeg',
                        'images/gos.jpeg'
                    ];

                    $titles = [
                    'Elden Ring',
                    'Sekiro: Shadows Die Twice - GOTY Edition',
                    'Resident Evil 4 Remake',
                    'The Last of Us Part II',
                    'Resident Evil 2 Remake',
                    'Assassin\'s Creed Odyssey',
                    'EA Sports FIFA 25',
                    'Ghost of Tsushima'
                    ];

                    // Array harga untuk setiap game
                    $prices = [
                        'Rp 1.000.000', 
                        'Rp 800.000',   
                        'Rp 830.999',  
                        'Rp 900.000',  
                        'Rp 649.999',   
                        'Rp 749.999',   
                        'Rp 899.999',   
                        'Rp 799.999'   
                    ];

                    // Array kategori untuk setiap game
                    $categories = [
                        'Action, RPG',
                        'Action, Adventure',
                        'Horror, Action',
                        'Action, Adventure',
                        'Horror, Action',
                        'Action, RPG',
                        'Sports, Action',
                        'Action, Adventure'
                        ];
                    @endphp
                
                @for ($i = 1; $i <= 8; $i++)
                <div class="game-card relative group">
                    <div class="relative">
                        <img src="{{ asset($images[$i-1]) }}" alt="Game" class="w-full h-64 object-cover rounded">
                        <div class="game-overlay absolute inset-0 bg-black/50 opacity-0 transition-opacity duration-300 flex items-center justify-center">
                            <button class="bg-[#303030] px-6 py-2 rounded font-medium hover:bg-[#404040]">
                                View Details
                            </button>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-lg font-medium">{{ $titles[$i-1] }}</h3>
                        <p class="text-gray-400 text-sm mb-2">{{ $categories[$i-1] }}</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold">{{ $prices[$i-1] }}</span>
                            <button class="bg-[#303030] px-4 py-1 text-sm hover:bg-[#404040]">
                                Add to Cart
                            </button>                            
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>

        <!-- Free Games Section -->
        @php
        $freeGames = [
            [
                'image' => '/images/dota 2.jpeg',
                'title' => 'Dota 2',
                'date' => '01/30/2025'
            ],
            [
                'image' => 'images/cs2.png',
                'title' => 'Counter-Strike 2',
                'date' => '02/05/2025'
            ],
            [
                'image' => 'images/pubg.jpeg',
                'title' => 'PlayerUnknowns Battlegrounds',
                'date' => '02/10/2025'
            ],
            [
                'image' => 'images/apex.jpeg',
                'title' => 'Apex Legends',
                'date' => '02/15/2025'
            ],
            [
                'image' => 'images/fortnite.jpeg',
                'title' => 'Fortnite',
                'date' => '02/10/2025'
            ],
            [
                'image' => 'images/Diablo.jpg',
                'title' => 'Diablo III',
                'date' => '02/10/2025'
            ],
        ];
        @endphp
        
        <div class="p-8 bg-[#121212]">
            <h2 class="text-2xl font-bold mb-6">Free Games</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
             @foreach ($freeGames as $game)
                <div class="w-full">
                 <div class="bg-[#202020] rounded-lg overflow-hidden">
                    <img src="{{ $game['image'] }}" alt="{{ $game['title'] }}" class="w-full h-48 object-cover">
                     <div class="p-4">
                        <h3 class="text-lg font-medium mb-2">{{ $game['title'] }}</h3>
                        <p class="text-gray-400 text-sm mb-4">Free until {{ $game['date'] }}</p>
                            <button class="w-full bg-[#ffffff] py-2 text-black rounded font-medium hover:bg-[#787a7d]">
                            Install Now
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-[#202020] p-8">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-bold mb-4">Resources</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Support</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Community</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Developer Portal</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Company</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">About</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">News</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Terms of Service</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Cookie Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Social</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube text-xl"></i></a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-800 text-center text-gray-400">
                <p>&copy; 2025 Janie Natalie cantik. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>
</html>