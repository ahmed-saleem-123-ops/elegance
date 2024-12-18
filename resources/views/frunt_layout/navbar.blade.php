<header class="bg-gray-100">
        <div class="container mx-auto px-4 py-6 flex flex-col md:flex-row justify-between items-center">   
            <div class="flex items-center mb-4 md:mb-0">
                <img src="/assets/images/Ethereal Elegance.png" alt="Logo" class="h-12">
            </div>

            <nav class="space-x-0 md:space-x-6 flex flex-col md:flex-row text-center  ">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-600 py-2 md:py-0">Home</a>
                <a href="{{ route('about') }}" class="text-gray-600 hover:text-blue-600 py-2 md:py-0">ABOUT US</a>
                <a href="{{ route('products') }}" class="text-gray-600 hover:text-blue-600 py-2 md:py-0">SHOP</a>
                <a href="{{ route('contact') }}" class="text-gray-600 hover:text-blue-600 py-2 md:py-0">CONTACT US</a>
                <a href="{{ route('blog.index') }}" class="text-gray-600 hover:text-blue-600 py-2 md:py-0">BLOGS</a>
            </nav>
          

            <div class="flex items-center space-x-4">
                @if (Auth::check())
                    <li class="nav-item list-none">
                        <form action="{{ route('logout.user') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link" style="color: inherit;">Logout</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item list-none">
                        <a href="{{ route('user.login') }}" class="nav-link btn btn-link" style="color: inherit;">Login</a>
                    </li>
                @endif
                <button class="hover:text-blue-600">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                    <a href="{{ session('cart') && count((array) session('cart')) > 0 ? (auth()->check() ? route('cart.view') : route('user.login')) : route('cart.view') }}">
                    <button class="relative hover:text-blue-600">
                        <i class="fa-solid fa-basket-shopping text-xl"></i>
                        @if(session('cart') && count((array) session('cart')) > 0)
                            <span class="absolute top-0 right-0  bg-red-500 text-white rounded-full text-[10px] px-1.5 py-0.5 leading-none">{{ count((array) session('cart')) }}</span>
                        @endif
                    </button>
                    </a>





            </div>

        </div>
    </header>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />