<header class="bg-gray-100 relative " style="z-index: 99;">
    <div class="container mx-auto px-4 py-6 flex flex-col md:flex-row justify-between items-center">
        <!-- Logo Section -->
        <div class="flex items-center justify-between w-full md:w-auto mb-4 md:mb-0">
            <img src="/assets/images/Ethereal Elegance.png" alt="Logo" class="h-8 md:h-12">

            <button id="menu-toggle" class="block md:hidden text-xl">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <!-- Navigation Links -->
        <nav id="menu-links" class="hidden md:flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6 text-center items-center ">
            <!-- Links -->
            <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-600 py-2 md:py-0">Home</a>
                <a href="{{ route('about') }}" class="text-gray-600 hover:text-blue-600 py-2 md:py-0">ABOUT US</a>
                <a href="{{ route('products') }}" class="text-gray-600 hover:text-blue-600 py-2 md:py-0">SHOP</a>
                <a href="{{ route('contact') }}" class="text-gray-600 hover:text-blue-600 py-2 md:py-0">CONTACT US</a>
                <a href="{{ route('blog.index') }}" class="text-gray-600 hover:text-blue-600 py-2 md:py-0">BLOGS</a>
            </div>
        </nav>

        <div id="menu-actions" class="hidden md:flex flex-col md:flex-row items-center text-center space-x-2  ">
            <!-- Login/Logout -->
            <div class="flex flex-col md:flex-row items-center md:space-x-6">


                @if (Auth::check())
                    <ul class="layout-ul">
                        <li>Welcome, {{ auth()->user()->name }}</li>
                    </ul>
                    <form action="{{ route('logout.user') }}" method="POST" class="md:inline">
                        @csrf
                        <button type="submit" class="text-gray-600 hover:text-blue-600 py-2 md:py-0">Logout</button>
                    </form>
                @else
                    <a href="{{ route('user.login') }}" class="text-gray-600 hover:text-blue-600 py-2 md:py-0">Login</a>
                @endif
            </div>


            <style>
              .layout-ul li {
                    font-size: 30px;
                    font-weight: 400;
                    font-family: cursive;
                }
            </style>


            <form action="{{ route('home') }}" method="get" class="flex items-center md:space-x-3">
                <div class="search-container relative flex items-center">
                    <!-- Search Icon Button -->
                    <button type="button" id="search-icon" class="search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>

                    <!-- Search Input Field and Submit Button -->
                    <div id="search-field" class="hidden flex gap-2 items-center">
                        <input type="text" id="search-input" name="search"
                               class="border rounded px-2 py-1 md:w-auto w-full" placeholder="Search products..." value="{{ request('search') }}">
                        <button type="submit" id="search-button"
                                class="bg-black text-white px-4 py-2 rounded">Search</button>
                    </div>
                </div>
            </form>

            <!-- Cart -->
            <a href="{{ session('cart') && count((array) session('cart')) > 0 ? (auth()->check() ? route('cart.view') : route('user.login')) : route('cart.view') }}" class="relative  hover:text-blue-600">
                <i class="fa-solid fa-basket-shopping text-xl mr-2"></i>
                @if(session('cart') && count((array) session('cart')) > 0)
                    <span class="absolute top-0 right-0 bg-red-500 text-white rounded-full text-[10px] px-1.5 py-0.5 leading-none">{{ count((array) session('cart')) }}</span>
                @endif
            </a>
        </div>




        </div>



</header>



<script>
    // Toggle for Navigation Links
    document.getElementById('menu-toggle').addEventListener('click', function () {
        const menuLinks = document.getElementById('menu-links');
        menuLinks.classList.toggle('hidden');
    });

    // Toggle for Actions (Login, Search, Cart)
    document.getElementById('menu-toggle').addEventListener('click', function () {
        const menuActions = document.getElementById('menu-actions');
        menuActions.classList.toggle('hidden');
    });

</script>






<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

