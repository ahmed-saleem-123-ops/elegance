<!-- Main Container -->
<div class="flex ">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-900 text-gray-100 min-h-screen fixed top-0 left-0 transform -translate-x-full md:translate-x-0 transition-transform duration-200 ease-in-out z-10 md:relative">
        <div class="p-4 text-center font-bold text-lg border-b border-gray-700">ADMINDek</div>
        <nav class="mt-4">
            <ul>
                <li class="px-4 py-2 text-gray-400 uppercase">Navigation</li>
                <li class="px-4 py-2 hover:bg-gray-800 rounded-lg mt-2"><a href="{{ route('brand') }}">Brand</a></li>
                <li class="px-4 py-2 hover:bg-gray-800 rounded-lg mt-2"><a href="{{ route('category') }}">Category</a></li>
                <li class="px-4 py-2 hover:bg-gray-800 rounded-lg mt-2"><a href="{{ route('order') }}">Order</a></li>
                <li class="px-4 py-2 hover:bg-gray-800 rounded-lg mt-2"><a href="{{ route('admin.product') }}">Product</a></li>
                <li class="px-4 py-2 hover:bg-gray-800 rounded-lg mt-2"><a href="{{ route('testimonial') }}">Testimonial</a></li>
                <li class="px-4 py-2 hover:bg-gray-800 rounded-lg mt-2"><a href="{{ route('blog') }}">Blog</a></li>
                <li class="px-4 py-2 hover:bg-gray-800 rounded-lg mt-2"><a href="{{ route('tag') }}">Tag</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Toggle Button for Mobile -->
    <button id="sidebarToggle" class="md:hidden fixed top-4 left-4 z-20 bg-gray-900 text-white p-2 rounded">
        ☰
    </button>


