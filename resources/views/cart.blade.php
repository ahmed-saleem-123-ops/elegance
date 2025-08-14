@extends('frunt_layout.master')
@section('content')

    <div class="container mx-auto mt-5 p-12">
        <h1 class="text-2xl font-bold mb-6">Your Cart</h1>
        @if(session()->has('cart') && count(session('cart')) > 0)
            <table class="min-w-full text-left border-collapse table-auto">
                <thead>
                <tr class="border-b-2 border-gray-200 text-left">
                    <th class="p-3">Image</th>
                    <th class="p-3">Title</th>
                    <th class="p-3">Quantity</th>
                    <th class="p-3">Price</th>
                    <th class="p-3">Total</th>
                    <th class="p-3">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cart as $id => $details)
                    <tr class="border-b border-gray-200">
                        <td class="p-3">
                            <img src="{{ asset('storage/' . $details['img']) }}" class="w-16 h-16 object-cover" alt="Product">
                        </td>
                        <td class="p-3">{{ $details['name'] ?? 'No name available' }}</td>
                        <td class="p-3">
                            <div class="flex items-center space-x-2">
                                <button type="button" class="bg-gray-300 text-gray-700 hover:bg-gray-400 rounded-full h-8 w-8 flex items-center justify-center decrement">-</button>
                                <input type="number" class="quantity-input w-16 text-center border border-gray-300 rounded" name="quantity" data-id="{{ $id }}" value="{{ $details['quantity'] }}" min="1">
                                <button type="button" class="bg-gray-300 text-gray-700 hover:bg-gray-400 rounded-full h-8 w-8 flex items-center justify-center increment">+</button>
                            </div>
                        </td>
                        <td class="p-3">Rs. {{ number_format($details['price'], 2) }}</td>
                        <td class="p-3">Rs. {{ number_format($details['price'] * $details['quantity'], 2) }}</td>
                        <td class="p-3">
                            <form action="{{ route('cart.delete', $id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <!-- Mobile responsive class -->
            <style>
                @media (max-width: 768px) {
                    table {
                        display: block;
                        width: 100%;
                        overflow-x: auto;
                        white-space: nowrap;
                    }
                    th, td {
                        padding: 8px;
                    }
                    th {
                        text-align: left;
                    }
                }
            </style>


            <form action="{{ URL::to('stripe') }}" class="mt-8">
                @csrf
                <h4 class="text-xl font-semibold mb-4">Checkout Details</h4>
                <div class="space-y-4">
                    <input type="text" name="name" class="w-full p-2 border border-gray-300 rounded" placeholder="Name" required>
                    <input type="email" name="email" class="w-full p-2 border border-gray-300 rounded" placeholder="Email" required>
                    <input type="text" name="city" class="w-full p-2 border border-gray-300 rounded" placeholder="City" required>
                    <input type="text" name="country" class="w-full p-2 border border-gray-300 rounded" placeholder="Country" required>
                    <input type="hidden" name="bill" value="{{ $details['price'] * $details['quantity'] }}">
                    <input type="hidden" name="price" value="{{$details['price']}}">
                    <input type="hidden" name="quantity" value="{{$details['quantity']}}">
                    <textarea name="address" class="w-full p-2 border border-gray-300 rounded" placeholder="Address" required></textarea>
                </div>
                <div class="flex items-center mt-2 gap-4">
                <button type="submit" class=" bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Checkout</button>
                <button type="button"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Pay with PayPal
                </button>
                </div>
            </form>

            @else
            <p class="alert alert-warning text-center p-4 bg-yellow-200 text-yellow-800 rounded">Your cart is empty!</p>
        @endif
    </div>



@endsection