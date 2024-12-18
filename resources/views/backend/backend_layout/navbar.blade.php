<!-- Main Dashboard -->
<main class="flex-1 overflow-hidden">
    <!-- Header -->
    <header class="bg-white shadow p-4 flex flex-wrap md:flex-nowrap justify-between items-center">
        <h1 class="text-2xl font-bold mb-4 md:mb-0 w-full md:w-auto text-center md:text-left">Dashboard</h1>

        <div class="flex flex-wrap md:flex-nowrap items-center w-full md:w-auto justify-center md:justify-end space-x-0 md:space-x-4">

            <!-- Search Input (takes full width on mobile) -->
            <input type="text" placeholder="Search..." class="border border-gray-300 rounded p-2 w-full md:w-auto mb-4 md:mb-0 focus:outline-none focus:ring-2 focus:ring-blue-500">

            <!-- Notifications Button (centered on mobile) -->
            <button class="relative mb-4 md:mb-0 w-fu
            ll md:w-auto flex justify-center">
                <span class="text-gray-600 material-icons">notifications</span>
                <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></span>
            </button>

            <!-- Logout Button (centered on mobile) -->
            <form action="{{ route('logout') }}" method="POST" class="w-full md:w-auto flex justify-center mb-4 md:mb-0">
                @csrf
                <button type="submit" class="nav-link btn btn-link" style="color: inherit;">Logout</button>
            </form>

            <!-- User Info (centered on mobile) -->
            <div class="flex items-center space-x-2 w-full md:w-auto justify-center md:justify-start">
                <img src="/assets/images/Group 146.png" alt="User Image" class="w-10 h-10 rounded-full">
                <span>John Doe</span>
            </div>
        </div>
    </header>

