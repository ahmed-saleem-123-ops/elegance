@extends('frunt_layout.master')
@section('content')

    <main>
        <div id="1styear">
            <div class="bg-cover bg-center flex items-center justify-center px-6"
                 style="height: 572px; background-image: url('assets/images/Frame 97.png');">
                <div class="flex flex-col items-start md:items-center">
                    <h1 class="text-4xl md:text-6xl mb-3 text-[#323232] font-times italic font-normal">All products</h1>
                    <p class="mb-3 text-lg md:text-xl text-[#383838] font-poppins tracking-[5.6px] uppercase">True Natural - True Organic</p>
                </div>
            </div>
        </div>

        <div id="login-popup" class="fixed inset-0 flex items-center justify-center z-50" style="display: none;">
            <div class="overlay fixed inset-0 bg-gray-900 opacity-50" onclick="closePopup()"></div>
            <div class="popup bg-white rounded-lg shadow-lg p-6 relative z-10 max-w-sm w-full">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Please Login</h2>
                <p class="text-gray-600 mb-1">You need to log in to add items to your cart.</p>
                <p class="text-sm text-center text-gray-600 mb-2">Don’t have an account? <a href="{{ route('user.register') }}" class="text-red-500 hover:underline">SIGN UP</a></p>
                <div class="flex justify-between">
                    <a href="{{ route('user.login') }}" class="bg-black text-white font-semibold py-2 px-4 rounded  hover:opacity-80">Login</a>
                    <button onclick="closePopup()" class="bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded hover:bg-gray-400">Close</button>
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-4 mx-20 sm:gap-20 md:10 lg:gap-5 py-20">
            <div class="col-span-1">
                <div class="space-y-6 pt-11">
                    <div>
                        <h1 class="pb-2 font-bold">All</h1>
                        <div class="border"></div>
                    </div>
                    <div>
                        <h1 class="pb-2 font-bold">All</h1>
                        <div class="border"></div>
                    </div>
                    <div class="space-y-4">
                        <h1 class="font-bold">Size</h1>
                        <div class="flex gap-2">
                            <input type="checkbox">
                            <h1>S (2)</h1>
                        </div>
                        <div class="flex gap-2">
                            <input type="checkbox">
                            <h1>M (2)</h1>
                        </div>
                        <div class="flex gap-2">
                            <input type="checkbox">
                            <h1>L (2)</h1>
                        </div>
                        <div class="flex gap-2">
                            <input type="checkbox">
                            <h1>XL (2)</h1>
                        </div>
                    </div>
                    <form method="GET" action="{{ route('products') }}">
                    <div class="space-y-4">
                        <h1 class="font-bold">Product Categories</h1>

                        <!-- Lips Category -->
                        <div class="flex gap-2">
                            <input type="radio" name="category" value="Lips" class="category-checkbox">
                            <h1>Lips</h1>
                        </div>

                        <!-- Hairs Category -->
                        <div class="flex gap-2">
                            <input type="radio" name="category" value="Hairs" class="category-checkbox">
                            <h1>Hairs</h1>
                        </div>

                        <!-- Nails Category -->
                        <div class="flex gap-2">
                            <input type="radio" name="category" value="Nails" class="category-checkbox">
                            <h1>Nails</h1>
                        </div>

                        <!-- Eyes Category -->
                        <div class="flex gap-2">
                            <input type="radio" name="category" value="Eyes" class="category-checkbox">
                            <h1>Eyes</h1>
                        </div>

                        <!-- Face Category -->
                        <div class="flex gap-2">
                            <input type="radio" name="category" value="Face" class="category-checkbox">
                            <h1>Face</h1>
                        </div>
                    </div>
                    <button type="submit" class="bg-blue-500 text-white py-2  mt-6 px-4 rounded">Filter</button>
                    </form>

                    <div class="space-y-4">
                        <h1 class="font-bold">Availability</h1>
                        <div class="flex gap-2">
                            <input type="checkbox">
                            <h1>In Stock (32)</h1>
                        </div>
                        <div class="flex gap-2">
                            <input type="checkbox">
                            <h1>Not Available (2)</h1>
                        </div>
                    </div>
                    <form method="GET" action="{{ route('products') }}">
                        <label>Min Price: $<span id="minPriceValue">{{ request('minPrice', 0) }}</span></label>
                        <input type="range" name="minPrice" min="0" max="1000" value="{{ request('minPrice', 0) }}" oninput="updateMinValue(this.value)">

                        <label>Max Price: $<span id="maxPriceValue">{{ request('maxPrice', 1000) }}</span></label>
                        <input type="range" name="maxPrice" min="0" max="1000" value="{{ request('maxPrice', 1000) }}" oninput="updateMaxValue(this.value)">

                        <button type="submit" class="bg-blue-500 text-white py-2  mt-6 px-4 rounded">Filter</button>
                    </form>

                    <script>
                        function updateMinValue(val) {
                            document.getElementById('minPriceValue').textContent = val;
                        }
                        function updateMaxValue(val) {
                            document.getElementById('maxPriceValue').textContent = val;
                        }
                    </script>

                    <div class="space-y-2">
                        <h1 class="font-bold">Tags</h1>
                        <div class="border h-1 bg-[#C75D68] border-[#C75D68]"></div>
                    </div>

                    <div class="grid grid-cols-3 gap-4">
                        @foreach($tags as $tag)
                            <div class="border rounded-full p-5">{{ $tag->title }}</div>
                        @endforeach
                    </div>


                    <div>
                        <img src="/assets/images/Rectangle 163.png" alt="">
                    </div>
                </div>
            </div>

            <div class="col-span-3">
                <div class="flex items-center justify-center md:justify-end gap-4 pb-5 ">
                    <p class="text-gray-600 text-sm">Sort by:</p>
                    <div class="flex items-center border border-[#A5A5A5] rounded-full p-2 ">
                        <input type="text" autocomplete="off" placeholder="Relevance" class=" focus:outline-none p-2 ml-4 placeholder:text-black placeholder:text-sm">
                        <i class="fa-solid fa-arrow-down mr-1"></i>
                    </div>
                </div>

                <div class="border overflow-hidden"></div>
                <div class="flex flex-wrap  justify-center gap-4 pt-10">

                    @foreach($products as $product)
                        <div class="product-item w-full md:w-1/4 flex flex-col items-center relative group transition-all duration-300 hover:bg-white p-4 rounded-lg hover:shadow-xl">
                            <!-- Image -->
                            <div class="relative">
                                <img src="{{ Storage::url($product->img) }}" alt="{{ $product->title }}" class="transition-all duration-300">

                                <!-- New Badge -->
                                @if($product->created_at >= now()->subDays(7))
                                    <span class="absolute top-2 right-2 bg-red-500 text-white text-xs px-2 py-1 rounded">New</span>
                                @endif

                            </div>

                            <!-- Product Details -->
                            <h1 class="text-center mt-2 text-xs text-red-500 uppercase">{{ $product->category->title }}</h1>
                            <h3 class="text-center text-xl font-semibold text-[#323232]">{{ $product->title }}</h3>
                            <p class="text-center text-lg font-medium text-gray-600">${{ $product->price }}</p>

                            <!-- Quantity Input (Visible on hover) -->
                            <input type="number" class="quantity     mt-2 p-2 border rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300" value="1" min="1">

                            <!-- Add to Cart and Quick View Buttons (Visible only on hover) -->
                            <div class="buttons mt-4 flex flex-col items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 invisible group-hover:visible">
                                <button class="share-btn opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center space-x-2 absolute top-3 left-3">
                                    <i class="fas fa-share-alt text-xl"></i>
                                </button>
                                <button class="add-to-cart-btn bg-black hover:opacity-80 text-white font-medium py-2 px-4 rounded flex items-center" data-id="{{ $product->id }}">
                                    <span>Add to Cart</span>
                                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h18l-2 13H5L3 3z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 21h8m-4-4v4"></path>
                                    </svg>
                                </button>
                                <div class="mt-3">
                                    <a href="/cart" class="mt-2 text-sm text-gray-400">Quick View</a>
                                    <div class="border"></div>
                                </div>

                            </div>
                        </div>


                        <!-- Share Modal (Hidden initially) -->
                        <div id="share-modal" class="hidden fixed inset-0 flex justify-center items-center z-50">
                            <div class="bg-white p-6 rounded-lg w-96">
                                <h2 class="text-xl font-semibold text-center mb-4">Share Product</h2>
                                <div class="space-y-4">
                                    <p class="text-center">Click the link below to share this product:</p>
                                    <div class="flex justify-center">
                                        <input type="text" id="share-link" class="border px-4 py-2 w-full rounded-md" readonly>
                                    </div>

                                    <!-- Social Media Share Buttons with Icons -->
                                    <div class="flex justify-center gap-4 mt-4">
                                        <a id="facebook-share" href="#" target="_blank" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg">
                                            <i class="fa-brands fa-facebook"></i><!-- Facebook Icon -->
                                        </a>
                                        <a id="twitter-share" href="#" target="_blank" class="bg-blue-400 hover:bg-blue-500 text-white py-2 px-4 rounded-lg">
                                            <i class="fa-brands fa-twitter"></i> <!-- Twitter Icon -->
                                        </a>
                                        <a id="whatsapp-share" href="#" target="_blank" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-lg">
                                            <i class="fa-brands fa-whatsapp"></i> <!-- WhatsApp Icon -->
                                        </a>
                                    </div>
                                </div>
                                <div class="flex justify-center mt-4">
                                    <button id="close-modal" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-lg">Close</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection