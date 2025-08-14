@extends('backend.backend_layout.master')
@section('content')
    <div class="container mx-auto mt-5 px-4">
        <h2 class="text-2xl font-bold text-center mb-5">Advanced Form</h2>
        <form   action="{{ isset($udas) ? '/admin/ahmed/update/'.$udas->id  : route('ahmed.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($udas))
                @method('PUT')
            @endif
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="p-4">
                    <label class="block text-lg font-semibold mb-1">Image</label>
                    <input type="file" class="border border-gray-300 rounded p-2 w-full" name="img">
                    @if(isset($udas) && $udas->img)
                        <img  src="{{ asset('storage/' . $udas->img) }}" alt="Product Image" class="w-24 h-24 mt-2">
                    @endif

                    @error('img')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="p-4">
                    <label class="block text-lg font-semibold mb-1">Title</label>
                    <input type="text" name="title" value="{{ old('title', $udas->title ?? '') }}" placeholder="Enter your Title" class="border border-gray-300 rounded p-2 w-full" />
                    @error('title')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="p-4">
                    <label class="block text-lg font-semibold mb-1">Country</label>
                    <input type="text" name="country" value="{{ old('country', $udas->country ?? '') }}" placeholder="Enter your Country" class="border border-gray-300 rounded p-2 w-full" />
                    @error('country')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="p-4">
                    <label class="block text-lg font-semibold mb-1">State</label>
                    <input type="text" name="state" value="{{ old('state', $udas->state ?? '') }}" placeholder="Enter your State" class="border border-gray-300 rounded p-2 w-full" />
                    @error('state')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="p-4">
                    <label class="block text-lg font-semibold mb-1">City</label>
                    <input type="text" name="city" value="{{ old('city', $udas->city ?? '') }}" placeholder="Enter your City" class="border border-gray-300 rounded p-2 w-full" />
                    @error('city')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="p-4 md:col-span-2 lg:col-span-3">
                    <label class="block text-lg font-semibold mb-1">Short Description</label>
                    <textarea name="description" placeholder="Enter your Description" class="border border-gray-300 rounded p-2 w-full">{{ old('description', $udas->description ?? '') }}</textarea>
                    @error('description')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="text-center mt-5">
                <button type="submit" class="bg-blue-500 text-white rounded px-4 py-2 hover:bg-blue-600">Submit</button>
            </div>
        </form>
    </div>
@endsection
