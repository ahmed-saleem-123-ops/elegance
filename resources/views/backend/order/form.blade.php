@extends('backend.backend_layout.master')
@section('content')
<div class="container mx-auto mt-5 p-4 bg-white shadow-md rounded">
    <h2 class="text-2xl font-semibold mb-6 text-center">Advanced Form</h2>
    <form action="{{ isset($edit) ? route('order.update', $edit->id) : route('order.store') }}" method="POST">
    @csrf

    @if(isset($edit))
        @method('PUT')  <!-- Ye line add karna zaroori hai -->
        @endif
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Name:</label>
            <input type="text" name="name" value="{{ old('name', isset($edit->id) ? $edit->name : '') }}" required
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Email:</label>
            <input type="email" name="email" value="{{ old('email', isset($edit->id) ? $edit->email : '') }}" required
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">City:</label>
            <input type="text" name="city" value="{{ old('city', isset($edit->id) ? $edit->city : '') }}" required
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Address:</label>
            <input type="text" name="address" value="{{ old('address', isset($edit->id) ? $edit->address : '') }}" required
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 font-medium mb-2">Country:</label>
            <input type="text" name="country" value="{{ old('country', isset($edit->id) ? $edit->country : '') }}" required
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
        </div>

        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
            Submit
        </button>
    </form>
</div>

</main>
</div>

@endsection




