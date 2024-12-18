
@extends('backend.backend_layout.master')
@section('content')
<div class="container mx-auto my-5">
    <div class="flex justify-center">
        <div class="w-full md:w-8/12">
            <div class="bg-white shadow-md rounded-lg">
                <div class="bg-blue-500 text-white text-center p-4 rounded-t-lg">
                    <h2 class="text-2xl">Order Details</h2>
                </div>
                <div class="p-4">
                    <h5 class="text-lg font-semibold">Order #12345</h5>
                    <p><strong>Order Date:</strong> 01 Oct, 2024</p>
                    <p><strong>Customer Name:</strong> Ahmed</p>
                    <p><strong>Shipping Address:</strong> 123 Main Street, City, Country</p>

                    <table class="min-w-full border border-gray-300 mt-4">
                        <thead>
                        <tr class="bg-gray-800 text-white">
                            <th class="border border-gray-300 px-4 py-2">Img</th>
                            <th class="border border-gray-300 px-4 py-2">Product</th>
                            <th class="border border-gray-300 px-4 py-2">Quantity</th>
                            <th class="border border-gray-300 px-4 py-2">Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">
                                    <img src="{{ asset('storage/' . $item->product->img) }}" class="img-fluid" width="50" alt="">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">{{ $item->product->title }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $item->qty }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $item->product->price }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="flex justify-between mt-4">
                        <h4 class="text-lg font-semibold">Total Amount:</h4>
                        <span class="text-lg font-semibold">
                            {{ $items->sum(fn($item) => $item->product->price * $item->qty) }}
                        </span>
                    </div>
                </div>

                <div class="text-center p-4">
                    <a href="{{ route('order') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                        Back to Products
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


</main>
</div>

@endsection
