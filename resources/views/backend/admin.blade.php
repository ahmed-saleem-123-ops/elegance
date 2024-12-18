@extends('backend.backend_layout.master')
@section('content')

        <div class="p-6 space-y-6">

            <!-- Analytics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Sample Card -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-bold mb-2">Impressions</h2>
                    <p class="text-2xl font-semibold text-blue-500">1,563</p>
                </div>

                <!-- Sample Card -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-bold mb-2">Goal</h2>
                    <p class="text-2xl font-semibold text-green-500">30,564</p>
                </div>

                <!-- Sample Card -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-bold mb-2">Impact</h2>
                    <p class="text-2xl font-semibold text-orange-500">42.6%</p>
                </div>
            </div>

            <!-- Analytics Graph -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-4">Deals Analytics</h2>
                <div id="chart"></div>
            </div>

            <!-- Additional Sections -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Example Extra Content Cards -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="font-bold text-lg mb-2">Published Project</h2>
                    <p class="text-gray-600">532 <span class="text-green-500">+1.69%</span></p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="font-bold text-lg mb-2">Completed Task</h2>
                    <p class="text-gray-600">4,569 <span class="text-red-500">-0.5%</span></p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="font-bold text-lg mb-2">Ongoing Project</h2>
                    <p class="text-gray-600">365 <span class="text-green-500">+0.35%</span></p>
                </div>
            </div>

        </div>
    </main>
</div>

@endsection

