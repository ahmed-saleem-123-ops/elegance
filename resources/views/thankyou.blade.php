@extends('frunt_layout.master')
@section('content')

    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <h1 class="text-4xl font-bold text-green-500">Thank You!</h1>
                <p class="text-lg mt-2">Your order has been placed successfully.</p>
                <p class="mt-4">We appreciate your business and will get back to you shortly.</p>
                <a href="{{ route('home') }}" class="mt-6 inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                    Return to Products
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection

